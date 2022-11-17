<?php
    namespace Users;
    class campo
    {
        //array de campos
        private $name;
        private $value;
        private $regex;
        private $placeholder;
        
        public function __construct($name,$value,$regex,$placeholder)
        {
            $this->name = $name;
            $this->value = $value;
            $this->regex = $regex;
            $this->placeholder = $placeholder;
        }
        public function printCampos()
        {
            if ($this->validarCampos()) {
                $this->setValue($_POST[$this->name]);
            }
            return <<<EOD
            <h3 class="tit">Nombre <span class="requerido">*</span></h3>
            <input type="text" name="$this->name" id="nombre" placeholder="$this->placeholder" value="$this->value" pattern="$this->regex">
            EOD;
        }
        public function validarCampos():bool {
            return $this->validar($this->getName())&&preg_match($this->getRegex(),$_POST[$this->name]);
            //parent::$errores[$this->nombre] = $this->nombre . "No cumple con el patrón del campo";
        }

        public function validar($var): bool
        {
            return isset($_POST[$var]);
        }
        
        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of value
         */ 
        public function getValue()
        {
                return $this->value;
        }

        /**
         * Set the value of value
         *
         * @return  self
         */ 
        public function setValue($value)
        {
                $this->value = $value;

                return $this;
        }

        /**
         * Get the value of regex
         */ 
        public function getRegex()
        {
                return $this->regex;
        }

        /**
         * Set the value of regex
         *
         * @return  self
         */ 
        public function setRegex($regex)
        {
                $this->regex = $regex;

                return $this;
        }

        /**
         * Get the value of placeholder
         */ 
        public function getPlaceholder()
        {
                return $this->placeholder;
        }

        /**
         * Set the value of placeholder
         *
         * @return  self
         */ 
        public function setPlaceholder($placeholder)
        {
                $this->placeholder = $placeholder;

                return $this;
        }
    }
?>