<?php


    // app/Models/ResearchRequest.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchRequest extends Model
{
    protected $fillable = [
        'research_number', 'title', 'field', 'pdf_path', 'keywords', 'abstract'
    ];
}







