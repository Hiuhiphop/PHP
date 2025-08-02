<?php
    function myFunc() 
    {
        // khai báo biến static
        static $staticVar = 10;
        //khai báo biến thường
        $normalVar = 10;

        $staticVar++;
        $normalVar++;

        echo "<br> staticVar is " . $staticVar;
        echo "<br> normalVar is " . $normalVar;
    }

?>