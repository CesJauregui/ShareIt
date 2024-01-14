<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Debate extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'file_path', 'user_id'];

    public function user(): BelongsTo
    {
        //Se lee: Un debate pertenece a un usuario
        return $this->belongsTo(User::class, 'id');
    }
}
