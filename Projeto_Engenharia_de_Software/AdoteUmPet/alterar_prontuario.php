<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$nome = filter_input(INPUT_GET, "nome");
$porte = filter_input(INPUT_GET, "porte");
$descricao = filter_input(INPUT_GET, "descricao");
$doença = filter_input(INPUT_GET, "doença");
$vacinas = filter_input(INPUT_GET, "vacinas");

$connect = new mysqli($server, $username, $password, $db);
if(!$connect){
    die("Connection Failed". mysqli_connect_error());
}
$sql = "UPDATE prontuario SET nome='$nome', porte='$porte', descricao='$descricao', doença='$doença', vacinas='$vacinas' WHERE porte='$_GET[porte]'";
$result = mysqli_query($connect, $sql);
if(!$result){
    echo"houve um erro";
    die("Erro:" . mysqli_error($sql));
}
else{
    echo"Alterado com sucesso";
}
?>
<form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>
