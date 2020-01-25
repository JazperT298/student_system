<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Repositories\ClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\models\Batche;
use App\models\Classes;
use App\models\Classrooms;
use App\models\Course;
use App\models\Day;
use App\models\Level;
use App\models\Semester;
use App\models\Shift;
use App\models\Time;
use DB;

class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batch = Batche::all();
        $classes = Classes::all();
        $classrooms = Classrooms::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $semester = Semester::all();
        $shift = Shift::all();
        $time = Time::all();

        //dd($classes);
        

        $classSchedulings = $this->classSchedulingRepository->all();

        $classscheduling = DB::table('class_schedulings')->select(
            'batches.*',
            'classes.*',
            'classrooms.*',
            'courses.*',
            'days.*',
            'levels.*',
            'semesters.*',
            'shifts.*',
            'times.*',
            'class_schedulings.*')
            ->join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
            ->join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
            ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')
            ->join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
            ->join('days', 'days.day_id', '=', 'class_schedulings.day_id')
            ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
            ->join('semesters', 'semesters.semester_id', '=', 'class_schedulings.semester_id')
            ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
            ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
            ->get();
            //  dd($classScheduling); die;

        return view('class_schedulings.index' , compact('classscheduling','batch', 'classes', 'classrooms', 'course', 'day', 'level','semester', 'shift', 'time'))
            ->with('classSchedulings', $classSchedulings);

    }

    public function DynamicLevel(Request $request){
        $course_id =$request->get('course_id');

        $levels = Level::where('course_id', '=', $course_id)->get();

        return Response::json($levels);
    }

    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.edit')->with('classScheduling', $classScheduling);
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassSchedulingRequest $request)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

        Flash::success('Class Scheduling updated successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
