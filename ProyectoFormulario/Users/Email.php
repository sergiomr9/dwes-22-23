<?php 

    namespace Users;
    class Email extends User
    {
        public function printEmail()
        {
            $mail = <<<EOD
                <h3 class="tit">Direccion mail <span class="requerido">*</span></h3>
                <input type="email" name="mail" id="mail" placeholder="Correo electronico (e.g correo@gmail.es)" style="width: 90%;" value="<?=$this->email?>">
                <p class="recmail">Les recomendamos no utilizar los siguientes proveedores de correos: T-Online, Hotmail, live, Msn y Outlook dado que hay problemas a la hora de recibir nuestros emails en estos correos.</p>
            EOD;
            //mistake($_POST["email"]);
        }
    }

?>