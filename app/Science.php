<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sciences extends Model
{
    protected $table =  "sciences";
    

    public $primaryKey = 'id';

    public $timestamps = true;
}
