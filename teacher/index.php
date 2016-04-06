<?php 
session_start();
if (isset($_SESSION['Tname'])) {
  # code...
  echo "<script>window.location.href='index.html';</script>";
  // echo '1';
}else{
  echo "<script>window.location.href='../login/loginT.html';</script>";
  // echo '2';

}

?>