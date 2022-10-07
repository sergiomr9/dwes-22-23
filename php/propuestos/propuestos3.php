<?php
//XIN, MARCOS
$usuarios = [
    "jorge" => "1234",
    "amparo" => "admin",
    "mary" => ""
];
//ENUNCIADO A)
function escribir($item,$key,$prefix){
    echo "$prefix.' '.$key. $item";
    echo "\ln";
}
function alterar(&$item,$key){
    $item = password_hash($item,PASSWORD_DEFAULT);
}
array_walk($usuarios,'alterar');
array_walk($usuarios,'escribir');
//ENUNCIADO B)
for ($i=0; $i < count($usuarios); $i++) { 
    if ($usuarios[$i]=="") {
        $remplazo = array($i => "tmp2022");
        array_replace($usuarios,$remplazo);
    }
}
print_r($usuarios);

//Arturito
$a1=array("a"=>"rojo");
$a2=array("b"=>"añil", "c"=>"violeta");
$a3=array("d"=>"verde","f"=>"naranja");
$a4=array("i"=>"azul");
$a5=array("g"=>"azul", "h"=>"blanco");

$resultado = array_merge($a1,$a3,$a4);
print_r($resultado);

//MARIO, JASON, DANIEL
    // array_sum array_push
$productos = [
    "naranja" => 1.2,
    "manzana" => 1.5,
    "pera" => 1.8,
    "platano" => 0.8,
    "kiwi" => 0.75,
    "macarrones" => 0.5,
    "arroz" => 0.75,
    "salchichas" => 1,
    "patatas_fritas" => 3,
    "paninis" => 1.5,
    "leche_6_uds" => 5,
    "pizza_jamon_serrano" => 2.59,
    "helado_chocolate" => 2.99
];

?>