<?php

require "conDB.php";

$strSQL = " SELECT * FROM tb_login ORDER BY last_login DESC";

$objRes = mysqli_query($link,$strSQL);
 

?>

<table>
<tr>
    <td>USER</td>
    <td>PASS</td>
    <td>TIME</td>
    <td>EDIT</td>
    <td>DELETE</td>
</tr>
<?php
    while($row = mysqli_fetch_array($objRes)){
?>
<tr>

    <td><?=$row[0]?></td>
    <td><?=$row['password']?></td>
    <td><?=@date('d-m-Y H:i:s',$row['last_login'])?></td>
    <td><a href="inputnew.php?user=<?=$row[0]?>"> EDIT</a></td>
    <td><a href="del.php?user=<?=$row[0]?>"> DELETE</a></td>

</tr>
<?php
    }
?>

</table>