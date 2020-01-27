<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Repositories\LevelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\models\Course;
use App\models\Level;
use DB;

class LevelController extends AppBaseController
{
    /** @var  LevelRepository */
    private $levelRepository;

    public function __construct(LevelRepository $levelRepo)
    {
        $this->levelRepository = $levelRepo;
    }

    /**
     * Display a listing of the Level.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $course = Course::all();
       

        $levels = $this->levelRepository->all();

        $levelss = DB::table('levels')->select(
            'courses.*',
            'levels.*')
            ->join('courses', 'courses.course_id', '=', 'levels.course_id')
            ->get();

       

        return view('levels.index', compact('levelss','course'))
            ->with('levels', $levels);
    }

    /**
     * Show the form for creating a new Level.
     *
     * @return Response
     */
    public function create()
    {
        return view('levels.create');
    }

    /**
     * Store a newly created Level in storage.
     *
     * @param CreateLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateLevelRequest $request)
    {
        $input = $request->all();

        $level = $this->levelRepository->create($input);

        Flash::success('Level saved successfully.');

        return redirect(route('levels.index'));
    }

    /**
     * Display the specified Level.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $level = $this->levelRepository->find($id);

        if (empty($level)) {
            Flash::error('Level not found');

            return redirect(route('levels.index'));
        }

        return view('levels.show')->with('level', $level);
    }

    /**
     * Show the form for editing the specified Level.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {
        if($request->ajax()){
            return Response(Level::find($request->$id));
        }
    }

    /**
     * Update the specified Level in storage.
     *
     * @param int $id
     * @param UpdateLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLevelRequest $request)
    {
        $level = $this->levelRepository->find($id);

        if (empty($level)) {
            Flash::error('Level not found');

            return redirect(route('levels.index'));
        }

        $level = $this->levelRepository->update($request->all(), $id);

        Flash::success('Level updated successfully.');

        return redirect(route('levels.index'));
    }

    /**
     * Remove the specified Level from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $level = $this->levelRepository->find($id);

        if (empty($level)) {
            Flash::error('Level not found');

            return redirect(route('levels.index'));
        }

        $this->levelRepository->delete($id);

        Flash::success('Level deleted successfully.');

        return redirect(route('levels.index'));
    }
}
