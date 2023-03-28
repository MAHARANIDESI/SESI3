<?php
    //model1
    //$age=array("peter"=>"35","ben"=>"37","joe"=>"43");
    $age["desi"]="18";
    $age["novi"]="20";
    $age["yuni"]="19";
    $age["dian"]="20";
    header("Content-Type:application/json");
    echo json_encode($age);
    