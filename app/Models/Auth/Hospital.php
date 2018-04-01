<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
/**
 * Class User.
 */
class Hospital extends Model
{

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
        'active'
    ];
}
