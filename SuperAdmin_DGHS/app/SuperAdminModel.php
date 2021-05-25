<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperAdminModel extends Model
{
    public $table='super_admin';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;  
}
