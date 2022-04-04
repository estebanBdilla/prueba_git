<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/style.css" href="style.css" media="screen"/>
    <title>plantilla</title>
</head>
<body>
    <header>
        <h1>LOGOTIPO</h1>
    </header>
    <?php
    include "modulos/navegacion.php";
    ?>
    <section>
<?php
$mvc= new MVController();
$mvc -> enlacespaginacontrolador();
?>
    </section>
</body>
</html>