<?php
    namespace Users;
    class User extends \Users\GestorUsuarios
    {
        //ATRIBUTOS
        private $nombre;//nombre real del usuario
        private $apellidos;//apellidos del usuario
        private $sexo;//sexo del usuario
        private $fecha;//fecha de nacimiento
        private $calle;//calle onde vive el usuario
        private $piso;//piso de la calle del usuario
        private $codigoPostal;//codigo postal
        private $ciudad;//ciudad donde vivde el usuario
        private $pais;//pais de residencia
        private $email;//correo electronico de registro
        private $usuario;//nombre de usuario de registro
        private $contraseña;//contraseña de registro

        //CONSTRUCTOR
        public function __construct($formulario)
        {
            //$this->nombre = $nombre;
            $this->nombre = new Texto('nombre', 30);
            //$this->apellidos = $apellidos;
            $this->apellidos = new Texto('apellidos', 30);
            //$this->sexo = $sexo;
            $this->sexo = new Sexo();
            //$this->fecha = $fecha;
            $this->fecha = new Fecha();
            //$this->calle = $calle;
            $this->calle = new Texto('nombre', 80);
            //$this->piso = $piso;
            $this->piso = new Texto('piso',5);
            //$this->codigoPostal = $codigoPostal;
            $this->codigoPostal = new Texto('cp',8);
            // $this->ciudad = $ciudad;
            $this->ciudad = new Texto('ciudad',30);
            //$this->pais = $pais;
            $this->pais = new Pais();
            //$this->email = $email;
            $this->email = new Email('email');
            //$this->usuario = $usuario;
            $this->usuario = new Texto('user',18);
            //$this->contraseña = $contraseña;
            $this->contraseña = new Contraseña('pass',18);
        }

        //Setter
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function setCalle($calle){
            $this->calle = $calle;
        }
        public function setCodigoPostal($codigoPostal){
            $this->codigoPostal = $codigoPostal;
        }
        public function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }
        public function setPiso($piso){
            $this->piso = $piso;
        }
        public function setPais($pais){
            $this->pais = $pais;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function setContraseña($contraseña){
            $this->contraseña = $contraseña;
        }

        //Getter
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getFecha(){
            return $this->fecha;
        }
        public function getCalle(){
            return $this->calle;
        }
        public function getPiso(){
            return $this->piso;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getCodigoPostal(){
            return $this->codigoPostal;
        }
        public function getCiudad(){
            return $this->ciudad;
        }
        public function getPais(){
            return $this->pais;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function getContraseña(){
            return $this->contraseña;
        }

        public function __toString()
        {
            return $this->nombre;
        }

        //metodos

        public function validar(){
            if (!empty($_POST["nombre"])) {
                $this->nombre = Validar::cleanData($_POST["nombre"]);
            } elseif(empty($_POST["nombre"])){
                $errores["nombre"] = "El nombre no puede estar vacio";
            }
            //apellidos
            if (!empty($_POST["apellidos"])) {
                $this->apellidos = Validar::cleanData($_POST["apellidos"]);
            } else{
                $errores["apellidos"] = "El apellido no puede estar vacio";
            }
            //sexo
            if (!empty($_POST["sexo"])) {
                $this->sexo = Validar::cleanData($_POST["sexo"]);
            } else{
                $errores["sexo"] = "Marca tu sexo";
            }
            //fecha
            if (!empty($_POST["fecha"])) {
                $this->fecha = Validar::cleanData($_POST["fecha"]);
            } else{
                $errores["fecha"] = "La fecha de nacimiento no puede estar vacia";
            }
            //calle
            if (!empty($_POST["calle"])) {
                $this->calle = Validar::cleanData($_POST["calle"]);
            } else{
                $errores["calle"] = "La calle no puede estar vacia";
            }
            if (!empty($_POST["piso"])) {
                $this->piso = Validar::cleanData($_POST["piso"]);
            } else{
                $errores["piso"] = "el piso no puede estar vacio";
            }
            //Codigo Postal
            if (!empty($_POST["cp"])) {
                $this->codigoPostal = Validar::cleanData($_POST["cp"]);
            } else{
                $errores["cp"] = "El Código Postal no puede estar vacio";
            }
            //ciudad
            if (!empty($_POST["ciudad"])) {
                $this->ciudad = Validar::cleanData($_POST["ciudad"]);
            } else{
                $errores["ciudad"] = "La ciudad no puede estar vacia";
            }
            //pais
            if (!empty($_POST["pais"])) {
                $this->pais = Validar::cleanData($_POST["pais"]);
            } else{
                $errores["pais"] = "El pais no puede estar vacio";
            }
            //correo electronico
            if (!empty($_POST["mail"])) {
                $this->email = Validar::cleanData($_POST["mail"],Validar::MAIL);
                if (!isset($email)) {
                    $errores["mail"] = "El correo introducido no es un correo válido";
                }
            } else{
                $errores["mail"] = "El correo electronicop no puede estar vacio";
            }
            //usuario
            if (!empty($_POST["user"])) {
                $this->usuario = Validar::cleanData($_POST["user"],Validar::USER);
                if (!isset($usuario)) {
                    $errores["user"] = "El usuario tiene que tener de 3 a 15 caracteres";
                }
            } else{
                $errores["user"] = "El nombre de usuario no puede estar vacio";
            }
            //contraseña
            if (!empty($_POST["pass"])) {
                $this->contraseña = Validar::cleanData($_POST["pass"],Validar::PASSWORD);
                if (!isset($contraseña)) {
                    $errores["pass"] = "La contraseña tiene que tener como mínimo 8 caracteres y máximo 64";
                }
            } else{
                $errores["pass"] = "La contraseña no puede estar vacia";
            }
    
            // Recuento de errores
            if(count($errores) == 0) {
                // Guardo
                file_put_contents(
                    "lista.csv",
                    "$this->nombre;$this->apellidos;$this->sexo;$this->fecha;$this->calle;$this->piso;$this->codigoPostal;$this->ciudad;$this->pais;$this->email;$this->usuario;$this->contraseña\n",
                    FILE_APPEND
                );
                // redirect
            }
        }
        public function esValido(){
            global $errores;
            if ($errores == 0) {
                return true;
            }else {
                return false;
            }
        }
        public function guardar(){
            file_put_contents(
                "lista.csv",
                "$this->nombre;$this->apellidos;$this->sexo;$this->fecha;$this->calle;$this->piso;$this->codigoPostal;$this->ciudad;$this->pais;$this->email;$this->usuario;$this->contraseña\n",
                FILE_APPEND
            );
        }
        public function pintar(){

        }
        
    }
    

?>