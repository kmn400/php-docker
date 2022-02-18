<?php
    $id = $_GET['id'];
    $pw = $_GET['pw'];

    if($id == 'SEMIN' && $pw == 'QWERTY')
    {
        echo '로그인 성공';
    }
    else 
    {
        echo '로그인 실패';
    }
?>