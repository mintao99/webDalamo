<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DO extends Model
{
    protected $table='detail_import_product';
    protected $fillable=['idReceipt','idProduct','quantity'];
    public $timestamps=false;
}