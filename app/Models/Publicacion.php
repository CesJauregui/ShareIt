<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = "publicaciones";
    //protected $fillable = ['desc_publicacion', 'user_publicacion', 'file_path_publicacion'];
}
