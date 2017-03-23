<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Illuminate\Http\Request;

use Scool\EnrollmentMobile\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\SubmoduleTypeCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\SubmoduleTypeUpdateRequest;
use Scool\EnrollmentMobile\Repositories\SubmoduleTypeRepository;
use Scool\EnrollmentMobile\Validators\SubmoduleTypeValidator;

class SubmoduleTypesController extends Controller
{

    /**
     * @var SubmoduleTypeRepository
     */
    protected $repository;

    /**
     * @var SubmoduleTypeValidator
     */
    protected $validator;

    public function __construct(SubmoduleTypeRepository $repository, SubmoduleTypeValidator $validator)
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
        $submoduleTypes = $this->repository->all();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $submoduleTypes,
            ]);
        }

        return view('enrollment_mobile::submoduleTypes.index', compact('submoduleTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubmoduleTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SubmoduleTypeCreateRequest $request)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $submoduleType = $this->repository->create($request->all());

            $response = [
                'message' => 'SubmoduleType created.',
                'data'    => $submoduleType->toArray(),
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
        $submoduleType = $this->repository->find($id);

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $submoduleType,
            ]);
        }

        return view('submoduleTypes.show', compact('submoduleType'));
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
        $submoduleType = $this->repository->find($id);

        return view('submoduleTypes.edit', compact('submoduleType'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  SubmoduleTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(SubmoduleTypeUpdateRequest $request, $id)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $submoduleType = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'SubmoduleType updated.',
                'data'    => $submoduleType->toArray(),
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
                'message' => 'SubmoduleType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'SubmoduleType deleted.');
    }
}
