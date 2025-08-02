<?php
    //khai bao bien toan cuc
    $y = 1;


    //khai bao ham
    function myGlobal()
    {
        global $y;
        $y++;
        echo "bien y la $y";
    }

    //ngoai ham
    echo "bien y o ngoai la $y"


?>