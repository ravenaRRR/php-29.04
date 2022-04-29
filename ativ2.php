<?php

$numero = $_GET['numero']; 
$operacao = $_GET['operacao'];


switch($operacao){
    case 1:
      echo $numero * 2;
        break;

        case 2:
          echo  $numero + 10;
            break;

            case 3:
            echo pow($numero,2);
                break;

                default: 
               echo "o número é, $numero"; 
            break;
}
?>