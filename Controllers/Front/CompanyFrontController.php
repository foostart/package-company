<?php namespace Foostart\Company\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Company\Models\Company;

class CompanyFrontController extends Controller
{
    public $data = array();
    public function __construct() {
        $this->obj_item = new Company(array('perPage' => 5));
    }
    public function index(Request $request)
    {

        //params
        $params = [];
       //get companies
        $items = $this->obj_item->selectItems($params);
        $this->data = array(
            'request' => $request,
            'items' => $items
        );
        return view('package-company::front.company-items', $this->data);
    }

    public function show($slug){

        $item = $this->obj_item->where('company_slug', $slug)->first();
        $this->data = array(
            'slug' => $slug,
            'item' => $item
        );
        return view('package-company::front.company-item', $this->data);
    }

    public function search(Request $request){
        $keyword=  $request->key;
        $items = $this->obj_item->where('company_name', 'LIKE', '%' . $keyword . '%')->paginate(10);
        $this->data = array(
            'request' => $request,
            'items' => $items
        );
        return view('package-company::front.company-search', $this->data);
    }
}