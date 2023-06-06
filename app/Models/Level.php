<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    public const tablename = "levels";
    public const id = "id";
    public const name = "name";
    public const birthday = "birthday";
    protected $table = Level::tablename;

    public function school_level (){
        return $this->hasMany(school_level::class,school_level::levelId);
    }
}
