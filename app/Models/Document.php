<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    public const tablename = "documents";
    public const id = "id";
    public const childId = "childId";
    public const file = "file";
    protected $table = Document::tablename;

    public function child (){
        return $this->belongsTo(Child::class,Document::childId);
    }

    public function order (){
        return $this->hasMany(Order::class,Order::docId);
    }
}
