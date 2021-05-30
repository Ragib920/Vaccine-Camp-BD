<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class health_assistant_model extends Model
{
    public $table='health_assistant';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;  
}
