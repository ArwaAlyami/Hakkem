<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;

class FacultyMember extends Model implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'pass',
        'f_name',
        'l_name',
        'phone',
        'IBAN',
        'bachelors',
        'masters',
        'phd',
        'Academic_quali',
        'email',
        'rank',
        'uni_id',
        'agent_name',

    ];

    use Notifiable;

    // Rest omitted for brevity
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
