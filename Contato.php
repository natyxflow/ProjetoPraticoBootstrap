<!DOCTYPE html>
<html lang="pt.br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Fullstack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <?php
    
        include('menu.html');

        ?>
        <div class="container">
            <br>
            <h2>Contato</h2>
        </div>
        <hr>


        <div class="container">
            <table class="table table-borderless">
                <tr>
                <td>
                    <img src="./Imagens/email.png" width="60px">
                    contato@fullstackeletro.com
                </td>
                <td>
                    <img src="./Imagens/wzap.png" width="80px">
                    (11) 99999-9999
                </td>
                </tr>
            </table>
        </div><hr><br>

        <div class="container"><h5>Em caso de dúvidas, reclamações, elogios, sugestões, ou se quiser fazer um pedido, deixe uma mensagem pra gente!</h5 ></div><br><br>




        
            <form action="pedidos.php" method="post">
            <div class="container">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name= "nome" id="nome" class="form-control">
                </div>
             
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" name= "endereco" id="endereco" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name= "telefone" id="telefone" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="pedido">Pedido</label>
                    <input type="text" name= "pedido" id= "pedido" class="form-control">   
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name= "mensagem" id= "mensagem" class="form-control"></textarea>
                </div>
             
                <button type="submit" class="btn btn-danger mb-2">Enviar!</button>
             
             </div>
            </form>
        





        <!--<form class="container" action="pedidos.php" method="post">
            <h4>Nome:</h4>
            <input type="text" name= "nome" style="width: 400px;">
            <h4>Endereço:</h4>
            <input type="text" name= "endereco" style="width: 400px;">
            <h4>Telefone:</h4>
            <input type="text" name= "telefone" style="width: 400px;">
            <h4>Pedido:</h4>
            <input type="text" name= "pedido" style="width: 400px;">
            <h4>Mensagem:</h4>
            <textarea name= "mensagem"style=width:400px;></textarea>
            <input type="submit" value="Enviar">
        </form>-->

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