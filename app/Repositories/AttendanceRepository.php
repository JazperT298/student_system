<?php

namespace App\Repositories;

use App\Models\Attendance;
use App\Repositories\BaseRepository;

/**
 * Class AttendanceRepository
 * @package App\Repositories
 * @version January 21, 2020, 6:33 am UTC
*/

class AttendanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attendance::class;
    }
}
