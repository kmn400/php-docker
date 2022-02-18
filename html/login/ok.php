<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if($id == 'SEMIN' && $pw == 'QWERTY')
    {
        echo '로그인 성공';
    }
    else 
    {
        echo '로그인 실패';
    }
?>