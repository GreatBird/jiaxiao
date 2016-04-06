<?php 


$date=$_POST['date'];

$array=explode('-', $date);

// print_r($array);


if ($array[0][0]=='0') {

  $month=$array[0][1];
  # code...
}else{
    $month=$array[0];
}



if ($array[1][0]=='0') {

  $day=$array[1][1];
  # code...
}else{
    $day=$array[1];
}


?>