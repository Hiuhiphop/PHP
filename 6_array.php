<?php
    //khai báo 1 array 1 chiều (numeric aray/index array)
    $number = array("10", "11", "12", "13", "14", "15", "16");
    $number2 = [10, 11, 12, 13, 14, 15, 16];

    echo "<br>In theo print_r";
    print_r($number);

    //for thường
    echo "<br> for thường";
    for ($i = 0; $i < count($number); $i++) {
        echo "<br> phan tu thu  $i la $number[$i]";
    }

    //foreach
    echo "<br> Foreach";
    foreach ($number as $num) {
        echo "<br> $num";
    }
    //khai báo 1 asscociative array (key => value)
    $student = ["name" => "Khoa", "age" => 29];
    echo "<br> in theo print_r";
    print_r($student);

    echo "<br> in theo foreach: ";
    foreach ($student as $s) 
    {
        echo "<br> $s";
    }

    echo "<br> Name: " . $student["name"];
    echo "<br> Age: " . $student["age"];


    
    echo "<br> in theo foreach2: ";
    foreach ($student as $k => $s) 
    {
        echo "<br> $k là $s";
    }

    //khai báo 1 array nhiều chiều
    echo"<br> bt";
    $studentList = [
        ["name" => "khoa", "age" => 29],
        ["name" => "nghia","age"=> 25],
        ["name" => "hop","age"=> 19]
    ];
    foreach ($studentList as $k => $stu) {
        echo "<br>" . ($k+1) ."." . $stu['name'] . ":" . $stu['age'];
    }







?>