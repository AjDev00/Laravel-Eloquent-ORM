<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Mail;

class TestController extends Controller
{
    public function index(){

        $subject = "Second Mail";
        $body = "This is the second mail test";

        Mail::to('user@gmail.com')->send(new TestMail($subject, $body));
        echo "Sent!";
    }
}
