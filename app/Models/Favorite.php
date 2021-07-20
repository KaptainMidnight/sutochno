<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facility_id',
        'user_id',
    ];

    /**
     * Get favorite facility for own user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get favorite facility for user
     *
     * @return BelongsTo
     */
    public function facility(): BelongsTo
    {
        return $this->belongsTo(Facility::class);
    }
}
