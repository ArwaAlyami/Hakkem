<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionRequests extends Model
{
    protected $fillablee = [
        'researches_no',
        'state',
        'deadline',
        'start_date',
        'end_date',
        'price',
        'fm_id',
    ];
    protected $fillable = ['faculty_member_id', 'status', 'result_submission_date'];

    public function facultyMember()
    {
        return $this->belongsTo(FacultyMember::class);
    }
}
