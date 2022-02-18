<html>
    <head>
        <title>dd</title>
    </head>
    <body>
        <table border = '1'>
            <tr>
                <?php           
                    $row = $_POST['row'];
                    $col = $_POST['col'];

                   for ($i = 1; $i <= $row; $i++) {
                       echo "<td>", $i, "</td>";
                       if($k == $col) {
                           echo "</tr>, $k,<tr>";
                       }
                   }
                ?>
            </tr>
        </table?>    
</body>