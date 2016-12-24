<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Illuminate\Http\Request;

use Scool\EnrollmentMobile\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\ClassroomCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\ClassroomUpdateRequest;
use Scool\EnrollmentMobile\Repositories\ClassroomRepository;
use Scool\EnrollmentMobile\Validators\ClassroomValidator;


class ClassroomsController extends Controller
{

    /**
     * @var ClassroomRepository
     */
    protected $repository;

    /**
     * @var ClassroomValidator
     */
    protected $validator;

    public function __construct(ClassroomRepository $repository, ClassroomValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $classrooms = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $classrooms,
            ]);
        }

        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ClassroomCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $classroom = $this->repository->create($request->all());

            $response = [
                'message' => 'Classroom created.',
                'data'    => $classroom->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $classroom,
            ]);
        }

        return view('classrooms.show', compact('classroom'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $classroom = $this->repository->find($id);

        return view('classrooms.edit', compact('classroom'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ClassroomUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ClassroomUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $classroom = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Classroom updated.',
                'data'    => $classroom->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Classroom deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Classroom deleted.');
    }
}
