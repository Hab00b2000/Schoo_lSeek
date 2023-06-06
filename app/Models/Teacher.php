<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public const tablename = "teachers";
    public const id = "id";
    public const staffId = "staffId";
    public const sslId = "sslId";
    protected $table = Teacher::tablename;

    public function staff (){
        return $this->belongsTo(Staff::class,Teacher::staffId);
    }

    public function SSL (){
        return $this->belongsTo(SSL::class,Teacher::sslId);
    }
}
