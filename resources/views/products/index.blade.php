<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    @if(session()->has('success'))

    <p>{{session('success')}}</p>

    @endif

    <table border="2">
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
                    <input type="submit" value="Delete">
                </form>
            </td>
            <td><a href="{{route('product.edit', ['product' => $product])}}">Edit</a></td>
        </tr>

        @endforeach

    </table>

</body>
</html>