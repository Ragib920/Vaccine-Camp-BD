<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccinationRecordModel extends Model
{
    public $table='vaccination_record';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true; 
}
