<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("konverzija.wsdl");


function konverzijaBAMToEUR($yourValue){
  return $yourValue * 0.51 . " EUR";
}

$server->AddFunction("konverzijaBAMToEUR");
$server->handle();
?>