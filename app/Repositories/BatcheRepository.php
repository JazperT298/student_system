<?php

namespace App\Repositories;

use App\Models\Batche;
use App\Repositories\BaseRepository;

/**
 * Class BatcheRepository
 * @package App\Repositories
 * @version January 21, 2020, 6:29 am UTC
*/

class BatcheRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
    ];

    protected $primaryKey = 'batch_id';

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
        return Batche::class;
    }
}
