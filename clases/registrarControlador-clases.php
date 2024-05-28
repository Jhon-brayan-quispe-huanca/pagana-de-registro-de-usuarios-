<?php

class RegistrarCont extends Registrar{
    private $usuario;
    private $pwd;
    private $pwdrepeat;
    private $email;
    
    public function __construct($user,$pass,$passrepeat,$correo)
    {
        $this->usuario = $user;
        $this->pwd = $pass;
        $this->pwdrepeat = $passrepeat;
        $this->email = $correo;
    }
    
    public function RegistrarUsuario(){
        if($this->entradaVacia()==false){
            header('Location: ../index.php?error=entradaVacia');
            exit();
        }
        if($this->usuarioNoValido()==false){
            header('Location: ../index.php?error=simbolosNoPermitidos');
            exit();
        }

        if($this->emailInvalido()==false){
            header('Location: ../index.php?error=emailInvalido');
            exit();
        }

        if($this->passMatch()==false){
            header('Location: ../index.php?error=contraseñasDistintas');
            exit();
        }
        
        if($this->usuarioExiste()==false){
            header('Location: ../index.php?error=usuarioExistente');
            exit();
        }
        $this->agregarUsuario($this->usuario, $this->pwd,$this->email);
    }

    private function entradaVacia(){
        if(empty($this->usuario)||empty($this->pwd)||empty($this->pwdrepeat)||empty($this->email)){
            $rpta = false;
        } else {
            $rpta = true;
        }
        return $rpta;
    }

    private function usuarioNoValido(){
        if(!preg_match('/^[a-zA-Z0-9]*$/',$this->usuario)){
            $rpta = false;
        } else {
            $rpta = true;
        }
        return $rpta;
    }

    private function emailInvalido(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $rpta = false;
        } else {
            $rpta = true;
        }
        return $rpta;
    }

    private function passMatch(){
        if($this->pwd !== $this->pwdrepeat){
            $rpta = false;
        } else {
            $rpta = true;
        }
        return $rpta;
    }

    private function usuarioExiste(){
        if(!$this->checkUsuario($this->usuario,$this->email)){
            $rpta = false;
        } else {
            $rpta = true;
        }
        return $rpta;
    }
}
