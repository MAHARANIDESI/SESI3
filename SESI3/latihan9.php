<?php
    //fungsi dengan parameter
    function hitungluas ($panjang=6,$lebar=4){
    return $panjang*$lebar;
    
    }
    //menggunakan fungsi dengan paramenter
    echo hitungluas(3,7);

    echo"<br>";
    //tidak ada parameter maka akan 
    //menggunakan nilai dafault
    echo hitungluas();