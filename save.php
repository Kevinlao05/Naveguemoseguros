<?php

include ("conexion.php");

if (isset($_POST['Registrar'])){

$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$correo = $_POST['Email'];
$contraseña = $_POST['Contraseña'];
$tel = $_POST['Telefono'];
$fecha = $_POST['Fecha'];
$usuario = $_POST['Usuario'];

$query = "INSERT INTO Datos VALUES(

    '$nombre',    
    '$apellido',
    '$correo',
    '$contraseña',
    '$tel',
    '$fecha',
    '$usuario'

)"; 

$result = mysqli_query($conn,$query);

if(!$result){
    die("Query failed");
}

header('Location: indexphp.php');

}

?>