<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$produtos = pesquisarProdutoId($conexao, $idproduto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todos os produtos</h1>
    <?php foreach ($produtos as $p) ?>
        <div class="produto"></div>
            <strong><?= htmlspecialchars ($p["nome"]) ?> </strong> <br>
            Preço: R$ <?= number_format($p["nome"], 2, ',', '.') ?>
        </div>
   

</body>
</html>