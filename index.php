<?php
/**
 * Created by PhpStorm.
 * User: yazidneghiche
 * Date: 10/10/2020
 * Time: 21:43
 */

/******************************************************************************************************/
/*--/                                       Function                                               /--*
/******************************************************************************************************/

function avance($km){
   return  $km-1;
}

function retourne($km){
    return $km+1;
}

function depose($bananes, $deposees){
 return $bananes - $deposees;
}

function porte($bananes, $transportees){
  return   $bananes - $transportees;
}

function mange($bananes, $mangees){
    return   $bananes - $mangees;
}

/******************************************************************************************************/
/*--/                                       Launch                                                 /--*
/******************************************************************************************************/

/**
 * @param $km
 * @param $bananes
 * @param $solutions
 * @param $solution
 * @param $km_to_do
 * @return mixed
 */
function launch(&$km, $bananes, $solutions, $solution, $km_to_do){
    while($km > 0){
        $km =  avance($km);
        if($km_to_do > 300) {
            $km = 1000;
            return launch($km, $bananes, $solutions, $solution, 300);
        }
    }

    return $bananes;
}

$km = 1000;
$bananes = 3000;
$solutions = array();
$solution = array();

echo launch($km,$bananes,$solutions,$solution,$km_to_do = 300);
echo '</br>';
echo $km;
