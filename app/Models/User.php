<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable, HasRoles;
    use Sluggable;

    public function sluggable():array
    {

        return [
            'slug'=>[
                'source' => 'name'
            ]
        ];

    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile','school','specialisation','about','publications','experience','education',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //public function roles()
    //{
       // return $this->belongsToMany(related:'App\Role');
    //}

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
}
