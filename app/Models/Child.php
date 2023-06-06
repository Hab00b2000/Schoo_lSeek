<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    public const tablename = "children";
    public const id = "id";
    public const name = "name";
    public const Fname = "fname";
    public const Mname = "mname";
    public const Birthday = "birthday";
    public const Bornplace = "bornplace";
    public const Gener = "gener";
    public const userId = "userId";
    protected $table = Child::tablename;

    public function Doc (){
        return $this->hasMany(Document::class,Document::childId);
    }
    public function Parent (){
        return $this->belongsTo(User::class,Child::userId);
    }
}
