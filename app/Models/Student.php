<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    //One to One Relationship.
    public function profile(){

        return $this->hasOne(StudentProfile::class);
    }
}
