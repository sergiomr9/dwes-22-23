<?php

    namespace Users;

    class CampoRadio extends Campo{

        public function printCampos():string{
        
            return '

            <div class="sex">
            <label for="H">Hombre</label>
            <input type="radio" name="'.$this->getName().'" id="H">
            <label for="M">Mujer</label>
            <input type="radio" name="'.$this->getName().'" id="M">
            <label for="O">Otro</label>
            <input type="radio" name="'.$this->getName().'" id="O">
            </div>
            ';
           // mistake($_POST["sexo"]);
        }
    }

?>