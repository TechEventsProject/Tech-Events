<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'speaker',
        'date and time',
        'participants',
        'max participants',
        'description',
        'image',
        'location',
    ];
}
