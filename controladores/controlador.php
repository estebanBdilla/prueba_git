<?php
class MVController{
    #<-----------bloque de llamada de plantilla---------------->
    public function plantilla()
{
    #include se utiliza para invocar el archivo que contiene codigo html 
    include "vistas/plantilla.php";
}
#<-----------bloque de interaccion del usuario---------------->
public function enlacespaginacontrolador()
{
    if(isset($_GET["action"]))
{
    $enlacescontrolador = $_GET["action"];
}else
{
    $enlacescontrolador="index.php";
}   
    # Los :: es para heredar 
    $respuesta = Enlacepaginas::enlacespaginasmodelo($enlacescontrolador);
     include $respuesta;
}
}
?>