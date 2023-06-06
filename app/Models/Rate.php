<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public const tablename = "rates";
    public const id = "id";
    public const userId = "userId";
    public const schoolId = "schoolId";
    public const rate = "rate";
    public const comment =  "comment";
    protected $table = Rate::tablename;

    public function school (){
        return $this->belongsTo(School::class,Rate::schoolId);
    }
}
