<?php
include_once ('Database.php');

$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];

$query = $conn->prepare("SELECT * FROM usuariologin
    WHERE email = :email AND password = :pass");
$query->bindParam(":email",$email);
$query->bindParam(":pass",$pass);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);
//echo($usuario['']);
if ($usuario) {
    $_SESSION['email'] = $usuario["email"];
    header("location:http://localhost\ActividadLogin\pagInicio.php");
} else {
    $msg = "Email o contraseña no validos";
    $aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);
    $pahtOrigin = $aPahtOrigin[0];
    var_dump($aPahtOrigin);
    header("Location: $pahtOrigin?msg=$msg");
}
?>