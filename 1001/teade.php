<?php
$m = array();
foreach(scandir(".") as $fnimi){
    if(substr($fnimi, -4)===".txt"){
        array_push($m, $fnimi);
    
    }
}
echo json_encode($m);
?>
