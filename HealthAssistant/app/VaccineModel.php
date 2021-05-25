<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccineModel extends Model
{
    public $table='vaccine';
    public $primaryKey='vaccine_id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true;  
}
