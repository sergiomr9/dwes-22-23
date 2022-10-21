<?php
    class CuentaBancaria
    {
        //atributos
        private static $num = 10001;
        public $numeroCuenta;
        public $nombre;
        public $saldo;

        //constructores
        public function __construct($nombre ='anonimo', $saldo=0){ 
            $this->numeroCuenta = self::$num;
            CuentaBancaria::$num++;
            $this->nombre = $nombre;
            $this->saldo = $saldo;
        }

        //setter
        public function setNumeroCuenta(float $numeroCuenta){
            $this->numeroCuenta = $numeroCuenta;
        }
        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        public function setSaldo(float $saldo){
            $this->saldo = $saldo;
        }

        //getter
        public function getNumeroCuenta():float{
            return $this->numeroCuenta;
        }
        public function getNombre():string{
            return $this->nombre;
        }
        public function getSaldo():float{
            return $this->saldo;
        }


        //metodos
        public function ingresar(float $ingreso): float {
            //Ingresa dinero en la cuenta
            $this->saldo += $ingreso;
            return $this->saldo;
        }
        public function retirar(float $retirada): float{
            //Saca dinero de la cuenta
            $this->saldo -= $retirada;
            return $this->saldo;
        }
        public function saldo(): float{
            //Muestra el saldo de la cuenta
           return $this->saldo;
        }

       public function transferirA(CuentaBancaria $CuentaBancaria,float $cantidad){
            $CuentaBancaria->saldo+=$cantidad;
            $this->saldo -= $cantidad;
       }

       public function unirCon( CuentaBancaria $CuentaBancaria){
            $this->saldo += $CuentaBancaria->saldo();
            $CuentaBancaria->setSaldo(0);
            $CuentaBancaria->bancarrota();
            
       }

       public function bancarrota(){
        $saldo = 0;
        $this->numeroCuenta-=1;
       }
       public function mostrar(){
        echo "numero de cuenta: $this->numeroCuenta<br> nombre: $this->nombre<br> saldo: $this->saldo<br>";

       }
    }
    
?>