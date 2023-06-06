<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment\Doc;

class Order extends Model
{
    use HasFactory;
    public const tablename = "orders";
    public const id = "id";
    public const docId = "docId";
    public const schoolId = "schoolId";
    public const accept = "accept";
    protected $table = Order::tablename;

    public function note (){
        return $this->hasMany(Note::class,Note::orderId);
    }

    public function Doc (){
        return $this->belongsTo(Document::class,Order::docId);
    }

    public function school (){
        return $this->belongsTo(school::class,Order::schoolId);
    }
}
