<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Research;

class PromotionRequest extends Model
{
    public function researches()
    {
        return $this->hasMany(Research::class, 'promotion_request_id');
    }
}
