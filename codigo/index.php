<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="test.php" method = "POST">

        <h1>Mercado Online</h1>
      
            <legend><h3>Dados do Cliente</h3></legend> <br> 
            <label>Nome: <input type = "text" name= "cliente" required></label> <br> <br><br>
            <label>Data da Compra: <input type = "date" name= "data" required></label> <br><br><br>
        

        
        <h3>Produtos</h3><br> <br>
        <?php
        require_once "funcoes.php";
        require_once "conexao.php";

        $produtos = (listarProdutos($conexao));

        foreach ($produto as $p) {


           echo "<input type='checkbox' name='produtos[]' value='{$p['idproduto']}'> {$p['nome']}";
           echo "<input type = 'number' name='quantidade[]'>";
    }
        
         ?>
        
             
    
       <button type="submit"> Finalizar Compra</button>
       


        

    </form>
</body>
</html>