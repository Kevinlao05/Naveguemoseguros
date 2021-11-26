<?php
include('conexion.php');


if  (isset($_POST['Ingresar'])) {
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];
    echo $usuario;
    echo $contraseña;
    $query = "SELECT * FROM Datos WHERE Usuario='$usuario' AND Contraseña = '$contraseña'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        
        echo 'Consulta Correcta';
    }else{
        echo 'Registro no hallado';
    }
  }

  
  
?>