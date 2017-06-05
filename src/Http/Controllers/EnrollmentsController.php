<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\EnrollmentBrowseRequest;
use Scool\EnrollmentMobile\Http\Requests\EnrollmentCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\EnrollmentDeleteRequest;
use Scool\EnrollmentMobile\Http\Requests\EnrollmentUpdateRequest;
use Scool\EnrollmentMobile\Repositories\EnrollmentRepository;
use Scool\EnrollmentMobile\Validators\EnrollmentValidator;

/**
 * Class EnrollmentsController
 * @package App\Http\Controllers
 */
class EnrollmentsController extends Controller
{

    /**
     * @var EnrollmentRepository
     */
    protected $repository;

    /**
     * @var EnrollmentValidator
     */
    protected $validator;

    /**
     * EnrollmentsController constructor.
     * @param EnrollmentRepository $repository
     * @param EnrollmentValidator $validator
     */
    public function __construct(EnrollmentRepository $repository, EnrollmentValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EnrollmentBrowseRequest $request)
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $enrollments = $this->repository->with(['classroom', 'course', 'study'])->all();
        if (request()->wantsJson()) {
            return response()->json([
                'data' => $enrollments,
            ]);
        }

        return view('enrollment_mobile::enrollments.index', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EnrollmentCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(EnrollmentCreateRequest $request)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $enrollment = $this->repository->create($request->all());

            $response = [
                'message' => 'Enrollment created.',
                'data'    => $enrollment->toArray(),
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
        //return Auth::user()->can('view enrollment');
        $enrollment = $this->repository->find($id);

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $enrollment,
            ]);
        }

        return view('enrollment_mobile::enrollments.show', compact('enrollment'));
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
        $enrollment = $this->repository->find($id);

        return view('enrollment_mobile::enrollments.edit', compact('enrollment'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  EnrollmentUpdateRequest $request
     * @param  $id string
     *
     * @return Response
     */
    public function update(EnrollmentUpdateRequest $request, $id)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $enrollment = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Enrollment updated.',
                'data'    => $enrollment->toArray(),
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
    public function destroy(EnrollmentDeleteRequest $request, $id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {
            return response()->json([
                'message' => 'Enrollment deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Enrollment deleted.');
    }
}
//TODO: Fer testos de validació enrollment_mobile i todos_Backend. mock del repository del create(crear nosalters lenrollment per fer el test).
