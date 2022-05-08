<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];
    public function address()
    {
        return $this->hasOne('App\Address');
    }
    public function getFullNameAttribute()	 	 
    {	 	 
    return $this->first_name . " " . $this->last_name;	 	 
    }
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtolower($value);

    }


}
