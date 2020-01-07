<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\SendSMS;

class ContactController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        if ($request->isMethod('post')) {

            $objSendSms = new SendSMS();
            $sendSMS = $objSendSms->sendMailltesting($request);
            $return['status'] = 'success';
            $return['message'] = 'Thanks for contact us. We will get you soon...';
            $return['redirect'] = route('contact');
            return json_encode($return);
            exit;
        }
        $data['title'] = 'Radius Impact - Contact';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('contact.js');
        $data['funinit'] = array('Contact.init()');
        return view('frontend.pages.contact.contact', $data);
    }

}
