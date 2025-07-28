<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;


    protected $with = ['author', 'category'];
    protected $table = 'artikel_posts';
    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'category_id',
        'image',
        'body',
        'is_active'
    ];


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
            $query->where('title', 'like', '%' . request('search') . '%');
        });

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) => $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $category)
            )
        );
        $query->when(
            $filters['author'] ?? false,
            fn($query, $authors) => $query->whereHas(
                'author',
                fn($query) => $query->where('username', $authors)
            )
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
