<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OR extends Model
{
    protected $table='order_receipt';
    protected $fillable=['address','idStatus','phone','name','createdBy','createdDate','isDeleted'];
    public $timestamps=false;
}