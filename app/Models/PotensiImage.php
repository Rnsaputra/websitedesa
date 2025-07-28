<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotensiImage extends Model
{
    /** @use HasFactory<\Database\Factories\PotensiImageFactory> */
    use HasFactory;
    protected $table = 'potensi_image';
    protected $fillable = [
        'potensi_id',
        'image_path',
    ];
    public function potensi()
    {
        return $this->belongsTo(Potensi::class);
    }
}
