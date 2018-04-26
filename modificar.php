<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: green;
   color: white;
   text-align: center;
}
</style>
  </head>
  <body class="text-center" style="backgroun-color:violet">
    <form class="form-login" action="">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="collapse navbar-collapse" id="navbarEjemplo">
              <a class="nav-link" href="#">
      <h1 class="h3 mb-3 font-weight-normal">Modificar Producto</h1>
      </a>
      </div>
      </nav>
<!-- /       <img src="img/dybala.jpg" width="72" height="72" class="mb-4" alt=""> -->


<label for="codigo" class="sr-only">Codigo::</label>
<input type="codigo" id="codigo" class="form-control" placeholder="codigo" required autofocus>
<label for="descripcion" class="sr-only">Descripción:</label>
<input type="descripcion" id="descripcion" class="form-control" placeholder="Descripción" required autofocus>
<label for="cantidad" class="sr-only">Cantidad:</label>
<input type="cantidad" id="cantidad" class="form-control" placeholder="Cantidad" required autofocus>
<label for="precio" class="sr-only">Precio:</label>
<input type="precio" id="precio" class="form-control" placeholder="Precio" required>
<div class="checkbox mb-3">
  <label for="checkbox">
<!--/ <input type="checkbox" value="Recuerdame">Recuerdame -->
  </label>

</div>
<button type="submit" class="btn btn-lg btn-success btn-block">Aceptar</button>

    </form>
    <div class="footer">
  <p color="backgroun-color:#f00"; color="#fff">&copy; Calle Benito Juarez # 23 Col. Iturbide, Uriangato Gto
123-456-78-90 Facebook: Girl`s Twitter: @girls</p>
</div>
  </body>
</html>
