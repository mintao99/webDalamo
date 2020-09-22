<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table='provider';
    protected $fillable=['name','createdBy','createdDate','isDeleted','address','phone'];
    public $timestamps=false;
}