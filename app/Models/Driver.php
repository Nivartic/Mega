<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Driver extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'full_name',
        'date_of_birth',
        'phone',
        'terms_accepted',
        'status',
    ];

    /**
     * Get the user that owns the driver.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the vehicle associated with the driver.
     */
    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    }

    /**
     * Get the documents for the driver.
     */
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}