<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModal extends Model
{
    protected $table = 'teachers' ;
    protected $primaryKey = 'id' ;
    protected  $fillable = ['teachername','teacherage','courseName','teacheremail'] ;
    use HasFactory;
}