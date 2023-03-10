<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>pagina inicial</title>
</head>
<body>
    <h1 align="center"><b>Pagina inicial</b></h1>

<!-- no codigo abaixo eu coloquei as informaçoes do banco de dados para ser exibida na tela-->
    <table border="1" class="table table-dark table-borderless">

<!-- definiçao das linhas principais das colunas -->
            <th>Nome</th>
            <th>Descriçao</th>
            <th>Mais Detalhes</th>

<!-- no codigo abaixo eu percorro e mostro as informaçoes do banco de dados -->
                @foreach ($product as $products)
        <tr>
            <td>{{ $products->name }}</td><br>
            <td>{{ $products->description }}</td>
            <td> <a href=""><button type="button" class="btn btn-outline-info">detalhes</button></a></td>
        </tr>
                @endforeach

    </table>
<!-- no codigo abaixo eu mostro na tela as outras imformaçoes que estao subtendidas -->
{{$product->links()}}

</body>
</html>
