<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebdevelopmentController extends Controller
{
    function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = 'Radius Impact - Web Development';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('webdevelopment.js');
        $data['funinit'] = array('Webdevelopment.init()');
        return view('frontend.pages.webdevelopment.webdevelopment', $data);
    }
}
