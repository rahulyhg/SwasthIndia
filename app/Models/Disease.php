<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Traits\Attribute\DiseaseAttribute;

/**
 * Class User.
 */
class Disease extends Model
{
    use DiseaseAttribute;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'disease';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
    ];

}
