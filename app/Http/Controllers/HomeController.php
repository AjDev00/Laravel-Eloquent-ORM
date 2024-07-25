<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $employee_details = Department::with('employee')->find(2);

        echo "Department: " . $employee_details->department_name. "<br><br>";
        foreach($employee_details->employee as $item){

            echo "Employee Name: " . $item->name . "<br>";
            echo $item-> name . "'s Phone Number: " . $item->phone . "<br><br><br>";
        }
    }
}
