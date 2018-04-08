<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class User.
 */
class Prescription extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_id',
        'doctor_name',
        'patient_id',
        'hospital_id',
        'hospital_name',
        'treatment_id',
        'description',
        'prescripted_at',
        'is_active',
        'images',
        'diseases',
        'files',
        'user_id',
    ];
}
