<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Products</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center">
        <h1>Products</h1>
        <a href="{{ route('product.create') }}" class="btn btn-info mb-2">Create a product</a>
    </div>

    @if(session()->has('success'))

    <p>{{session('success')}}</p>

    @endif


    <table border="2" class="table">
        <tr>
            <th>Name</th>
            <th>price</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>

        @foreach($products as $product)

        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>
                <form action="{{route('product.delete', ['product' => $product])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-outline-danger" type="submit" value="Delete">
                </form>
            </td>
            <td><a href="{{route('product.edit', ['product' => $product])}}">Edit</a></td>
        </tr>

        @endforeach

    </table>

</body>
</html>