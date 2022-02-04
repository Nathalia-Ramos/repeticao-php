<?php 

    $valor= (int) 0;
    $cont = (int) 0;
    $resultado = (string) null;

    if(isset($_POST['btnCalc'])) {
      
        $valor = $_POST['txtNum'];
        //Exemplo de repetição utilizando o while

        // while($cont <= $valor){
        //     echo($cont. '<br>');
        //     $cont +=3;
        // }

        for($cont=0;$cont <=$valor;$cont+=3) {
           // echo($cont. '<br>');
           $resultado.= $cont.'<br>';
        }

    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmRepeticao" method="POST" action="index.php">
        Digite um numero: 
        <input type="text" name="txtNum">
        <input type="submit" name="btnCalc" value="calcular">  
    </form>
    <div>
        <br>
        <?=$resultado?>
    </div>
</body>
</html>