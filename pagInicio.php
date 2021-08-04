<?php
/*session_start();

if (!$_SESSION) {
    header("location: http://localhost/clases_php/atividadclase/loginpoo.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Seccion iniciada, Hola 
    <?php echo $_SESSION['email'];?>
    </h1>
    <!-- BOTON DENTRO DE UN FORM PARA CERRAR SESION https://www.w3schools.com/php/php_sessions.asp-->
    <form class="form-signin" action="logout.php" method="POST">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Cerrar sesion</button>
    </form>

</body>
</html>