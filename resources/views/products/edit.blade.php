<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Products</title>
</head>
<body>
    <h1>Edit a product</h1>

    <form action="{{ route('product.update', ['product' => $product]) }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        <textarea name="description">{{$product->description}}</textarea>
        <input type="submit" value="Update">
    </form>

</body>
</html>