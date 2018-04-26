<?php
//queries.php
require "conexionDB.php";

function insertPrueba($codigo,$descripcion,$cantidad,$precio) {
  $sql = "INSERT INTO productos(codigo,descripcion,cantidad,precio) VALUES(?,?,?,?)";
  echo $sql;
  $conexion = new ConexionDB();
  $con = $conexion->conectar();
  $query = $con->prepare($sql);
  $query->bind_param('isid',$codigo,$descripcion,$cantidad,$precio);
  $query->execute();
  //printf("%d Fila insertada. \n",$query->affected_rows);
  $query->close();
}//end-function insertPrueba

function selectProducto() {
  $sql = "SELECT * FROM productos";
  $conexion = new ConexionDB();
  $con = $conexion->conectar();
  $resultado = $con->query($sql);
  if ($resultado->num_rows > 0) {
    //Convertimos el resutlado de la consulta a un arreglo a sociativo
    echo '<table border="1"><tr>'
        .'<th>Id</th>'
        .'<th>Descripción</th>'
        .'<th>Cantidad</th>'
        .'<th>Precio</th>'
        .'</tr>';
    while ($row = $resultado->fetch_assoc()) {
      echo '<tr><td>'. $row["codigo"] .'</td><td>'
           .$row["descripcion"].'</td>'

           .'<td><a href="modificar.php?id='
           . $row["codigo"] . '">Modificar</a></td>'

           .'<td><a href="eliminarDatos.php'
           . $row["codigo"] . '">Eliminar</a></td>'

           .'</tr>';
    }
    echo "</table>";
  } else {
    echo "0 Resultados";
  }
$con->close();
}




?>


