<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $opera=$_POST['opera'];
    switch ($opera) {
        case 'suma':
            $p=$num1+$num2;
            $resultado="Resultado es: ".$p;
            break;
        case 'res':
            $p=$num1-$num2;
            $resultado="Resultado es: ".$p;
            break;
        case 'divi':
            $p=$num1/$num2;
            $resultado="Resultado es: ".$p;
            break;
        case 'mult':
            $p=$num1*$num2;
            $resultado="Resultado es: ".$p;
            echo "sdsd";
            break;
        default:
            echo "Opción no válida";
            break;
    }
    header("Location: frank.php?resultado=".$resultado);
    //header("Location: frank.php?resultado=1");
}
?>