<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnicalsuppoertController extends Controller
{
    function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = 'Radius Impact - Technical Support';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('technicalsupport.js');
        $data['funinit'] = array('Technicalsupport.init()');
        return view('frontend.pages.technicalsupport.technicalsupport', $data);
    }
}
