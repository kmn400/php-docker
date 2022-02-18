<?php

$col = $_GET['col'];
$row = $_GET['row'];

$number = 1;
?>

<table border=1>

<?php
for($i=0;$i<$row;$i++)
{
?>
   <tr> 
        <?php
            for($j=0;$j<$col;$j++)
            {
                ?>
                <td>
                    <?php 
                        echo $number
                    ?>
                </td>
                <?php 
                $number++;
            }
        ?>
    </tr>
<?php
}
?>

</table> 