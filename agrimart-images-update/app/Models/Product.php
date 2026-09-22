<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'slug', 'description',
        'price', 'stock', 'unit', 'image', 'is_featured',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_featured' => 'boolean',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The image to actually show for this product.
     * - If a real photo was uploaded, use it (from storage/app/public via the /storage symlink).
     * - Otherwise, fall back to a simple category icon, so the site never shows a broken image.
     */
    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }

        $categorySlug = $this->category ? Str::slug($this->category->name) : 'default';
        $path = 'images/categories/'.$categorySlug.'.svg';

        return file_exists(public_path($path))
            ? asset($path)
            : asset('images/categories/default.svg');
    }
}
