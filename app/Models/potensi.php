<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class potensi extends Model
{
    protected $with = ['images', 'category'];
    protected $table = 'potensi';
    protected $fillable = [
        'categories_id',
        'place',
        'slugplace',
        'description',
        'locate',
        'embedlocate',
        'cover',
        'youtube',
        'instagram',
        'tiktok'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryPotensi::class, 'categories_id');
    }
    public function images()
    {
        return $this->hasMany(PotensiImage::class);
    }
}
