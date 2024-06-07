<?php
// app/Models/Locker.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    use HasFactory;

    protected $fillable = ['locker_number', 'size', 'status', 'user_id', 'pin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
