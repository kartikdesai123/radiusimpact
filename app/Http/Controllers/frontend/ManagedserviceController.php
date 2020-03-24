<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagedserviceController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = 'Radius Impact - Managed Sevices';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('managedservice.js');
        $data['funinit'] = array('Managedservice.init()');
        return view('frontend.pages.managedservice.managedservice', $data);
    }

}
