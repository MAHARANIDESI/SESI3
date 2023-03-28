<?php
$mhs=array(
    array("desi","11111111","bangli"),
    array("novi","22222222","dps"),
    array("yuni","66666666","gianyar"),
);
header("Content-Type:application/json");
    echo json_encode($mhs);
    