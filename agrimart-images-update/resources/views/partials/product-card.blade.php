<a href="{{ route('products.show', $product) }}" class="product-card">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="product-image">
    <p class="product-name">{{ $product->name }}</p>
    <p class="product-category">{{ $product->category->name }}</p>
    <p class="product-price">K{{ number_format($product->price, 2) }} / {{ $product->unit }}</p>
</a>
