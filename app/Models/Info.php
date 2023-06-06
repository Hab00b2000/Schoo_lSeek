<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    public const tablename = "infos";
    public const id = "id";
    public const userId = "userId";
    public const address = "address";
    public const phone = "phone";
    public const image = "image";

    public function User (){
        return $this->belongsTo(User::class,Info::userId);
    }
}
