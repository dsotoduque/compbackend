<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','logo','email','website'];
    //

    public static function paginatedCompanies(){

        Company::all();
    }
}
