<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outcome extends Model
{
    /** @use HasFactory<\Database\Factories\OutcomeFactory> */
    use HasFactory;
    protected $fillable = [
        'year',
        'pemerintahan',
        'pembangunan',
        'pembinaan',
        'pemberdayaan',
        'bencana',
    ];

    public function getRouteKeyName()
    {
        return 'year';
    }
}
