<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>

<!-- No link abaixo eu inclui o stilo do BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1 align="center"><b>Cadastro de Clientes</b></h1>

<BR>

    {{-- o codigo abaixo mostra uma msg de erro caso o campo do formulario nao seja preenchido--}}

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $errors)
        <li>{{$errors}}</li>
        @endforeach
    </ul>
    @endif


{{-- o codigo abaixo  inserre um formulario com um inserção de arquivo atraves do enctype--}}



            <form action="{{route('inserir.store')}}" method="POST" enctype="multipart/form-data">

                {{-- a linha de comando abaixo(COMENTADA) É utilizado como questao de segurança,
                    pois sem uma validaçao de token podemos utilizar um ataque DOS com varias requisiçoes de cadastro
                derrubando o site--}}
                {{-- <input type="text" name="_token" value="{{csrf_token()}}">  --}}


                {{-- a linha de comado abaixo(csrf) segue as msms diretrizes que a linha de comando acima, porem mais enchuta  --}}

            @csrf
            {{-- o tag >> value {{ old() << armazena a informaçao temporariamente }}--}}
               Nome:</size><input type="text" class="form-control" name="nome" size="100" placeholder="informe o seu nome" value="{{old('nome')}}">
    <br>

                Sobrenome:<input type="text" class="form-control" name="sobrenome" size="100" placeholder="informe o seu sobrenome" value="{{old('sobrenome')}}">
    <br>

                Idade:<input type="text" name="idade"class="form-control" size="50" placeholder="informe sua idade" value="{{old('idade')}}">
    <br>

                Cidade:<input type="text" name="informe sua cidade" class="form-control"size="100" placeholder="informe sua idade" value="{{old('cidade')}}">
    <br>


                <input type="file" size="50" class="btn btn-outline-dark" placeholder="carregue uma foto" name="arquivo">
                <br>
                <br>
<!--========================= Abaixo inserir uma lista =================================================================-->
                <h2>Selecione o Estado</h2>
                <select class="btn btn-outline-info">
                    <option value="MA">MA</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</optiON>
                </select>
    <br>
<!--========================= Abaixo inserir uma lista de Pais de Origem =========================================-->
         <h2>Pais de Origem</h2>
                <select class="btn btn-outline-info">
                    <option value="Brasil">Brasil</option>
                    <option value="Brasil">Japao</option>
                    <option value="Brasil">China</option>

                </select>
    <br>
    <br>



            <!--=========== Botao==================-->
                <button type="submit"class="btn btn-outline-primary">cadastrar</button>



            </form></form></form>

</body>
</html>
