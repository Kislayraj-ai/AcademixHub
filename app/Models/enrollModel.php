<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollModel extends Model
{
    protected $table = "enrolls" ;
    protected  $primaryKey = "id" ;
    protected $fillable = ['student','course' ,'payment'] ;
    use HasFactory;
}