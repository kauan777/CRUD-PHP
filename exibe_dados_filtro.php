<?php
    $conexao= new mysqli('127.0.0.1:3312', 'root', '', 'teste');

    if($conexao->connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") ". $mysqli->connect_error;
    };

    $vlogin=$_POST['txtlogin'];
    $vsenha=$_POST['txtsenha'];


   
    $sql_code="SELECT * FROM tabteste WHERE login='$vlogin' and senha='$vsenha'";
    $res = mysqli_query($conexao, $sql_code);

    $rows = mysqli_num_rows($res);

    if($rows == 1){
        $con = $conexao->query($sql_code) or die ($mysqli->error);
    }else{
    echo "<script>window.alert('Não encontrado!')</script>";
    echo "<script language=javascript>window.location.href='exibe_dados_filtro.html';</script>";
    };

  
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/list.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da consulta</title>
</head>
<body>
    <center>

    <table>

        <tr class="label" >
        <th>Código</th>
        <th>Login</th>
        <th>Senha</th>
    </tr>
    <?php 
          while($data = $con->fetch_array()){  ?>

    <tr style='border:2px solid rgb(0,0,0)'>
       <td><?php echo $data["codigo"]; ?></td>
       <td><?php echo $data["login"]; ?></td>
       <td><?php echo $data["senha"]; ?></td>
    </tr>;
    <?php 
    } ?>
        </table>
        <br/>
        <br/>
        <form>
        
        <button class="btn" id="btn3" type='button'onClick='window.location.href="index.html"'>Voltar</button>
        </form>
        </center>
</body>
</html>