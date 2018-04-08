<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class User.
 */
class Treatment extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'patient_id',
    ];
}
