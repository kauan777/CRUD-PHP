<?php 
$conexao= new mysqli('127.0.0.1:3312', 'root', '', 'teste');

if($conexao->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") ". $mysqli->connect_error;
};

$vcodigo=$_POST['txtcodigo'];

$sql_code= "SELECT * FROM tabteste WHERE codigo='$vcodigo'";

$res = mysqli_query($conexao, $sql_code);

$rows = mysqli_affected_rows($conexao);

if($rows == 1){
    $sql_code="DELETE FROM `tabteste` WHERE tabteste.codigo = '$vcodigo'";
    $res = mysqli_query($conexao, $sql_code);
    echo "<script language=javascript> window.alert('Excluido com sucesso!!!'); </script>";
    echo "<script language=javascript>window.location.href='listar_registros.php';</script>";

}else{
    echo "<script language=javascript> window.alert('Esse código não existe!!!');</script>";
    echo "<script language=javascript>window.location.href='excluir.html';</script>";
};
    mysqli_close($conexao);
?>


