<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticeModel extends Model
{
    public $table='notice';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true;
}
