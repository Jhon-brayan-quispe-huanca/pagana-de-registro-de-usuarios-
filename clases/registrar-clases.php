<?php
include_once "conexionDB.php";

class Registrar extends ConexionDB {
   public function agregarUsuario($user, $pwd, $email) {
       $consulta = "INSERT INTO usuarios(usuario, pass, email) VALUES(?,?,?)";
       $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
       $query = $this->conectar()->prepare($consulta);
       
       // Ejecutar la consulta y manejar errores
       if (!$query->execute(array($user, $hashPwd, $email))) {
           $query = null;
           header('location: ../index.php?error=sentenciafallida');
           exit;
       }
       
       $query = null; // Cerrar la consulta
   }

   protected function checkUsuario($usuario, $correo) {
       $consulta = "SELECT usuario FROM usuarios WHERE usuario = ? OR email = ?";
       $query = $this->conectar()->prepare($consulta);
       
       // Ejecutar la consulta y manejar errores
       if (!$query->execute(array($usuario, $correo))) {
           $query = null;
           header('location: ../index.php?error=sentenciafallida');
           exit;
       }
       
       $resultado = ($query->rowCount() > 0) ? false : true;
       $query = null; // Cerrar la consulta
       
       return $resultado;
   }
}
?>