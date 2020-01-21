<?php

namespace App\Repositories;

use App\Models\Classes;
use App\Repositories\BaseRepository;

/**
 * Class ClassesRepository
 * @package App\Repositories
 * @version January 21, 2020, 6:18 am UTC
*/

class ClassesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_name',
        'class_code'
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
        return Classes::class;
    }
}
