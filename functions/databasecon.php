<?php
$DataBase = "localhost";
$DataUser = "jhdevn1q";
$DataPass = "1b2b3c4d5e";
$DataName = "jhdevn1q_pc4u";
$conn = new mysqli($DataBase, $DataUser, $DataPass, $DataName);

if (mysqli_connect_errno()) {
    die("<b>" . mysqli_connect_errno() . ":</b> " . mysqli_connect_error());

}
?>

