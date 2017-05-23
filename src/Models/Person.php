<?php

namespace Scool\EnrollmentMobile\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Person extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'username',
        'email', 'tsi',
        'birth_date',
        'name',
        'dni',
        'location',
        'sex',
        'telephone',
        'mobile_phone',
        'first_surname',
        'second_surname',
        'personal_email',
        'postal_code',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne('Manelgavalda\EnrollmentMobileTest\User::class');
    }
}
