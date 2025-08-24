<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'driver_id',
        'type',
        'file_path',
    ];

    /**
     * Get the driver that owns the document.
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}