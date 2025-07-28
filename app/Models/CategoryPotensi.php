<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryPotensi extends Model
{
    protected $table = 'potensi_categories';
    protected $fillable= ['name', 'description'];
    public function getRouteKeyName()
    {
        return 'name';
    }
    public function potensiItems(): HasMany 
    {
        return $this->hasMany(Potensi::class, 'categories_id');
    }
}
