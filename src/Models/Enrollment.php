<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;

use Acacha\Stateful\Traits\StatefulTrait;
use Manelgavalda\EnrollmentMobileTest\User;
use Scool\EnrollmentMobile\Events\EnrollmentCreated;
use Scool\EnrollmentMobile\Traits\RecordsActivity;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

//use Scool\Foundation\User;

/**
 * Class Enrollment
 * @package App\Entities
 */
class Enrollment extends Model implements Transformable
{
    //afegim model stateful per als models que volem qeu tinguin estat, com en el name per als noms. Afegir columna state ala migracio de l'objecte(i ens dira com esta l'objecte de la taula(open,closed,etc), es configurable. state amb nullabel si pot ser que no es guarde
    use TransformableTrait,Nameable, RecordsActivity;//StatefulTrait;

    //public $timestamps = false;
    //all camps
    protected $fillable = ['id','name','validated','finished', 'user_id', 'study_id','course_id','classroom_id'];
    //TODO: mirar estats (enrollment). Implementar i definir estats(exemple porta(esborrany,valida,feta).
    //TODO: Necessari vàlid i no.
    //TODO: Afegir rutes minim a un Model.

    protected $events = [
        'created' => EnrollmentCreated::class
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(Scool\Foundation\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom()
    {
        return $this->hasOne("Scool\EnrollmentMobile\Models\Classroom");
    }

    public function course()
    {
        return $this->hasOne("Scool\EnrollmentMobile\Models\Course");
    }

    public function study()
    {
        return $this->hasOne("Scool\EnrollmentMobile\Models\Study");
    }


//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasOne
//     */
//    public function enrollment()
//    {
//        return $this->hasOne("Scool\EnrollmentMobile\Classroom");
//    }
}
