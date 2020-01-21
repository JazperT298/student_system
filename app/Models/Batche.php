<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Batche
 * @package App\Models
 * @version January 21, 2020, 6:29 am UTC
 *
 * @property string batch
 */
class Batche extends Model
{
    use SoftDeletes;

    public $table = 'batches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'batch'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'batch_id' => 'integer',
        'batch' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'batch' => 'required'
    ];

    
}
