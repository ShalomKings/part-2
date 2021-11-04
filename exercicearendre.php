<?php
/** ecrire un script qui définit les fonctions suivantes:
 * - qui initialise un tableau d'entier
 * - qui affiche un tableau d'entier
 * - qui verifie si un élement est present dans un tableau ou pas
 * - qui transfère dans un tableau 1 les valeurs pairs et dans l'autre les valeurs impairs d'un tableau passé en parametre
 * les deux tableaux sont affichées
 * - qui tri le tableau suivant un ordre passer en parametre
 * - qui determine les deux plus grandes valeurs et les deux plus petites valeurs du tableau
 */


function init(int $nb_element, int $min, int $max):array{
    $tab=[];
    for($i=0;$i<$nb_element;$i++){
        $tab[]=rand($min,$max);
    }
    return $tab;
}

function af(array $tab):void{
    foreach($tab as $value){
        echo("$value ");
    }
    echo("<br>");
}

function pre(int $val,array $tab):bool{
    foreach($tab as $value){
        if($val==$value){
            return true;
        }
    }
    return false;
}
$entier=init(5,1,10);

af($entier);

$a=2;
$resultat=pre($a,$entier);
if($resultat){
    echo("$a est présent");
}
else{
    echo("$a n'est pas présent");
}


?>