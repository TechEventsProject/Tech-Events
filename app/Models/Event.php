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
        'date_and_time',
        'participants',
        'max_participants',
        'description',
        'image',
        'location',
    ];
}
