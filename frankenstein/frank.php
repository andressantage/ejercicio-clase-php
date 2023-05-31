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
            break;
        default:
            echo "Opción no válida";
            break;
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta type="button" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    body{
        background-color: black;
        color: white
    }
    input{
        height: auto;
        width: auto;
    } 
    </style>
</head>
<body>
    <form method="POST"> <!-- Se puede describir el metodo pero sino entonces por defecto se pondra como metodo GET -->
        <div class="container my-4" style="width: 25rem;">
          <div class="form-group">
            <label for="num1">Numero 1:</label>
            <input type="number" name="num1" class="form-control" id="num1" placeholder="Ingresa primer numero">
          </div>
          <div class="form-group">
            <label for="num2">Numero 2:</label>
            <input type="number" name="num2" class="form-control" id="num2" placeholder="Ingresa segundo numero">
          </div>
          <div class="form-group">
            <label for="seleccion">Selecciona una operacion a realizar:</label>
            <select class="form-control" name="opera" id="operar">
                <option value="suma">Sumar</option>
                <option value="res">Restar</option>
                <option value="divi">Dividir</option>
                <option value="mult">Multiplicar</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mb-4">Calcular</button>
        <div>
    </form>

        
        <?php  if(isset($resultado)){?>
            <h5><?php echo $resultado ?> </h5>
        <?php }?>
        </div>
      </div>
<!--         <table>
            <tr>
                <td><input class="btn btn-light" type="button" name="7" value="7"></td>
                <td><input class="btn btn-light" type="button" name="8" value="8"></td>
                <td><input class="btn btn-light" type="button" name="9" value="9"></td>
                <td><input class="btn btn-light" type="button" name="" value="÷"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="button" name="" value="4"></td>
                <td><input class="btn btn-light" type="button" name="" value="5"></td>
                <td><input class="btn btn-light" type="button" name="" value="6"></td>
                <td><input class="btn btn-light" type="button" name="" value="x"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="button" name="" value="1"></td>
                <td><input class="btn btn-light" type="button" name="" value="2"></td>
                <td><input class="btn btn-light" type="button" name="" value="3"></td>
                <td><input class="btn btn-light" type="button" name="" value="-"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="button" name="" value="."></td>
                <td><input class="btn btn-light" type="button" name="" value="0"></td>
                <td><input class="btn btn-light" type="button" name="" value="="></td>
                <td><input class="btn btn-light" type="button" name="" value="+"></td>
            </tr>
        </table>     -->
    
        <!-- <input type="text" type="button" name="nombre" placeholder="Nombre"><br>
        <input type="text" type="button" name="apellido" placeholder="Apellido"><br>
        <input type="text" type="button" name="edad" placeholder="Edad"><br> -->
    </form>    



    
</body>
</html>