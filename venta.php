
<!DOCTYPE html>
<html>
<head>
	<title >Punto de venta</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo2.css">
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body style="background-color:#f5f5f5;">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a href="#" class="navbar-brand">
			<img src="img/logo.jpg" alt="LOGO" width="60" height="60">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse"
		 data-target="#navbarEjemplo" aria-controls="navbarEjemplo" 
		 aria-expanded="false" aria-label="navegacion" >
		 	<span class="navbar-toggler-icon"></span>
		 </button>
		 <div class="collapse navbar-collapse" id="navbarEjemplo">
		 	<ul class="navbar-nav mr-auto">
		 		<li class="nav-item ">
		 			<a class="nav-link" href="#">
		 			Inicio
		 				<span class="sr-only">(Current)</span>
		 			</a>
		 		</li>
				<li class="nav-item">
		 			<a class="nav-link" href="realizarVenta.php">
		 			Realizar venta
		 			</a>
		 		</li>
		 		<li class="nav-item">
		 			<a class="nav-link" href="agregar.php">
		 			Ver inventario
		 			</a>
		 		</li>
		 	</ul>
		 </div>
	</nav> <--Cierra la barra de navegacion-->

	<main role="main">
		<div class="jumbotron"> 
			<div class="container">
				<h1 class="display-3"><b>Girl`s Merceria</b></h1>
				<p>
				La merceria Girl`s cuenta con una amplia gama de productos que ayudan a realizar cualquier tipo de prenda, desde un simple boton, un cierre o un alfiler, hasta rollos de tela de la mas alta calidad.
				y claro con los mejores precios de la region...

				</p>
				<p>
					<a href="#" class="btn btn-primary btn-lg" role="button">
						Mas informacion &raquo;
					</a>
				</p>
			</div><!--cierra container del la img principal-->
		</div><!-- Cierra jumbotron-->
			<div class="container">
			<h3><i>Estos son algunos de nuestros productos.. </i></h3>
				<div class="row">

					<div class="col-md-4" >
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/botones.jpg" alt="Producto" width="100px" height="200px">
							<p class="card-text">
									Botones
								</p>
						</div>
					</div><!-- col- md4-->

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/cinta.jpg" alt="Producto" width="100px" height="200px">	
							<p class="card-text">
									Cinta metrica
								</p>
						</div>
					</div><!-- col- md4-->

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/tijeras.jpg" alt="Producto" width="100px" height="200px">	
							<p class="card-text">
									Tijeras
								</p>
						</div>
					</div><!-- col- md4-->

				</div><!--Cierra 1 row-->
			<div class="row">

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/hilos.jpg" alt="Producto" width="100px" height="200px">
							<p class="card-text">
									Hilos
								</p>
						</div>
					</div><!-- col- md4-->

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/telas.jpg" alt="Producto" width="100px" height="200px">	
							<p class="card-text">
									Telas
								</p>
						</div>
					</div><!-- col- md4-->

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/blonda.jpg" alt="Producto" width="100px" height="200px">	
							<p class="card-text">
									Blonda
								</p>
						</div>
					</div><!-- col- md4-->

				</div><!--Cierra 2 row-->
							<div class="row">

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/pedreria.jpg" alt="Producto" width="100px" height="200px">
							<p class="card-text">
									Pedreria
								</p>
						</div>
					</div><!-- col- md4-->

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/agujas.jpg" alt="Producto" width="100px" height="200px">
							<p class="card-text">
									Agujas
								</p>	
						</div>
					</div><!-- col- md4-->

					<div class="col-md-4">
						<div class="card mb-4 box-shadow">
							<img class="card-img-top" src="img/listones.jpg" alt="Producto" width="100px" height="200px">	
							<p class="card-text">
									Listones
								</p>
						</div>
					</div><!-- col- md4-->

				</div><!--Cierra 3 row-->


			</div><!-- Cierr container d las tres columnas-->
			<hr>

	</main>
	<footer class="container">
		<p>&copy; Girl`s 2018</p>
	</footer>
</body>
</html>