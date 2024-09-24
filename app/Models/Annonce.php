<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'publie',
        'complet'
    ];

    /**
     * Relationships
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function demandes(): HasMany {
        return $this->hasMany(Demande::class, 'annonce_id');
    }
}
