<?php 

function activationCode(){
 
    $IlkBesli            =    rand(10000, 99999);
    $IkinciBesli        =    rand(10000, 99999);
    $UcuncuBesli        =    rand(10000, 99999);
    $DorduncuBesli        =    rand(10000, 99999);
    $Kod                =    $IlkBesli . "-" . $IkinciBesli . "-" . $UcuncuBesli . "-" . $DorduncuBesli;
    $Sonuc                =    $Kod;
    return $Sonuc;
}
