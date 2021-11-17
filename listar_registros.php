    <?php
    $conexao= new mysqli('127.0.0.1:3312', 'root', '', 'teste');

    if($conexao->connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") ". $mysqli->connect_error;
    };

   
    $sql_code="SELECT * FROM tabteste";
    $res = mysqli_query($conexao, $sql_code);

    $rows = mysqli_affected_rows($conexao);

    $consulta = "SELECT * FROM tabteste";
    $con = $conexao->query($consulta) or die ($mysqli->error);
  
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/list.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de registros</title>
</head>
<body>
    <center>
    <table>
        <tr class="label">
            <th>Código</th>
            <th>Login</th>
            <th>Senha</th>
        </tr>
    <?php 
          while($data = $con->fetch_array()){  ?>

    <tr>
       <td><?php echo $data["codigo"]; ?></td>
       <td><?php echo $data["login"]; ?></td>
       <td><?php echo $data["senha"]; ?></td>
    </tr>;
    <?php 
    } ?>
        </table>
        <div>
            <button class="btn" id="btn3" type='button' onClick='window.history.back();'>Voltar</button>
        </div>    
    </center>
</body>
</html>