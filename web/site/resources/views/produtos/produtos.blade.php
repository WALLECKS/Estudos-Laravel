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

<div class="container">
    @foreach ($product as $products)
        {{ $products->name }} <br>
        {{ $products->description }}

    @endforeach
</div>

</body>
</html>
