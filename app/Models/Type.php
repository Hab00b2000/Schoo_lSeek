<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public const tablename = "types";
    public const id = "id";
    public const name = "name";
    public const gType = "gType";
    protected $table = Type::tablename;

    public function child (){
        return $this->hasMany(Type::class,Type::gType);
    }

    public function school (){
        return $this->hasMany(School::class,);
    }
}
