<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_level extends Model
{
    use HasFactory;
    public const tablename = "school_levels";
    public const id = "id";
    public const schoolId = "schoolId";
    public const levelId = "levelId";
    protected $table = School_level::tablename;

    public function school (){
        return $this->belongsTo(school::class,School_level::schoolId);
    }

    public function level (){
        return $this->belongsTo(level::class,School_level::levelId);
    }

    public function SSL (){
        return $this->hasMany(SSL::class,SSl::slId);
    }
}
