<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de produtos</h1>

    <?php
    require_once "conexao.php";
    require_once "funcoes.php";

    $listar_produtos = listarProdutos($conexao);
    
    //verificar se encontrou produtos antes de imprimir.
    if (count($lista_produtos) == 0) {
        echo "Não existem produtos cadastrados.";
    } else {
    ?>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>tipo</td>
                <td>preco_compra</td>
                <td>preco_venda</td>
                <td>margem_lucro</td>
                <td>quantidade</td>
                <td colspan="2">Ação</td>
            </tr>

        <?php
        foreach ($lista_produtos as $produto) {
            $idproduto = $produto['idproduto'];
            $nome = $produto['nome'];
            $tipo = $produto['tipo'];
            $preco_compra = $produto['preco_compra'];
            $preco_venda = $produto['preco_venda'];
            $margem_lucro = $produto['margem_lucro'];
            $quantidade= $produto['quantidade'];

            echo "<tr>";
            echo "<td>$idproduto</td>";
            echo "<td>$nome</td>";
            echo "<td>$tipo</td>";
            echo "<td>$preco_compra</td>";
            echo "<td>$preco_venda</td>";
            echo "<td>$margem_lucro</td>";
            echo "<td>$quantidade</td>";
            echo "<td><a href='formCliente.php?id=$idproduto'>Editar</a></td>";
            echo "<td><a href='deletarCliente.php?id=$idproduto'>Excluir</a></td>";
            echo "</tr>";
        }
    }
        ?>
        </table>
</body>