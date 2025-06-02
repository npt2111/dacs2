<?php
session_start();
require_once 'connect.php';
?>

<?php

$sqlxoa = "DELETE FROM thanhvien WHERE id=".$_GET['id'];
$kqxoa = mysqli_query($conn,$sqlxoa);

header("Location: thanhvien.php?theloai=1");
?>