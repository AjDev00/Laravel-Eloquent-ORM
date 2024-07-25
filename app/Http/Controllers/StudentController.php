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


    //update data.
    public function update(){
        $student = Student::find(4); //getting a single data based on the id using the find method.
        $student->age = "30";

        $student->update();
    }

    
    //delete data.
    public function delete(){
        $student = Student::find(6);
        
        $student->delete();
    }


    //mass assignments.
    public function mass(){
        $student = Student::find(3);
        $student->update([
            'age' => '24'
        ]);
    }


    //firstOrCreate(first check if it exists in the database, if it does, nothing happens. if it doesnt, it creates).
    public function index(){

        //No operation will be performed because these details already exists in the database.
        // Student::firstOrCreate([
        //     'name' => 'Robin',
        //     'email' => 'robin@gmail.com',
        //     'age' => '24',
        //     'country' => 'USA'
        // ]);

        //These details will be created in the database because these information do not exists there.
        // Student::firstOrCreate([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@gmail.com',
        //     'age' => '24',
        //     'country' => 'USA'
        // ]);

        //firstOrNew(check if it exists, if it does, then change the old values to the new values but if it doesnt, create the new values).
        $std = Student::firstOrNew(['name' => 'Tobi']);
        $std->email = "tobi@gmail.com";
        $std->age = "32";
        $std->country = "Nigeria";
        $std->save();
    }

    //findOrFail is simple. it either displays the data if it exists or display a 404 error page if it does not.
    public function findOrFail(){

        //This will return a 404 error page cause the id 100 does not exist in the DB.
        $student = Student::findOrFail(100);
        dd($student);
    }

    //one to one relationship. joining two tables together and accessing what is in the other joined table.
    public function oneToOne(){
        $single_student = Student::with('profile')->find(3);

        echo $single_student->name ."<br>";
        echo $single_student->email ."<br>";
        echo $single_student->profile->country;
    }
}
