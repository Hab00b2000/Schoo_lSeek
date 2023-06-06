<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    public const tablename = "staff";
    public const id = "id";
    public const name = "name";
    public const phone = "phone";
    public const typeOfWork = "typeOfWork";
    public const super = "super";
    public const schoolId = "schoolId";
    protected $table = Staff::tablename;

    public function school (){
        return $this->belongsTo(School::class,Staff::schoolId);
    }

    public function super (){
        return $this->hasMany(Staff::class,Staff::super);
    }

    public function teacher (){
        return $this->hasMany(Teacher::class,Teacher::staffId);
    }
}
