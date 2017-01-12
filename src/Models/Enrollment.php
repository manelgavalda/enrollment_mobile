<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;

use Acacha\Stateful\Traits\StatefulTrait;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Enrollment
 * @package App\Entities
 */
class Enrollment extends Model implements Transformable
{
    //afegim model stateful per als models que volem qeu tinguin estat, com en el name per als noms. Afegir columna state ala migracio de l'objecte(i ens dira com esta l'objecte de la taula(open,closed,etc), es configurable. state amb nullabel si pot ser que no es guarde
    use TransformableTrait,Nameable;//StatefulTrait;

    //public $timestamps = false;
    //all camps
    protected $fillable = ['id','name','validated','finished','study_id','course_id','classroom_id'];
    //TODO: mirar estats (enrollment). Implementar i definir estats(exemple porta(esborrany,valida,feta).
    //TODO: Necessari vàlid i no.
}
