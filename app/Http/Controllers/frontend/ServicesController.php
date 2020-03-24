<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = 'Radius Impact - Service';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('services.js');
        $data['funinit'] = array('Services.init()');
        return view('frontend.pages.service.service', $data);
    }
}
