<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Sendmail;

class SendSMS extends Model {

    public function sendMailltesting($request) {

        $mailData['data'] = $request;
        $mailData['subject'] = 'From Mototive Web Solution Contact Us';
        $mailData['attachment'] = array();
        $mailData['template'] = "email.test";
        $mailData['mailto'] = 'mahendrajavandhra@gmail.com';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);
    }

}
