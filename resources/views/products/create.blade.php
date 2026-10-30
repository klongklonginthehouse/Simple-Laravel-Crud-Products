<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <form action="{{ route('products.store') }}" method="post">
    @csrf  
    <div> 
        <label>Name</label>
        <input type="text" name="name" placeholder="name">
    </div>
    <div> 
        <label>qty</label>
        <input type="text" name="qty" placeholder="qty">
    </div>
    <div> 
        <label>price</label>
        <input type="text" name="price" placeholder="price">
    </div>
    <div>
        <label>description</label>
        <input type="text" name="description" placeholder="description">
    </div>
<div><input type="submit" value="Save as new product"></div>

    </form>
</body>
</html>