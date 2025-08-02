<?php
    //khai báo 1 array
    $studentList = ["minh tai", "dang khoa", "manh hung"];
    
    //thêm 1 phần tử vào array
    array_push($studentList,"gia bao");
    print_r($studentList);

    //thêm vào đầu array
    array_unshift($studentList, "lam phong");
    echo"<br>";
    print_r($studentList);

    //array_pop(): xoá 1 phần tử cuối cùng ra khỏi array
    array_pop($studentList);
    echo"<br>";
    print_r($studentList);

    //array_shift: xoá phần tử đầu tiên ra khỏi array
    array_shift($studentList);
    echo"<br>";
    print_r($studentList);

    //array_splice(): xoa phần tử ở vị trí bất kỳ
    array_slice($studentList,1,1);
    echo"<br>";
    print_r($studentList);

    //array_slice(): cắt 1 mảng nhỏ trong mảng lớn
    $newArray = array_slice($studentList,2);
    print_r($newArray);

    //thêm 1 phần tử vào cuối arr
    $studentList[] = "minh hieu";
    echo'<br> $studentList[] = "minh hieu"<br>';
    print_r($studentList);

    //thêm phúc vào sau khoa: thêm 1 phần tử vào vị trí bất kì
    array_slice($studentList,2,0, "hoang phuc");
    echo "<br>";
    print_r($studentList);

    //choi dinh dang file: abc.jpg, abc.jpeg
    $image = "abc_abc.pdf";
    //cat chuoi thanh mang
    $newImage = explode(".", $image);
    //get phan tu cuoi cung
    $ext = end($newImage);
    //khai báo 1 mảng chứa các extension hợp lệ
    $accept_ext = ["jpg", "png", "jpeg", "gif"];
    //kiểm tra xem extent của file có hợp lệ ko
    $result = in_array($ext, $accept_ext);
    if ($result) {
        echo "hinh anh hop le";
    } else {
        echo "hinh anh khong hop le";
    }
?>