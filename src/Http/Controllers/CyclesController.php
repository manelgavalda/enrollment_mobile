<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Illuminate\Http\Request;

use Scool\EnrollmentMobile\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\CycleCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\CycleUpdateRequest;
use Scool\EnrollmentMobile\Repositories\CycleRepository;
use Scool\EnrollmentMobile\Validators\CycleValidator;


class CyclesController extends Controller
{

    /**
     * @var CycleRepository
     */
    protected $repository;

    /**
     * @var CycleValidator
     */
    protected $validator;

    public function __construct(CycleRepository $repository, CycleValidator $validator)
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
        $cycles = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cycles,
            ]);
        }

        return view('cycles.index', compact('cycles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CycleCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CycleCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $cycle = $this->repository->create($request->all());

            $response = [
                'message' => 'Cycle created.',
                'data'    => $cycle->toArray(),
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
        $cycle = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $cycle,
            ]);
        }

        return view('cycles.show', compact('cycle'));
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

        $cycle = $this->repository->find($id);

        return view('cycles.edit', compact('cycle'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CycleUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(CycleUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $cycle = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Cycle updated.',
                'data'    => $cycle->toArray(),
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
                'message' => 'Cycle deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Cycle deleted.');
    }
}
