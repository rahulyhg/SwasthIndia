<?php

namespace App\Models\Auth\Traits\Relationship;

use App\Models\System\Session;
use App\Models\Auth\SocialAccount;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    /**
     * @return mixed
     */
    public function providers()
    {
        return $this->hasMany(SocialAccount::class);
    }

    /**
     * @return mixed
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
    /**
     * @return mixed
     */
    public function doctor()
    {
        return $this->hasOne(\App\Models\Auth\DoctorDetail::class);
    }
}
