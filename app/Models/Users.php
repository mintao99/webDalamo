<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='user';
    protected $fillable=['fullName','createdBy','createdDate','isDeleted','password','isUserRole','email','phone'];
    public $timestamps=false;
}