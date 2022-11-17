<?php 

    namespace Users;
    class CampoContraseña extends Campo
    {
     
        public function validar()
        {
            parent::validar();
            $fullRegex = "/" . $this->regex . "{" . $this->minLength . "," . $this->maxLength . "}/";
            if (!preg_match($fullRegex, $this->contraseña)) {
                parent::$errores[$this->contraseña] = " La contraseña tiene que tener de " . $this->minLength . " a " . $this->maxLength . " caracteres";
            }
        }
        public function printPassword()
        {
            if ($this->validarCampos()) {
                $this->setValue($_POST[$this->name]);
            }
            return  <<<EOD
            <input type="password" name="pass" id="pass"placeholder="Contraseña (8-64 caracteres,debe incluir letras y numeros)"><br>
            <input type="password" name="reppass" id="reppass" placeholder="Repita su contraseña"><br>
            EOD;
            //mistake($_POST["pass"]);
        }
    }

?>