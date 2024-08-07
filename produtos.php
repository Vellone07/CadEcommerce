<?php
    include_once ('controller/conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <div class="center">
            <h1>Cadastro Produtos</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-produto.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Descrição: <input type="text" name="descricao"><br>
            Estoque: <input type="numer" name="estoque"><br>
            Preço: <input type="numer" name="preco" min="0.00" max="100000.00" step="0.01"><br>
            Categoria:
            <select name="seleciona_categoria" id="">
                <option value="">Selecione</option>
                <?php
                    $resultado_categoria = "SELECT * FROM  categoria";
                    $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                    while ($row_categorias = mysqli_fetch_assoc($resultcategoria)) {
                ?>
                
                <option value="<?php echo $row_categorias['IDCATEGORIA'];?>"><?php echo $row_categorias['DESCRICAO']; ?></option>

                <?php            
                    }
                ?>
            </select>
                <br>
            Marca:
            <select name="seleciona_marca" id="">
                <option value="">Selecione</option>
                <?php
                    $resultado_marca = "SELECT * FROM  marca";
                    $resultmarca = mysqli_query($mysqli, $resultado_marca);
                    while ($row_marcas = mysqli_fetch_assoc($resultmarca)) {
                ?>
                
                <option value="<?php echo $row_marcas['IDMARCA'];?>"><?php echo $row_marcas['DESCRICAO']; ?></option>

                <?php            
                    }
                ?>
            </select>
            <br>
            <input type="submit" value="CADASTRAR">
        </form>
    </section>
</body>
</html>