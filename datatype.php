<?php 

    $name = "Dimas";
    $anotherName = "Yudhistira";

    // + operator 
    // operator hanya bekerja pada type data numeric 
    // numeric : int , boolean , float

    $result = $name." ".$anotherName;

    // boolean itu type data yang hanya memiliki 2 nilai, true dan false, 1 dan NULL
    $name = "sudais"; 
    $isGay = false;

    echo $name." and me ".$isGay;

    // operator 
    // + - / * 
    echo 100 % 33; // sisa bagi 
    echo "<hr>";
    // array
    $arr = ["Aries","Dimas",28,"sudais","fadil","rika","ff","ito"];
    print_r($arr);
    echo "<hr>";
    print $arr[ count($arr)-1 ];
    echo "<hr>";
    print_r(count($arr));
    echo "<hr>";
    print_r( count($arr) - 1);

    //array_push($arr,"ditto");
    $arr["ganteng"] = "Yudhistira";

    $arr[1] = "Hakim";

    unset($arr[1]);

    

    $arr[] = [11,56,23,56,[44,90,99],46,89]; // index 8
    print_r($arr);
    echo "<hr>";
    $arr[8][] = 100; 
    print_r($arr);
    echo "<hr>";