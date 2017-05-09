<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

//use App\Activity;
//use App\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Scool\EnrollmentMobile\Models\Activity;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];

        $data['labels1'] = "['January', 'February', 'March', 'April', 'May', 'June', 'July']";
        $data['values1'] = "[10, 42, 4, 23, 43, 54]";

        $data['labels2'] = "['January', 'February', 'March', 'April', 'May', 'June', 'July']";
        $data['values2'] = "[10, 42, 4, 23, 43, 54]";
        return view('enrollment_mobile::dashboard.dashboard',$data);
    }

    /**
     * @param $model
     * @return mixed
     */
    public function tasks($model)
    {
        return $model::all();
    }

    /**
     * @param $model
     * @return mixed
     */
    public function number($model)
    {
        $value = Cache::remember('tasksNumber',5, function () use ($model){
            //Codi a executar si cache MISS
//            return DB::table()->get();
// $this?
            $model='\\Scool\EnrollmentMobile\Models\\'.ucfirst($model);
            return $model::all()->count();
        });

        return $value;

    }

    /**
     * @param $model
     */
    public function createRandom($model)
    {
//        $model='\\Scool\EnrollmentMobile\Models\\'.ucfirst($model);
        $model='Scool\\EnrollmentMobile\\Models\\'.ucfirst($model);
        factory($model)->create();
    }

    /**
     * @param $id
     * @return array
     */
    public function graph($id)
    {
        $data = [];
        $data['labels'] = ['Pepe', 'Maria', 'Pedo', 'April', 'May', 'Abdul', 'Mare'];
        $data['values'] = [10, 42, 4, 23, 43, 54];

        return $data;
    }

    /**
     * @return mixed
     */
    public function fetchActivityFeed()
    {
        return Activity::all();
    }
}
