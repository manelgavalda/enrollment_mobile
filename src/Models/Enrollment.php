<?php

namespace Scool\EnrollmentMobile\Models;

use Acacha\Names\Traits\Nameable;
<<<<<<< HEAD
=======
use Acacha\Stateful\Traits\StatefulTrait;
>>>>>>> 92a55437464d45d8f28bae26a5a84fc695a03898
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Enrollment
 * @package App\Entities
 */
class Enrollment extends Model implements Transformable
{
<<<<<<< HEAD
    use TransformableTrait, Nameable;
    //

    protected $fillable = ['name'];
=======
    //afegim model stateful per als models que volem qeu tinguin estat, com en el name per als noms. Afegir columna state ala migracio de l'objecte(i ens dira com esta l'objecte de la taula(open,closed,etc), es configurable. state amb nullabel si pot ser que no es guarde
    use TransformableTrait,Nameable;//StatefulTrait;

    //public $timestamps = false;
    //all camps
    protected $fillable = ['id','name','validated','finished','study_id','course_id','classroom_id','updated_at','created_at'];
    //TODO: mirar estats (enrollment). Implementar i definir estats(exemple porta(esborrany,valida,feta).
>>>>>>> 92a55437464d45d8f28bae26a5a84fc695a03898
}
