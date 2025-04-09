<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Produtos</h1>

<form action="/editar-produto/{{$Produto->id}}" method="POST">
    @csrf
    <label for="LabelNome">Nome:</label>
    <input type="text" name="Nome" value="{{$Produto-> Nome}}">
    <br><br>
    <label for="LabelValor">Valor:</label>
    <input type="text" name="Valor" value="{{$Produto-> Valor}}">
    <br><br>
    <label for="LabelQuantidade">Quantidade:</label>
    <input type="text" name="Estoque" value="{{$Produto-> Estoque}}">
    <br><br>
    <button>Cadastrar</button>
</form>
</body>
</html>