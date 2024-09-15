<?php 
if(count($_POST) > 0) {

// 1. pegar os valores do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];
// 2. conexão com banco de dados 
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=sistema_pedidos", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  // 3. verificar se email e senha estão no BD
  $consulta = $conn->prepare("SELECT id FROM user WHERE email=:email AND senha=md5(:senha)");
  $consulta->bindParam(':email', $email, PDO::PARAM_STR);
  $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
  $consulta->execute();

  // set the resulting array to associative
  $result = $stmt->fetchAll();
  $qtd_users = (count($result));
  if($qtd_users == 1) {
    //TODO substituir pelo redirecionamento...
    $resultado["msg"] = "Usuário encontrado";
    $resultado["cod"] = 1;
  } else if ($qtd_users == 0) {
    $resultado["msg"] = "Email e senha não conferem";
    $resultado["cod"] = 0;
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

}
include("index.php");

?>


