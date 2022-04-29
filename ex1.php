<?php
$sorteio = rand(0,4);
switch($sorteio){
    case 1: 
        echo "Número um, você tirou Marcelo, ladrão, meio fraco mas fofo e engraçado";
        break;
        case 2:
        echo "Número dois, você tirou Nat, fofa e simpática";
        break;
        case 3: 
        echo "Número três, você tirou Maju, durona mas uma amor";
        break; 
        case 4:
        echo "Número quatro, você tirou Raphaela, a única normal do grupo, legal e pata do Marcelo";
        break; 

        default: //comparar ao else estrutura if
        echo "Número zero, você tirou Luiza, um amor e delicada"; 
        break;
}