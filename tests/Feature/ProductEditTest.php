<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductEditTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_can_be_edited(): void
    {
        $category = Category::create([
            'name' => 'Fruits',
            'slug' => 'fruits',
            'description' => 'Fresh fruits',
        ]);

        $product = Product::create([
            'category_id' => $category->id,
            'name' => 'Banana',
            'slug' => 'banana',
            'description' => 'Yellow fruit',
            'price' => 3.00,
            'stock' => 10,
            'unit' => 'kg',
            'is_featured' => false,
        ]);

        $response = $this->put(route('products.update', $product), [
            'category_id' => $category->id,
            'name' => 'Banana',
            'description' => 'Fresh yellow fruit',
            'price' => '4.50',
            'stock' => '20',
            'unit' => 'kg',
            'is_featured' => '1',
        ]);

        $response->assertRedirect(route('products.show', $product));

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'description' => 'Fresh yellow fruit',
            'price' => '4.50',
            'stock' => 20,
            'is_featured' => true,
        ]);
    }
}
