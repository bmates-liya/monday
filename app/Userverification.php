<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userverification extends Model
{
    //
    protected $table="useremailverification";
    protected $fillable=['emailaddress','token','validfor'];
}
