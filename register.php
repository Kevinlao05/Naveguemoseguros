<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-primary" role="alert">
                    <strong><?= $_SESSION['message']?></strong>
                    </div>
                <?php session_unset(); } ?>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!--- registro -->
                <form action="save.php" method="POST">
                    <div class="mb-4">
                        <label for="Nombres" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombres">
                    </div>
                    <div class="mb-4">
                        <label for="Apellidos" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="Apellidos">
                    </div>
                    <div class="mb-4">
                        <label for="Email" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="Email">
                    </div>
                    <div class="mb-4">
                        <label for="Contraseña" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="Contraseña">
                    </div>
                    <div class="mb-4">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="Telefono">
                    </div>
                    <div class="mb-4">
                        <label for="Fecha" class="form-label">Contraseña</label>
                        <input type="date" class="form-control" name="Fecha">
                    </div>
                    <div class="mb-4">
                        <label for="Usuario" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" name="Usuario">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="Registrar">Registrar</button>
                    </div>

                    <div class="my-3">
                        <span>Ya tienes cuenta <a href="indexphp.php">Ingresa</a></span><br> 
                        
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>