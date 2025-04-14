<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class FacultyMember extends Authenticatable//extends Model implements JWTSubject
{
    use HasFactory, Notifiable;
    use HasRoles;

    protected $fillable = [
        'password',
        'f_name',
        'l_name',
        'phone',
        'department',
        'IBAN',
        'bachelors',
        'masters',
        'phd',
        'Academic_quali',
        'email',
        'rank',
        'User_Type',
        'Feedback_quality',
        'accuracy',
        'response_speed',

        'uni_id',
        'agent_name',

    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    use Notifiable;

    public function promotionRequests()
    {
        return $this->hasMany(PromotionRequests::class);
    }

    // Rest omitted for brevity
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    // public function getJWTIdentifier()
    // {
    //     return $this->getKey();
    // }
    // /**
    //  * Return a key value array, containing any custom claims to be added to the JWT.
    //  *
    //  * @return array
    //  */
    // public function getJWTCustomClaims()
    // {
    //     return [];
    // }
}
