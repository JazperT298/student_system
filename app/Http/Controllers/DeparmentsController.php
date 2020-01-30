<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeparmentsRequest;
use App\Http\Requests\UpdateDeparmentsRequest;
use App\Repositories\DeparmentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Faculty;
use App\Models\Department;
use DB;

class DeparmentsController extends AppBaseController
{
    /** @var  DeparmentsRepository */
    private $deparmentsRepository;

    public function __construct(DeparmentsRepository $deparmentsRepo)
    {
        $this->deparmentsRepository = $deparmentsRepo;
    }

    /**
     * Display a listing of the Deparments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faculties = Faculty::all();

        $deparments = $this->deparmentsRepository->all();

        
        $deparmentss = DB::table('departments')->select(
            'faculties.*',
            'departments.*')
            ->join('faculties', 'faculties.faculty_id', '=', 'departments.faculty_id')
            ->get();

        return view('deparments.index',compact('deparmentss','faculties'))
            ->with('deparments', $deparments);


    }

    /**
     * Show the form for creating a new Deparments.
     *
     * @return Response
     */
    public function create()
    {
        return view('deparments.create');
    }

    /**
     * Store a newly created Deparments in storage.
     *
     * @param CreateDeparmentsRequest $request
     *
     * @return Response
     */
    public function store(CreateDeparmentsRequest $request)
    {
        $input = $request->all();

        $deparments = $this->deparmentsRepository->create($input);

        Flash::success('Deparments saved successfully.');

        return redirect(route('deparments.index'));
    }

    /**
     * Display the specified Deparments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deparments = $this->deparmentsRepository->find($id);

        if (empty($deparments)) {
            Flash::error('Deparments not found');

            return redirect(route('deparments.index'));
        }

        return view('deparments.show')->with('deparments', $deparments);
    }

    /**
     * Show the form for editing the specified Deparments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deparments = $this->deparmentsRepository->find($id);

        if (empty($deparments)) {
            Flash::error('Deparments not found');

            return redirect(route('deparments.index'));
        }

        return view('deparments.edit')->with('deparments', $deparments);
    }

    /**
     * Update the specified Deparments in storage.
     *
     * @param int $id
     * @param UpdateDeparmentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeparmentsRequest $request)
    {
        $deparments = $this->deparmentsRepository->find($id);

        if (empty($deparments)) {
            Flash::error('Deparments not found');

            return redirect(route('deparments.index'));
        }

        $deparments = $this->deparmentsRepository->update($request->all(), $id);

        Flash::success('Deparments updated successfully.');

        return redirect(route('deparments.index'));
    }

    /**
     * Remove the specified Deparments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deparments = $this->deparmentsRepository->find($id);

        if (empty($deparments)) {
            Flash::error('Deparments not found');

            return redirect(route('deparments.index'));
        }

        $this->deparmentsRepository->delete($id);

        Flash::success('Deparments deleted successfully.');

        return redirect(route('deparments.index'));
    }
}
