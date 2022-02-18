<?php
    $last = $_GET['last'];
    $first = $_GET['first'];
    $type = $_GET['type'];

    if($type == '1')//더하기
    {
        echo $first.'더하기'.$last.' 의 값은?';
        echo $first+$last;
    }
    else if($type == '2')//빼기
    {
        echo $first.'빼기'.$last.' 의 값은?';
        echo $first-$last;
    }
    else if($type == '3')//곱하기
    {
        echo $first.'곱하기'.$last.' 의 값은?';
        echo $first*$last;
    }

?>