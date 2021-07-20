<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facility extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'square',
        'price',
        'booking',
        'rental',
        'surrender',
        'residents',
        'user_id',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'count_views',
    ];

    /**
     * Get the facilities for user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the favorite facility for user
     *
     * @return HasMany
     */
    public function favorite(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Get views for facility
     *
     * @return HasMany
     */
    public function view(): HasMany
    {
        return $this->hasMany(View::class);
    }

    /**
     * Getter for get count views
     *
     * @return int
     */
    public function getCountViewsAttribute(): int
    {
        return $this->view->count();
    }
}
