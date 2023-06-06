<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    public const tablename = "favorites";
    public const id = "id";
    public const userId = "userId";
    public const schoolId = "schoolId";
    protected $table = Favorite::tablename;
}
