<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gener extends Model
{
    use HasFactory;
    public const tablename = "geners";
    public const id = "id";
    public const name = "name";
    protected $table = Gener::tablename;

    public function school (){
        return $this->hasMany(School::class,school::generId);
    }
}
