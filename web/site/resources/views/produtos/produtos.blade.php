<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista de produtos</title>
</head>
<body>

   <h1>Lista de produtos</h1>

<hr>


<div class="container ">
    <table>
        <thead>
            <tr>
            <th>NOME</th>
            <th>DESCRIÇAO</th>
            </tr>
        </thead>
             <tbody>
                @foreach ($product as $products)
        <tr>
            <td>{{ $products->name }}</td><br>
            <td>{{ $products->description }}</td>
        </tr>
                @endforeach
            </tbody>
    </table>
</div>

</body>
</html>
