<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestRecordDocument extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'test_record_id',
        'document',
        'type'
    ];

    public function testRecord()
    {
        return $this->hasMany(TestRecord::class);
    }

}
