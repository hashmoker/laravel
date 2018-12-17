<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{

    /**
     * @param Request $request
     */
    public function send_form(Request $request)
    {


        $name= $request->name;
        $email= $request->email;
        $msg= $request->msg;

        Mail::to('MailSetting@send_form')->send(new MailClass($name, $email, $msg));
    }

}
