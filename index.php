<?php
 
if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: index.php");
	}
 
 ?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de secion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    
</head>
<body>
    <nav class="navbar-default" role="navigation">
        <div class="container-fluid">
            <!--agregamos header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="index.php" style="font-family:'Lobster', cursive;">Inicio</a>
            </div>
            <!-- menu de los objetos -->
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form role="form" action='login.php' method="post">
                    <fieldset>
                        <legend>Login</legend>
                        <!-- <div class="form-group clearfix"><img src="" alt=""></div> -->

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Ingresar Usuario" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Constraseña</label>
                            <input type="password" class="form-control" name="password" placeholder="Ingresar contraseña" required class="form-control"> 
                        </div>

                        <div class="form-group">
                            <input type="submit" name="enviar"  class="btn tb-primary">
                            <input type="reset" value="Limpiar" class="btn btn-default"> 
                        </div>
                    </fieldset>
                </form>
                <span class="text-danger"><?php if (isset($errormsg)) {echo $errormsg;} ?> </span>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>