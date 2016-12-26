<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Illuminate\Http\Request;

use Scool\EnrollmentMobile\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\FamilyCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\FamilyUpdateRequest;
use Scool\EnrollmentMobile\Repositories\FamilyRepository;
use Scool\EnrollmentMobile\Validators\FamilyValidator;

class FamiliesController extends Controller
{

    /**
     * @var FamilyRepository
     */
    protected $repository;

    /**
     * @var FamilyValidator
     */
    protected $validator;

    public function __construct(FamilyRepository $repository, FamilyValidator $validator)
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
        $families = $this->repository->all();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $families,
            ]);
        }

        return view('families.index', compact('families'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FamilyCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FamilyCreateRequest $request)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $family = $this->repository->create($request->all());

            $response = [
                'message' => 'Family created.',
                'data'    => $family->toArray(),
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
        $family = $this->repository->find($id);

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $family,
            ]);
        }

        return view('families.show', compact('family'));
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
        $family = $this->repository->find($id);

        return view('families.edit', compact('family'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  FamilyUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(FamilyUpdateRequest $request, $id)
    {
        try {
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $family = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Family updated.',
                'data'    => $family->toArray(),
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
                'message' => 'Family deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Family deleted.');
    }
}
