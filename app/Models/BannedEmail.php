<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannedEmail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'reason',
        'banned_by',
    ];

    public function banner()
    {
        return $this->belongsTo(User::class, 'banned_by');
    }
}
