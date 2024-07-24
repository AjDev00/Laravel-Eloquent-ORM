<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){

        //object instance of the model.
        $student = new Student();
        $student->name = "Robin";
        $student->email = "robin@gmail.com";
        $student->age = "24";
        $student->country = "USA";

        $student->save();
    }
}
