<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pagina inicial</title>
</head>
<body>
    <h1>Pagina inicial</h1>

<table>
    <thead>
        <tr>
        <th>nome:</th>
        <th>preço:</th>
        <th>açoes:</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($product as $products)
        <td>{{ $products->name }}</td>
        <td>{{ $products->description }}</td>

        @endforeach
    </tbody>
</table>




</body>
</html>
