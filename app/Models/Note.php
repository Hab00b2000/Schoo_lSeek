<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    public const tablename = "notes";
    public const id = "id";
    public const userId = "userId";
    public const orderId = "orderId";
    public const disc = "disc";
    protected $table = Note::tablename;

    public function order (){
        return $this->belongsTo(Order::class,Note::orderId);
    }

}
