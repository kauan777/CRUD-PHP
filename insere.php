<?php 

$conexao= new mysqli('127.0.0.1:3312', 'root', '', 'teste');

if($conexao->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") ". $mysqli->connect_error;
};

$vlogin=$_POST['txtlogin'];
$vsenha=$_POST['txtsenha'];

$sql_code= "SELECT * FROM tabteste WHERE login='$vlogin'";

$res = mysqli_query($conexao, $sql_code);

$rows = mysqli_affected_rows($conexao);

if($rows == 1){
    echo "<script language=javascript> window.alert('Esse nome já foi cadastrado!!!');</script>";
}else{
    $sql_code="INSERT INTO tabteste(codigo,login,senha)VALUES(default,'$vlogin','$vsenha')";
    $res = mysqli_query($conexao, $sql_code);
    echo "<script language=javascript> window.alert('Cadastro efetuado com sucesso!!!'); </script>";
};

    mysqli_close($conexao);
    echo "<script language=javascript>window.location.href='insere.html';</script>";
   
  
?>