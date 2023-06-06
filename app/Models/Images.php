<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    public const tablename = "images";
    public const id = "id";
    public const aboutId = "aboutId";
    public const image = "image";
    protected $table = Images::tablename;

    public function about (){
        return $this->belongsTo(about::class,Images::aboutId);
    }
}
