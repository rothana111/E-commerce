<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            margin: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }
        h2 a {
            text-decoration: none;
            color: #111827;
            font-size: 22px; /* keep same size as h2 */
        }

        a {
            text-decoration: none;
            color: #2563eb;
            margin-right: 8px;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        .top {
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f3f4f6;
        }

        td a {
            margin-right: 10px;
            color: #2563eb;
        }

        td a:last-child {
            color: #dc2626;
        }
    </style>
</head>

<body>

<h2><a href="/">Product List</a></h2>

<div class="top">
    <a href="/products/create">+ Add Product</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Action</th>
    </tr>

    @foreach($products as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->price }}</td>
        <td>{{ $p->quantity }}</td>
        <td>
            <a href="/products/{{ $p->id }}/edit">Edit</a>

            <a href="#"
               onclick="event.preventDefault(); if(confirm('Delete this product?')) document.getElementById('del-{{ $p->id }}').submit();">
                Delete
            </a>

            <form id="del-{{ $p->id }}" action="/products/{{ $p->id }}" method="POST" style="display:none;">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>