<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public const tablename = "abouts";
    public const id = "id";
    public const disc = "disc";
    public const schoolId = "schoolId";
    protected $table = About::tablename;

    public function school (){
        return $this->belongsTo(School::class,About::schoolId);
    }
    public function image (){
        return $this->hasMany(Images::class,Images::aboutId);
    }
}
