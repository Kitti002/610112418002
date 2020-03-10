<?php

require "conDB.php";

$user = $_POST['user'];

$strSQL = "UPDATE admi SET  username = '$user' ";

$objRes = mysqli_query($link,$strSQL);

echo $objRes?$user + " Update...":mysqli_error($link);
?>
