<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
     protected $fillable = [
        'first_name','last_name', 'companies','company_id','email','phone','password'
    ];
    public $timestamps = true;
     public function Employees() {

        return $this->HasMany(Employee::class,'company_id');
    }
}
