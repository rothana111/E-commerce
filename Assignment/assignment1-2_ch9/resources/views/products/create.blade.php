<h2>Add Product</h2>

<form action="/products" method="POST">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Price: <input type="number" name="price"><br><br>
    Quantity: <input type="number" name="quantity"><br><br>
    <button type="submit">Add</button>
</form>

<a href="/products">Back</a>