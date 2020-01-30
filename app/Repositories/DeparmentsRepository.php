<?php

namespace App\Repositories;

use App\Models\Deparments;
use App\Repositories\BaseRepository;

/**
 * Class DeparmentsRepository
 * @package App\Repositories
 * @version January 29, 2020, 7:50 am UTC
*/

class DeparmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_id',
        'department_name',
        'department_code',
        'department_description',
        'department_status'
    ];
    protected $primaryKey = 'department_id';

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
        return Deparments::class;
    }
}
