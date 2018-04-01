<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Traits\Attribute\HospitalAttribute;
/**
 * Class User.
 */
class Hospital extends Model
{

    use HospitalAttribute;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'city',
        'state',
        'address',
        'active',
        'created_at',
        'updated_at'
    ];
}
