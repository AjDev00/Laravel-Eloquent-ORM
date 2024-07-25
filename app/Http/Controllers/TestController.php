<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Mail;

class TestController extends Controller
{
    public function index(){

        $subject = "Test Mail";
        $body = "This is just a simple mail test";

        Mail::to('user@gmail.com')->send(new TestMail($subject, $body));
        echo "Sent!";
    }
}
