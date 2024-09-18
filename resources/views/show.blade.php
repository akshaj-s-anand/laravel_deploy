<div class="container">
    <h1>Product Details</h1>

    <div class="mb-3">
        <label>Name:</label>
        <p>{{ $product->name }}</p>
    </div>

    <div class="mb-3">
        <label>Description:</label>
        <p>{{ $product->description }}</p>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
</div>