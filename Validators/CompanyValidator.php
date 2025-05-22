<?php namespace Foostart\Company\Validators;

use Foostart\Category\Library\Validators\FooValidator;
use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;
use Foostart\Company\Models\Company;

use Illuminate\Support\MessageBag as MessageBag;

class CompanyValidator extends FooValidator
{

    protected $obj_crawler;

    public function __construct()
    {
        // add rules
        self::$rules = [
            'company_name' => ["required"],
        ];

        // set configs
        self::$configs = $this->loadConfigs();

        // model
        $this->obj_crawler = new Company();

        // language
        $this->lang_front = 'crawler-front';
        $this->lang_admin = 'crawler-admin';

        // event listening
        Event::listen('validating', function($input)
        {
            self::$messages = [
                'company_name.required'          => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.name')]),
                ];
        });


    }

    /**
     *
     * @param ARRAY $input is form data
     * @return type
     */
    public function validate($input) {

        $flag = parent::validate($input);
        $this->errors = $this->errors ? $this->errors : new MessageBag();

        //Check length
        $_ln = self::$configs['length'];

        $params = [
            'name' => [
                'key' => 'company_name',
                'label' => trans($this->lang_admin.'.fields.name'),
                'min' => $_ln['company_name']['min'],
                'max' => $_ln['company_name']['max'],
            ],
        ];

        $flag = $this->isValidLength($input['company_name'], $params['name']) ? $flag : FALSE;

        return $flag;
    }


    /**
     * Load configuration
     * @return ARRAY $configs list of configurations
     */
    public function loadConfigs(){

        $configs = config('package-company');
        return $configs;
    }

        /**
     *
     * @param ARRAY $input
     * @return BOOLEAN
     */
    public function userValidate($input) {
        //set rules
        self::$rules = [
            'company_name' => ["required"],
            'company_url' => ["required"],
        ];

        //validate
        $flag = parent::validate($input);
        $this->errors = $this->errors ? $this->errors : new MessageBag();

        return $flag;
    }

}
