<?php

namespace Foostart\Sample\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Sample\Models\Samples;

class CompanyUserController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    /**
     * Home page
     * @param Request $request
     * @return type
     */
    public function index(Request $request)
    {
        var_dump('home');
        die();

        $obj_sample = new Samples();
        $samples = $obj_sample->get_samples();
        $this->data = array(
            'request' => $request,
            'samples' => $samples
        );
        return view('sample::sample.index', $this->data);
    }
    
    /**
     * News 
     * List page
     */
    public function listNews() {
        var_dump('listNews');
        die();
    }
    
    /**
     * News
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailNews($name, $id) {
        var_dump("listDetail");
        die();
    }
    
    /**
     * Personnel
     * List page
     */
    public function listPersonnel() {
        var_dump("Personnel page");
        die();
    }
    
    /**
     * Personnel
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailPersonnel($name, $id) {
        var_dump("detailPersonnel");
        die();
    }
    
    /**
     * Student
     * List page
     */
    public function listStudent() {
        var_dump("List student");
        die();
    }
    
    
    /**
     * Student
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailStudent($name, $id) {
        var_dump("Detail student");
        die();
    }
    
    /**
     * Thematic
     * List page
     */
    public function listThematic(){
        var_dump("List thematic");
        die();
    }
    
    /**
     * Thematic
     * Detail page
     * @param type $name
     * @param type $id
     */
    public function detailThematic($name, $id) {
        var_dump("Detail thematic");
        die();
    }

}