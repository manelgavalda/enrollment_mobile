<?php

namespace Scool\EnrollmentMobile\Http\Controllers;

use Illuminate\Http\Request;

use Scool\EnrollmentMobile\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\EnrollmentMobile\Http\Requests\SubmoduleCreateRequest;
use Scool\EnrollmentMobile\Http\Requests\SubmoduleUpdateRequest;
use Scool\EnrollmentMobile\Repositories\SubmoduleRepository;
use Scool\EnrollmentMobile\Validators\SubmoduleValidator;


class SubmodulesController extends Controller
{

    /**
     * @var SubmoduleRepository
     */
    protected $repository;

    /**
     * @var SubmoduleValidator
     */
    protected $validator;

    public function __construct(SubmoduleRepository $repository, SubmoduleValidator $validator)
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
        $submodules = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $submodules,
            ]);
        }

        return view('submodules.index', compact('submodules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubmoduleCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SubmoduleCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $submodule = $this->repository->create($request->all());

            $response = [
                'message' => 'Submodule created.',
                'data'    => $submodule->toArray(),
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
        $submodule = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $submodule,
            ]);
        }

        return view('submodules.show', compact('submodule'));
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

        $submodule = $this->repository->find($id);

        return view('submodules.edit', compact('submodule'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  SubmoduleUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(SubmoduleUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $submodule = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Submodule updated.',
                'data'    => $submodule->toArray(),
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
                'message' => 'Submodule deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Submodule deleted.');
    }
}
