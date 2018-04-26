<?php
//conexiondb.php


class ConexionDB {
  protected $db_nombre = "merceria";
  protected $db_usuario = "root";
  protected $db_password = "root";
  protected $db_host = "localhost";
  
  public function conectar(){
    $conexion_db = new mysqli(
      $this->db_host,
      $this->db_usuario,
      $this->db_password,
      $this->db_nombre);
      //echo "Conectando...<br>";
    if (mysqli_connect_errno()) {
      printf("Error al crear la conexión con la base de datos: %s\ ",
        mysqli_connect_error());
        exit();
    } // end-if
    //echo "Conexión establecida. ";
    return $conexion_db;
  } // end-function

} //end-Class


?>
