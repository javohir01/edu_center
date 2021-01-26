<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table =  "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $primaryKey = 'id';

    public $timestamps = true;
     
    protected $fillable = [
        'name', 'email', 'password' , 'login' , 'role_id', 'student_id', 'edu_center_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function EduCenter(){
        return $this->hasMany('App\EduCenter');
    }
}
