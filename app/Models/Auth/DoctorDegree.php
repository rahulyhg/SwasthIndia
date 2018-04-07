<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorDegree.
 */
class DoctorDegree extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_id',
        'file_name',
    ];
}
