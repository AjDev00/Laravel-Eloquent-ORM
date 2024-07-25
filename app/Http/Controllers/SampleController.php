<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    
    //Many to Many Relationships.
    public function index(){
        //get all data.
        $all_details = Author::with('book')->get();

        foreach($all_details as $single_details){
            echo $single_details->name . "<br>";

            foreach($single_details->book as $single_detail){
                echo $single_detail->title . "<br>";
            }

            echo "<br><br>";
        }


        //get a single data.
        // $data = Author::with('book')->where('id', 1)->first();
        // echo $data->name . "<br>";

        // foreach($data->book as $item){
        //     echo $item->title . "<br>";
        // }
    }
}
