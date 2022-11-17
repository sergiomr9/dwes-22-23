<?php 

    namespace Users;
    class Fecha extends User{
        public function printFecha()
        {
            $date = <<<EOD

            <h3 class="tit">Fecha de nacimiento <span class="requerido">*</span></h3>
            <input type="date" name="fecha" id="fecha" style="width:90%;padding:5px">

            EOD;
            //mistake($_POST["fecha"]);
        }
    }

?>