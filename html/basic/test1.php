<?php

//한줄 주석
/*
여러줄 주석
*/



?>

<?php

    $value = "1";

    var_dump($value); //string

    $value - 1;
    var_dump($value); //int

    $value - 1.1;
    var_dump($value); //float

    $value = "1"."1";
    var_dump($value); //String



?>

<?php


    function function_name($number)
    {
        return $number*2;
    }



    echo function_name(10); 

    // echo를  함수 내에서 사용하면 외부에서 echo를 사용하지 않아도 출력이 됨.

?>