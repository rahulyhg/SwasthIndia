<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorDetail.
 */
class DoctorDetail extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specialisation',
        'user_id',
        'degree',
        'surgeon',
    ];
}
