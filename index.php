<?php
#En el index mostraremos las salidas de las vistas al usuario y tambien
#a traves de el enviaremos las distintas acciones que el usuario envie al controlador

#require) establece que el codigo del archivo invocado es requerido es decir,
# obligatorio para el funcionamiento del programa por ello,
#el archivo especificado de la funcion require() no se encuentra, saltara un error 
#"php fatal error" y el programa php no se detendra

#la version require_once() funciona de la misma forma que sus respectivo, salvo que 
#al utilizar la version_once, se impide la carga de un mismo archivo ,as de una vez.

#si requerimos el mismo codigo mas de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

require_once "controladores/controlador.php";
require_once "modelos/modelo.php";
$mvc = new MVController();
$mvc -> plantilla();

?>