<?php
class ConexionDB{
    public function conectar(){
        try{
            $username = "root";
            $password = "";
            $conexion = new PDO('mysql:host=localhost;dbname=agenciadb', $username, $password);
            return $conexion;

        }catch(PDOException $e){
                print "Error: " .$e->getMessage()."<br>";
                die();

            }
        }
    }
