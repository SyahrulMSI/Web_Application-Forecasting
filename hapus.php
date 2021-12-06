<?php
	include 'conn.php';
	$id = $_GET['id'];
	$row = mysqli_query($conn,"delete from pmb where kode_pmb=".$id);
	if($row==1){
		header('location:index.php');
	}
?>