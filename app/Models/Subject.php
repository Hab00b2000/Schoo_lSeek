<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public const tablename = "subjects";
    public const id = "id";
    public const name = "name";
    protected $table = Subject::tablename;

    public function SSL (){
        return $this->hasMany(SSL::class,SSL::subjectId);
    }
}
