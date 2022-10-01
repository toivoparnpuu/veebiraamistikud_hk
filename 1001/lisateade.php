<?php
if(isset($_REQUEST["teade"])){
    $nr = intval(file_get_contents("loendur.txt"));
    $nr ++;

    file_put_contents("loendur.txt", "".$nr);
    $fnimi="teade$nr.txt";
    file_put_contents($fnimi, $_REQUEST["teade"]);
    echo "Salvestati faili $fnimi";

}else {
    echo "teade puudub";
}