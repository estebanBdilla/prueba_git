<?php
 class Enlacepaginas{
     #colocar public static function ayuda a solucionar el proble de llamar clases staticas , obsoleto
    public static function  enlacespaginasmodelo($enlacesmodelo){
        if($enlacesmodelo == "nosotros"||
         $enlacesmodelo =="servicios"||
         $enlacesmodelo =="inicio"|| 
         $enlacesmodelo=="contactenos")#con la condicional if se configura la lista blanca de sitios permitidos
         {
            $module ="vistas/modulos/".$enlacesmodelo.".php";
        }
        else if($enlacesmodelo =="index.php")
        {
            $module ="vistas/modulos/inicio.php";
        }
        else#En esta aprte de else se redirije para no permitir sitios diferentes alos de la lista blanca
        {
            $module ="vistas/modulos/inicio.php";
        }
        return $module;
     }
 }
?>