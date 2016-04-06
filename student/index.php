<?php 
session_start();
if (isset($_SESSION['user'])) {
	# code...
	echo "<script>window.location.href='index.html';</script>";
	// echo '1';
}else{
	echo "<script>window.location.href='../login/login.html';</script>";
	// echo '2';

}

?>