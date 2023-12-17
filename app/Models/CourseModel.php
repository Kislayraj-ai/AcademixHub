<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $table = "courses" ;
    protected $primaryKey = "id" ;
    protected $fillable = ['coursename'];
    use HasFactory;
}