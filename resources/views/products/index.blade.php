<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
 
        <a href="{{ route('products.create') }}">Create Product</a>
    <div>
        <table border="1">
            
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Delete</th>
                </tr>
            
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}">Edit</a></td>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>