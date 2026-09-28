<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>

<body>
    <h1>Cadastro de Produtos</h1>

    <form action="" method="post">
        <label for="produto">Nome do Produto</label>
        <br>
        <input type="text" name="produto" id="produto">
        <br> <br>
        <label for="preco">Preço</label>
        <br>
        <input type="number" name="preco" id="preco">
        <br> <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    // conexao
    $server = 'localhost';
    $user = 'root';
    $pass = 'Senai@118';
    $db = 'exercicio';

    $conn = new mysqli($server, $user, $pass, $db);

    if ($conn->connect_error) {
        die('Falha na conexão: ' . $conn->connect_error);
    }

    // validacao
    if (!empty($produto) && is_numeric($preco) && $preco > 0) {
        $sql = "INSERT INTO produtos (nome, preco) VALUES ('$produto', $preco)";

        if ($conn->query($sql) == TRUE) {
            echo "<p id='msg' style='color: darkgreen;'>Produto cadastrado com sucesso!</p>";
        }
    } elseif (empty($produto)) {
        echo "<p id='msg' style='color: red';>Erro: O produto precisa ter um nome válido.</p>";
    } elseif ($preco <= 0) {
        echo "<p id='msg' style='color: red';>Erro: O preço deve ser um número positivo.</p>";
    }

    echo "
    <script>
        setTimeout(function() {
            document.getElementById('msg').style.display = 'none'
        }, 5000)
    </script>
    ";

    $conn->close();
}
?>