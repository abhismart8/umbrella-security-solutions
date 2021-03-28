<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB, Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class ContactUsController extends Controller
{

    public function contactUsFormMailSend(Request $request)
    {
        $data = new \stdClass;
        $data->from = $request["email"] ?? env("MAIL_FROM_ADDRESS");
        $data->subject = $request["subject"];
        $data->content = "Hi Team!!<br><br>Here is the detail of the customer:<br>Name: ".$request['name']."<br>Email: ".
        $request['email']."<br>Message: ".$request["message"];

        // sending mail to umbrella support team
        \Mail::send([], [], function($message) use ($data) {
            $message->from(env("MAIL_FROM_ADDRESS"), config("constants.brand.company_full_name"));
            $message->to(env("MAIL_FROM_ADDRESS"));
            $message->cc(["shuklaji88as@gmail.com", "amitbhati842@gmail.com"]);
            $message->subject($data->subject);
            $message->setBody($data->content, 'text/html');
        });

        return 'OK';
    }
}
