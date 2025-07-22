<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    protected $table="urlsdata";
    protected $fillable=['originalurl','redirecturl','clicks','created','expiry'];
    public $timestamps=false;
}
