<!DOCTYPE html>
<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p id="formulario">FORMULÁRIO PARA COMPETIÇÕES DE COMPETIDORES</p>
    <form id="form" action="script.php" method="post">
        <?php
            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if (!empty($mensagemDeErro)){
                echo '<p id="p1">'.$mensagemDeErro.'</p>';
            }
  
        ?>
        <div id = "p2">
            <p>Seu nome:<input type="text" name="nome"></p>
            <p>Sua idade: <input type="text" name="idade"></p>
            <p><input type="submit" value="ENVIAR DADOS"></p>
        </div>
    </form>

</body>
</html>
