<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
class MailSetting extends Controller
{

    /**
     * @param Request $request
     */
    public function send_form(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'email',
            'msg' => 'required|max:255',
        ]);
        $name= $request->name;
        $email= $request->email;
        $msg= $request->msg;

        Mail::to('MailSetting@send_form')->send(new MailClass($name, $email, $msg));
    }

}
