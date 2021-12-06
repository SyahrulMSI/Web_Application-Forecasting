<?php
	include 'conn.php';
	extract($_POST);
	if(isset($_POST['simpan'])){
		mysqli_query($conn,"insert into pmb values('','$periode','$jumlah')");
		header('location:index.php');
	}
?>