<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 1</title>
</head>
<body>
    <p>
        Créer une fonction qui retourne un booléen : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php

            /*function returnBool($var){*/
                /* La fonction boolval retourne la valeur booléen bool de la variable fournie dans le paramètre */
                   /*qui sera converti en booléen avec comme valeur de retour true ou false */

                /* Condition : SI la valeur de retour de la variable est considérée comme true --> affiche true */
                /*if(boolval($var)){ 
                   echo $var. ' : true<br>';
                 SINON si la valeur de retour de la variable est considérée comme false --> affiche false */
                /*}else{
                  
                    echo $var. ' : false<br>';
                }
            }*/

            function returnBool($var){
                /* La fonction is_bool détermine si la variable donnée est un booléen
                   Retourne true si la variable est un booléen, false sinon */

                /* La fonction gettype pour donner le type de la variable d'abord
                   puis le type de ce que retourne is_bool */
                if(is_bool($var)){
                    echo $var. ' (' .gettype($var). ') : TRUE (' .is_bool($var). ') --> ' .gettype(is_bool($var)). '<br>';
                }else{
                    echo $var. ' (' .gettype($var). ') : FALSE (' .is_bool($var). ') --> ' .gettype(is_bool($var)). '<br>';
                } 
            }
            returnBool('carotte');
            returnBool(true);
            returnBool(0);
            returnBool(false);

            /*
            function returnBool(){
                return true;
            }
            echo returnBool();
            */
            
        ?>
    </div>
</body>
</html>