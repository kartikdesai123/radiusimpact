<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CloudbackupController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = 'Radius Impact - Cloud Backup';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('cloudbackup.js');
        $data['funinit'] = array('Cloudbackup.init()');
        return view('frontend.pages.cloudbackup.cloudbackup', $data);
    }

}
