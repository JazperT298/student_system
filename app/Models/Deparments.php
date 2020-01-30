<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Deparments
 * @package App\Models
 * @version January 29, 2020, 7:50 am UTC
 *
 * @property integer faculty_id
 * @property string department_name
 * @property string department_code
 * @property string department_description
 * @property boolean department_status
 */
class Deparments extends Model
{
    use SoftDeletes;

    public $table = 'departments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'department_id';


    public $fillable = [
        'faculty_id',
        'department_name',
        'department_code',
        'department_description',
        'department_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'department_id' => 'integer',
        'faculty_id' => 'integer',
        'department_name' => 'string',
        'department_code' => 'string',
        'department_description' => 'string',
        'department_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'faculty_id' => 'required',
        'department_name' => 'required',
        'department_code' => 'required',
        'department_description' => 'required',
        'department_status' => 'required'
    ];

    
}
