<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //create data.
    public function create(){
        $student = new Student(); //object instance of the model.
        $student->name = "Robin";
        $student->email = "robin@gmail.com";
        $student->age = "24";
        $student->country = "USA";

        $student->save();
    }

    //show data.
    public function show(){
        // $students = Student::get(); //get all students.
        // $students = Student::where('country', 'Finland')->get(); //get only students from Finland.
        $students = Student::where('country', 'Finland')->orderBy('name', 'asc')->get(); //get only students from Finland and display them in ascending order by name.

        foreach($students as $student){
            echo "ID: " . $student->id . "<br>";
            echo "Name: " . $student->name . "<br>";
            echo "Email: " . $student->email . "<br>";
            echo "Age: " . $student->age . "<br>";
            echo "Country: " . $student->country . "<br><br><br>";
        }
    }
}
