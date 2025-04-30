<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Research;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class PromotionRequest extends Model  implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'research_id',
        'state',
        'deadline',
        'start_date',
        'end_date',
        'price',
        'fm_id',
        'status_rev'
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
