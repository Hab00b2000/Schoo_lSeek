<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSL extends Model
{
    use HasFactory;
    public const tablename = "s_s_l_s";
    public const id = "id";
    public const slId = "slId";
    public const subjectId = "subjectId";
    protected $table = SSL::tablename;

    public function Sl (){
        return $this->belongsTo(School_level::class,SSL::slId);
    }

    public function subject (){
        return $this->belongsTo(subject::class,SSL::subjectId);
    }

    public function teacher (){
        return $this->hasMany(teacher::class,teacher::sslId);
    }

}
