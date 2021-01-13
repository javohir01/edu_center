<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EduCenter extends Model
{
    protected $table = 'edu_centers';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name', 'email', 'address'
    ];
}
