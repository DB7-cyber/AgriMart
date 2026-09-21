<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $catalog = [
            'Vegetables' => [
                'description' => 'Fresh vegetables harvested by local farmers.',
                'products' => [
                    ['Tomatoes', 25.00, 'kg', 120, true],
                    ['Onions', 18.50, 'kg', 200, true],
                    ['Rape (Leafy Greens)', 8.00, 'bunch', 80, false],
                    ['Cabbage', 15.00, 'head', 60, false],
                ],
            ],
            'Fruits' => [
                'description' => 'Seasonal fruits, straight from the orchard.',
                'products' => [
                    ['Bananas', 30.00, 'kg', 90, true],
                    ['Oranges', 22.00, 'kg', 150, false],
                    ['Mangoes', 35.00, 'kg', 70, true],
                ],
            ],
            'Grains' => [
                'description' => 'Maize, rice, beans and other staple grains.',
                'products' => [
                    ['White Maize', 350.00, '50kg bag', 40, true],
                    ['Rice', 45.00, 'kg', 100, false],
                    ['Kidney Beans', 40.00, 'kg', 75, false],
                ],
            ],
            'Livestock Products' => [
                'description' => 'Eggs, milk and other farm animal products.',
                'products' => [
                    ['Eggs (Tray of 30)', 95.00, 'tray', 50, true],
                    ['Fresh Milk', 20.00, 'litre', 45, false],
                ],
            ],
        ];

        foreach ($catalog as $name => $data) {
            $category = Category::firstOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name, 'description' => $data['description']],
            );

            foreach ($data['products'] as [$productName, $price, $unit, $stock, $featured]) {
                Product::firstOrCreate(
                    ['slug' => Str::slug($productName)],
                    [
                        'category_id' => $category->id,
                        'name' => $productName,
                        'description' => "Quality {$productName} sourced directly from local farmers.",
                        'price' => $price,
                        'unit' => $unit,
                        'stock' => $stock,
                        'is_featured' => $featured,
                    ],
                );
            }
        }
    }
}
