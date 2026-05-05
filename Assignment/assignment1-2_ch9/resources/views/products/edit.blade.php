<h2>Edit Product</h2>

<form action="/products/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $product->name }}"><br><br>
    Price: <input type="number" name="price" value="{{ $product->price }}"><br><br>
    Quantity: <input type="number" name="quantity" value="{{ $product->quantity }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="/products">Back</a>