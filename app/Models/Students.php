<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Students
 * @package App\Models
 * @version September 18, 2021, 1:27 am UTC
 *
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Lastname
 * @property string $Birthdate
 * @property string $Gender
 * @property string $Address
 * @property string $Citizenship
 * @property string $Religion
 */
class Students extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'students';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship',
        'Religion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Lastname' => 'string',
        'Birthdate' => 'date',
        'Gender' => 'string',
        'Address' => 'string',
        'Citizenship' => 'string',
        'Religion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'required|string|max:100',
        'Middlename' => 'required|string|max:100',
        'Lastname' => 'required|string|max:100',
        'Birthdate' => 'required',
        'Gender' => 'required|string|max:12',
        'Address' => 'required|string|max:500',
        'Citizenship' => 'required|string|max:100',
        'Religion' => 'required|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
