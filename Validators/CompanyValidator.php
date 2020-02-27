<?php namespace Foostart\Company\Validators;

use Foostart\Category\Library\Validators\FooValidator;
use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;
use Foostart\Company\Models\Company;

use Illuminate\Support\MessageBag as MessageBag;

class CompanyValidator extends FooValidator
{

    protected $obj_company;

    public function __construct()
    {
        // add rules
        self::$rules = [
            'company_name' => ["required"],
            'company_overview' => ["required"],
            'company_description' => ["required"],
        ];

        // set configs
        self::$configs = $this->loadConfigs();

        // model
        $this->obj_company = new Company();

        // language
        $this->lang_front = 'company-front';
        $this->lang_admin = 'company-admin';

        // event listening
        Event::listen('validating', function($input)
        {
            self::$messages = [
                'company_name.required'          => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.name')]),
                'company_overview.required'      => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.overview')]),
                'company_description.required'   => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.description')]),
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
            'overview' => [
                'key' => 'company_overview',
                'label' => trans($this->lang_admin.'.fields.overview'),
                'min' => $_ln['company_overview']['min'],
                'max' => $_ln['company_overview']['max'],
            ],
            'description' => [
                'key' => 'company_description',
                'label' => trans($this->lang_admin.'.fields.description'),
                'min' => $_ln['company_description']['min'],
                'max' => $_ln['company_description']['max'],
            ],
        ];

        $flag = $this->isValidLength($input['company_name'], $params['name']) ? $flag : FALSE;
        $flag = $this->isValidLength($input['company_overview'], $params['overview']) ? $flag : FALSE;
        $flag = $this->isValidLength($input['company_description'], $params['description']) ? $flag : FALSE;

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

}