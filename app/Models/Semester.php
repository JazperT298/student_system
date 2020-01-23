<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Semester
 * @package App\Models
 * @version January 23, 2020, 2:31 am UTC
 *
 * @property string semester_name
 * @property string semester_duration
 * @property string semester_code
 * @property string semester_description
 */
class Semester extends Model
{
    use SoftDeletes;

    public $table = 'semesters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'semester_name',
        'semester_duration',
        'semester_code',
        'semester_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'semester_id' => 'integer',
        'semester_name' => 'string',
        'semester_duration' => 'string',
        'semester_code' => 'string',
        'semester_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'semester_name' => 'required',
        'semester_duration' => 'required',
        'semester_code' => 'required',
        'semester_description' => 'required'
    ];

    
}
