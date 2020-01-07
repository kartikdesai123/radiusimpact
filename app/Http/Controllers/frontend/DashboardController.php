<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SendSMS;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller {

    function __construct() {
        
    }

    public function dashboard(Request $request) {

        if ($request->isMethod('post')) {

            $objSendSms = new SendSMS();
            $sendSMS = $objSendSms->sendMailltesting($request);
            $return['status'] = 'success';
            $return['message'] = 'Thanks for contact us. We will get you soon...';
            $return['redirect'] = route('dashboard');
            return json_encode($return);
            exit;
        }
        $data['title'] = 'Radius Impact - Dashboard';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('dashboard.js');
        $data['funinit'] = array('Dashboard.init()');
        return view('frontend.pages.dashboard.dashboard', $data);
    }

    public function testingmail(Request $request) {

        $objSendSms = new SendSMS();
        $sendSMS = $objSendSms->sendMailltesting($request);
    }

    public function createPassword() {

        print_r(Hash::make('123'));
    }

}
