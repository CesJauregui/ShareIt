<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debate extends Model
{
    use HasFactory;

    protected $fillable = ['topic_name', 'desc_debate', 'user', 'file_path'];

    public function comentarios()
    {
        return $this->hasMany('App\Comentario', 'debate_id');
    }
}
