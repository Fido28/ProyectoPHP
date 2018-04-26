<?php
 
	if(isset($_POST["enviar"])) {
 
		require("conexion.php");
 
			$loginNombre = $_POST["usuario"];
			$loginPassword = $_POST["password"];
 
			$consulta = "SELECT * FROM users WHERE usuario='$loginNombre' AND password='$loginPassword'";
 
			if($resultado = $mysqli->query($consulta)) {
				while($row = $resultado->fetch_array()) {
 
					$userok = $row["usuario"];
					$passok = $row["password"];
				}
				$resultado->close();
			}
			$mysqli->close();
            
 
			if(isset($loginNombre) && isset($loginPassword)) {
 
				if($loginNombre == $userok && $loginPassword == $passok) {
 
					session_start();
					$_SESSION["logueado"] = TRUE;
					header("Location: venta.php");
 
				}
				else {
					Header("Location: index.php?error=login");
                }
            }
 
		} else {
			header("Location: index.php");
		}
 
 ?>