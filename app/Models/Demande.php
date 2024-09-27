<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    /**
     * These functions are related to the status enum field, the values
     * are fixed, so we can use them as constants, refer to the
     * migration file for details
     */
    const PENDING = 'pending';
    const DENIED = 'denied';
    const ACCEPTED = 'accepted';

    public function denyRequest() {
        $this->statut = self::DENIED;
        $this->save();
    }

    public function acceptRequest() {
        $this->statut = self::ACCEPTED;
        $this->save();
    }

    /**
     * Relationships
     */

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function annonce(): BelongsTo {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
}
