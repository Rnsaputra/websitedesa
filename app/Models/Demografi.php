<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografi extends Model
{
    /** @use HasFactory<\Database\Factories\DemografiFactory> */
    use HasFactory;
    protected $fillable = [
        'namadusun',
        'laki',
        'perempuan',
        'kepala'
    ];

    public function getRouteKeyName()
    {
        return 'namadusun';
    }
}
