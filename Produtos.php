
<?php

$conn = mysqli_connect("localhost", "root", "", "fullstackeletro");

if (!$conn) {
    die ("A conexão ao BD falhou!" . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="pt.br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Fullstack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="comandos.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <?php
    
            include('menu.html');

        ?>
        <div class="container">
            <br>
            <h2>Produtos</h2>
        </div>
        <hr>
        <section class="listaCategorias">
            <h3>Categorias</h3>
                <ol class="seta">
                    <li onclick="exibirTodos()">Todos (12)</li>
                    <li onclick="exibirCategoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibirCategoria('fogao')">Fogões (2)</li>
                    <li onclick="exibirCategoria('microondas')">Microondas (3)</li> 
                    <li onclick="exibirCategoria('lavaRoupa')">Lavadoras de roupa (2)</li>
                    <li onclick="exibirCategoria('lavaLouca')">Lava-louças (2)</li>
                </ol><br><br>
                
        </section>
        <section class="produtos">


            <?php
            
            $sql = "select * from produtos";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()) {
            
            ?>

                <div class="cadaProduto" style="display: inline-block;" id="categoria">
                    <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
                    <br>
                    <div><?php echo $rows["descricao"]; ?></div>
                    <hr>
                    <strike>R$ <?php echo $rows["preco"]; ?></strike><br>
                    <naty class="preço">R$ <?php echo $rows["precoFinal"]; ?></naty>
                </div>

            <?php
                }
            }
            else {
                echo "Nenhum produto cadastrado!";
            }
            
            ?>
        
        </section>

        <!-- <a class= "link" href="consulta_produtos.php"><h5>Consulte a lista de todos os produtos</h5></a> -->
        
        <?php
    
            include('footer.html');

        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        
    </body>
</html>



