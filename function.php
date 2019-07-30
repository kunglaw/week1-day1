<?php 

    // suatu block code yang berisi logic dan resusable ( dipake berulang ) 

    /*
        deklarasi 
        calling 

        deklarasi 
            - nama function 
            - parameter 
            - logic / eksekusi
    */

    // deklarasi 
    function hello( ) {
        // eksekusi 
        echo "hello world ";
    }

    function fullname($firstname, $lastname) {
        echo $firstname." ".$lastname;
    }

    // calling 
    hello();
    echo "<hr>";
    fullname("Aries Dimas", "Yudhistira");

    function add($num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }

    function subtract($num1, $num2) {
        $result =  $num1 - $num2;
        return $result;
    }
    echo "<hr>";
    $add = add(10,20); // dia punya nilai , 30
    $substract = subtract($add, 5);

    if($substract > 0) {
        print "<br> ini di eksekusi <br>";
    }
    
    print $substract;