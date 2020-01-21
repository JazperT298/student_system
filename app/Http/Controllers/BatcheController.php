<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBatcheRequest;
use App\Http\Requests\UpdateBatcheRequest;
use App\Repositories\BatcheRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BatcheController extends AppBaseController
{
    /** @var  BatcheRepository */
    private $batcheRepository;

    public function __construct(BatcheRepository $batcheRepo)
    {
        $this->batcheRepository = $batcheRepo;
    }

    /**
     * Display a listing of the Batche.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batches = $this->batcheRepository->all();

        return view('batches.index')
            ->with('batches', $batches);
    }

    /**
     * Show the form for creating a new Batche.
     *
     * @return Response
     */
    public function create()
    {
        return view('batches.create');
    }

    /**
     * Store a newly created Batche in storage.
     *
     * @param CreateBatcheRequest $request
     *
     * @return Response
     */
    public function store(CreateBatcheRequest $request)
    {
        $input = $request->all();

        $batche = $this->batcheRepository->create($input);

        Flash::success('Batche saved successfully.');

        return redirect(route('batches.index'));
    }

    /**
     * Display the specified Batche.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $batche = $this->batcheRepository->find($id);

        if (empty($batche)) {
            Flash::error('Batche not found');

            return redirect(route('batches.index'));
        }

        return view('batches.show')->with('batche', $batche);
    }

    /**
     * Show the form for editing the specified Batche.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $batche = $this->batcheRepository->find($id);

        if (empty($batche)) {
            Flash::error('Batche not found');

            return redirect(route('batches.index'));
        }

        return view('batches.edit')->with('batche', $batche);
    }

    /**
     * Update the specified Batche in storage.
     *
     * @param int $id
     * @param UpdateBatcheRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBatcheRequest $request)
    {
        $batche = $this->batcheRepository->find($id);

        if (empty($batche)) {
            Flash::error('Batche not found');

            return redirect(route('batches.index'));
        }

        $batche = $this->batcheRepository->update($request->all(), $id);

        Flash::success('Batche updated successfully.');

        return redirect(route('batches.index'));
    }

    /**
     * Remove the specified Batche from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $batche = $this->batcheRepository->find($id);

        if (empty($batche)) {
            Flash::error('Batche not found');

            return redirect(route('batches.index'));
        }

        $this->batcheRepository->delete($id);

        Flash::success('Batche deleted successfully.');

        return redirect(route('batches.index'));
    }
}
