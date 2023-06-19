<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laravelApp extends Model
{
    protected $fillable = [
        'message',
    ];
    use HasFactory;
}
