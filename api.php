<?php
    echo "Hola Mundo";
    echo <<<HTML
        Hola Mundo<br> <a href="index.html" target="_blank">Volver</a> <br>
    HTML; 

    var_dump($_GET); /** Muestra los datos obtenidos por GET */
    /**
     * GET: se usar para cuando se necesita obtener un valor
     * Get: superglobal que se utiliza para recopilar datos enviados a través de una solicitud HTTP utilizando el método GET
     */
    echo "<br>";
    var_dump($_POST); /** Muestra los datos obtenidos por POST */
    /**
     * Esto se utiliza para hacer bloques de codigo para no usar la tediosa forma se hacer cosas como concatenaciones u otro metodos
     * $_POST es una superglobal que se utiliza para recopilar datos enviados a través de una solicitud HTTP utilizando el método POST. Cuando se envía un formulario HTML con el método POST, los datos se envían al servidor en el cuerpo de la solicitud HTTP, en lugar de ser parte de la URL como ocurre con el método GET
    */
    echo "<br>difes<br>";

?>