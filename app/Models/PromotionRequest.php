<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Research;

class PromotionRequest extends Model
{
    protected $fillable = [
        'research_id',
        'state',
        'deadline',
        'start_date',
        'end_date',
        'price',
        'fm_id',
    ];
    public function research()
    {
        return $this->belongsTo(Research::class);
    }
    public function facultyMember()
    {
        return $this->belongsTo(FacultyMember::class,'fm_id');
    }
}
