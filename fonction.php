<?php 
function perimetre($cote){
    return $cote*4;
}
function diagonale($cote){
    return sqrt((pow($cote,2))*2);
}
function surface($cote){
    return pow($cote,2);
}
$cote = rand(10,30);
?>