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
        public function __construct($nombre,$apellidos,$sexo,$fecha,$calle,$piso,$codigoPostal,$ciudad,$pais,$email,$usuario,$contraseña)
        {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->sexo = $sexo;
            $this->fecha = $fecha;
            $this->calle = $calle;
            $this->piso = $piso;
            $this->codigoPostal = $codigoPostal;
            $this->ciudad = $ciudad;
            $this->pais = $pais;
            $this->email = $email;
            $this->usuario = $usuario;
            $this->contraseña = $contraseña;
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
    }
    

?>