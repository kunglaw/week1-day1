<?php 

    $kondisi = 0;// thurthy ... falsy 

    /*
        operator logika 
        $a = 0 ; // true
        == // membandingkan hanya nilai 
        === nilai dengan type data 
        > // boolean 
        >= // boolean 
        <
        <=
        
        && 
        ||
        and
        or 
    */

    // percabangan 
    if($kondisi == "0") {
        // eksekusi, kalau nilai kondisi = true 
        echo "ini bernilai true";
    }
    else if($kondisi == "") {

    }
    // 0 
    else if($kondisi == false){
        echo "ini adalah if yang lain";
    }

    // perulangan
    /*
        3 bagian dari kondisi pada looping : 
        1. kondisi awal 
        2. batasan 
        3. increment atau decrement 

    */

    $a = 100;
    $a = $a + 100; // a = a + 100
    echo $a;

    // $i = 11
    echo "<hr>";
    for($i = 1; $i <= 10; $i+=2) {
        echo $i;
        echo "<br>";
    }
    echo "<br>";
    $b = 0;
    do {
        echo "print $b <br>";

        $b++; // increment atau decrement
    }
    while( $b <= 10);

    while($b <= 20) {
        echo "print $b <br>";

        $b++; 
    }
