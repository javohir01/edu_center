<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EduCenter extends Model
{
    protected $table =  "edu_centers";
    

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name', 'email', 'address' , 'tell_number' , 'center_site', 'center_about', 'head_name',
        'region_id', 'city_id'
    ];

    public function User(){
        return   $this->belongsTo('App\User');
    }
}
