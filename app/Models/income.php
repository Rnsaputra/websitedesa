<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    /** @use HasFactory<\Database\Factories\IncomeFactory> */
    use HasFactory;
    protected $fillable = [
        'year',
        'aslidesa',
        'transfer',
        'lainnya'
    ];

    public function getRouteKeyName()
    {
        return 'year';
    }
}
