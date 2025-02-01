<?php

require 'db_konek.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE From data_pegawai where id=$id");
header("location:index.php");
exit;
?>

