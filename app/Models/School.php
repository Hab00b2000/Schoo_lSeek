<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    public const tablename = "schools";
    public const id = "id";
    public const name = "name";
    public const email = "email";
    public const password = "password";
    public const website = "website";
    public const address = "addresss";
    public const phone = "phone";
    public const typeId = "typeId";
    public const generId = "generId";
    public const image = "image";
    public const disc = "disc";
    protected $table = School::tablename;


    public function type (){
        return $this->belongsTo(Type::class,School::typeId);
    }

    public function gener (){
        return $this->belongsTo(Gener::class,School::generId);
    }

    public function Order (){
        return $this->hasMany(Order::class,Order::schoolId);
    }

    public function rate (){
        return $this->hasMany(Rate::class,Rate::schoolId);
    }

    public function SL (){
        return $this->hasMany(School_level::class,School_level::schoolId);
    }

    public function about (){
        return $this->hasMany(About::class,About::schoolId);
    }
}
