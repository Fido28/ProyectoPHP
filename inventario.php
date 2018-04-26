<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inventario</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(230,80,144);
   color: white;
   text-align: center;
}
</style>
  </head>
  <body class="text-center">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-pink">
  <div class="collapse navbar-collapse" id="navbarEjemplo">
        <a class="nav-link" href="#">
<h1 class="h3 mb-3 font-weight-normal" class="text-center">Inventario</h1>
        </a>
  </div>
</nav>

<div>
  <?php
    require "queries.php";
      selectProducto();


  ?>

</div>


    <div class="footer">
  <p color="backgroun-color:#f00"; color="#fff">&copy; Calle Benito Juarez # 23 Col. Iturbide, Uriangato Gto
123-456-78-90 Facebook: Girls Twitter: @girls</p>
</div>
  </body>
</html>
