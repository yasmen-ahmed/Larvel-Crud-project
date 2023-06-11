<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    // protected $fileable =['name','age']; // it's all thing i allow to assign

    //protected $guarded =['']; // thing block to assign this things
    
}