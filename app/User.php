<?php

namespace App;

use App\UserEmploymentSurvey;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable {

    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserEmploymentSurvey() {
        return $this->hasOne('App\UserEmploymentSurvey', 'user_id');
    }

    public function member() {
        return $this->hasMany('App\UserAlumniMember', 'user_id');
    }

    public function proService() {
        return $this->hasMany('App\UserAlumniProfessionalService', 'user_id');
    }

    public function perService() {
        return $this->hasMany('App\UserAlumniPersonalService', 'user_id');
    }

    public function satSurvey() {
        return $this->hasOne('App\UserSatisfactionSurvey', 'user_id');
    }

}
