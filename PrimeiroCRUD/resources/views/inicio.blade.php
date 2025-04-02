<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <form action="/cadastrar-produto" method="POST">
        @csrf
        <label for="LabelNome">Nome:</label>
        <input type="text" name="Nome">
        <br><br>
        <label for="LabelValor">Valor:</label>
        <input type="text" name="Valor">
        <br><br>
        <label for="LabelQuantidade">Quantidade:</label>
        <input type="text" name="Estoque">
        <br><br>
        <button>Cadastrar</button>
    </form>
</body>
</html>