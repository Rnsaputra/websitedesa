<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    protected $table = 'perangkat_desa';
    protected $fillable = [
        'name',
        'job',
        'profile_picture'
    ];
    public function getRouteKeyName()
    {
        return 'name';
    }
}
