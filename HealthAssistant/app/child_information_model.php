<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class child_information_model extends Model
{
    public $table='child_information';
    public $primaryKey='child_id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;  
}
