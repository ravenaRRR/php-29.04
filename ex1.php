<?php
$sorteio = rand(0,4);
switch($sorteio){
    case 1: 
        echo "Número um, você tirou Marcelo, ladrão, meio fraco mas fofo e engraçado";
        break;
        echo "Número dois, você tirou Nat, fofa e simpática";
        break;
        echo "Número três, você tirou Maju, durona mas uma amor";
        break; 
        default: //comparar ao else estrutura if
        echo "Número quatro, você tirou Luiza, um amor e delicada"; 
        break;
}