<?php 

    namespace Users;
      class User extends \Users\GestorUsuarios 
    {
        //constantes
        const LNAME = 25;
        const LUSER = 15;
        const LPASS = 64;
        //ATRIBUTOS


        private static $errores = [];
        private array $campos;

        //CONSTRUCTOR
        public function __construct()
        {
            $this->campos ["nombre"] = new Campo('nombre',"","","NOMBRE");
            $this->campos ["apellidos"] = new Campo('apellidos',"","","APELLIDOS");
            $this->campos ["sexo"] = new CampoRadio("sexo","","","");
            //$this->campos ["fecha"] = new CampoFecha('fecha');
            $this->campos ["calle"] = new Campo("calle","","","CALLE");
            $this->campos ["piso"] = new Campo("piso","","","PISO");           
            $this->campos ["cp"] = new Campo('cp',"","","CODIGO POSTAL");       
            $this->campos ["ciudad"] = new Campo('ciudad',"","","CIUDAD");         
            $this->campos ["pais"] = new campo("pais","","","PAIS");          
            $this->campos ["email"] = new Campo('email',"","","EMAIL");          
            $this->campos ["user"] = new Campo('user',"","","INTRODUCE TU USUARIO");         
            $this->campos ["pass"] = new CampoContraseña('pass',GestorUsuarios::LPASS);

        }
        public function getCampos()
        {
            return $this->campos;
        }
        //METODOS

    
        public function isValid() {
            //return count(Input::getErrores()) == 0;
        }
       /* public function guardarUsuario(User $user)
        {
            file_put_contents(
                "./list.csv",
                $user->getNombre().",".
                $user->getApellidos().",".
                $user->getSexo().",".
                $user->getFecha().",".
                $user->getCalle().",".
                $user->getPiso().",".
                $user->getCodigoPostal().",".
                $user->getCiudad().",".
                $user->getPais().",".
                $user->getEmail().",".
                $user->getUsuario().",".
                $user->getContraseña().","."\n",
                FILE_APPEND
            );
        }*/
       
        public function print()
        {
            
              echo'  <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    <div class="cuerpo">
                        <div class="titulo">
                            <h1 class="tit">Registrarse</h1>
                            <p>Crea tu cuenta de usuario</p>
                        </div>
                        <hr class="tit">
                        <form action="" method="post">
                            <div class="humano">';
                                $this->campos["nombre"]->printCampos();
                               
                                $this->campos["apellidos"]->printCampos();
                     echo  '</div>';
                                $this->sexo->printSex();
                                $this->fecha->printFecha();
                    echo   '<div class="direccion">';
                                $this->campos["calle"]->printCampos();
                                $this->campos["piso"]->printCampos();
                                $this->campos["cp"]->printCampos();
                                $this->campos["ciudad"]->printCampos();
                                $this->campos["pais"]->printCampos();
                    echo    '</div>';
                                $this->campos["email"]->printCampos();
                    echo    '<div class="userpass">';
                                $this->campos["user"]->printCampos();
                                $this->campos["pass"]->printCampos();
                                $this->campos["repass"]->printCampos();
                    echo    '</div>';
                    echo    
                            '<input type="submit" value="Registrarse" class="enviar" name="enviar">
                    </form>
                    </div>
                </body>
                </html>';
            
        }
    }
    

?>
