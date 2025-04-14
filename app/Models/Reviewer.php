<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Request.php
class Reviewer extends Model{
    protected $fillable = ['name', 'affiliation', 'email'];



    protected $table = 'FacultyMember';
}













