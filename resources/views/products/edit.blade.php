<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Create Products</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center">

        <h1>Edit a product</h1>
        
        <form class="form" action="{{ route('product.update', ['product' => $product]) }}" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="name" placeholder="name" value="{{$product->name}}">
            <input class="form-control" type="text" name="price" placeholder="price" value="{{$product->price}}">
            <textarea class="form-control" name="description">{{$product->description}}</textarea>
            <input class="btn btn-outline-info mt-2 w-100" type="submit" value="Update">
            <a href="{{route(name: 'index')}}" class="btn btn-outline-danger w-100">Cancel</a>
        </form>
        
    </div>

</body>
</html>