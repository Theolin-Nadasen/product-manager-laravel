<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    <table border="2">
        <tr>
            <th>Name</th>
            <th>price</th>
            <th>Description</th>
        </tr>

        @foreach($products as $product)

        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
        </tr>

        @endforeach

    </table>

</body>
</html>