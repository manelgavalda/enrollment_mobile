<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Illuminate\Http\Request;

use Scool\EnrollmentMobile\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\EnrollmentStudySubmoduleCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\EnrollmentStudySubmoduleUpdateRequest;
use Scool\EnrollmentMobile\Repositories\EnrollmentStudySubmoduleRepository;
use Scool\EnrollmentMobile\Validators\EnrollmentStudySubmoduleValidator;

class EnrollmentStudySubmodulesController extends Controller
{

    /**
     * @var EnrollmentStudySubmoduleRepository
     */
    protected $repository;

    /**
     * @var EnrollmentStudySubmoduleValidator
     */
    protected $validator;

    public function __construct(EnrollmentStudySubmoduleRepository $repository, EnrollmentStudySubmoduleValidator $validator)
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
        $enrollmentStudySubmodules = $this->repository->all();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $enrollmentStudySubmodules,
            ]);
        }

        return view('enrollment_mobile::enrollmentStudySubmodules.index', compact('enrollmentStudySubmodules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EnrollmentStudySubmoduleCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(EnrollmentStudySubmoduleCreateRequest $request)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $enrollmentStudySubmodule = $this->repository->create($request->all());

            $response = [
                'message' => 'EnrollmentStudySubmodule created.',
                'data'    => $enrollmentStudySubmodule->toArray(),
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
        $enrollmentStudySubmodule = $this->repository->find($id);

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $enrollmentStudySubmodule,
            ]);
        }

        return view('enrollmentStudySubmodules.show', compact('enrollmentStudySubmodule'));
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
        $enrollmentStudySubmodule = $this->repository->find($id);

        return view('enrollmentStudySubmodules.edit', compact('enrollmentStudySubmodule'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  EnrollmentStudySubmoduleUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(EnrollmentStudySubmoduleUpdateRequest $request, $id)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $enrollmentStudySubmodule = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'EnrollmentStudySubmodule updated.',
                'data'    => $enrollmentStudySubmodule->toArray(),
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
                'message' => 'EnrollmentStudySubmodule deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EnrollmentStudySubmodule deleted.');
    }
}
