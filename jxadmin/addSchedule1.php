<?php 
  include '../conn.php';

  $month = $_POST['month'];



  $morningBegin = $_POST['morningBegin'];
  $morningEnd = $_POST['morningEnd'];

  $afterBegin = $_POST['afterBegin'];
  $afterEnd = $_POST['afterEnd'];

  // echo $month;
  // echo "<br>";

  // echo $morningBegin;
  // echo "<br>";

  // echo $morningEnd;
  // echo "<br>";
  // echo $afterBegin;
  // echo "<br>";
  // echo $afterEnd;
  // echo "<br>";

  $beginTemp=substr($morningBegin, 0,2);
  $endTemp=substr($morningEnd, 0,2);

  while ($beginTemp<$endTemp) {
    if (strlen($beginTemp)<2) {
      $beginTemp='0'.$beginTemp;
      # code...
    }
    //echo $beginTemp.":00";

    $beginInsert=$beginTemp.":00";
    //echo "&nbsp";
    $temp=$beginTemp+1;
    if (strlen($temp)<2) {
      $temp='0'.$temp;
      # code...
    }

    //echo $temp.":00";
    $endInsert=$temp.":00";

    //echo "<br>";
    $beginTemp=$beginTemp+1;
    
    # code...

    $sql="insert into schedule(beginTime,endTime,month) values('$beginInsert','$endInsert','$month')";
                            
    $result = mysqli_query($conn,$sql);
  }



$afterbeginTemp=substr($afterBegin, 0,2);
  $afterendTemp=substr($afterEnd, 0,2);

  while ($afterbeginTemp<$afterendTemp) {
    if (strlen($afterbeginTemp)<2) {
      $afterbeginTemp='0'.$afterbeginTemp;
      # code...
    }
    //echo $beginTemp.":00";

    $beginInsert1=$afterbeginTemp.":00";
    //echo "&nbsp";
    $temp1=$afterbeginTemp+1;
    if (strlen($temp1)<2) {
      $temp1='0'.$temp1;
      # code...
    }

    //echo $temp.":00";
    $endInsert1=$temp1.":00";

    //echo "<br>";
    $afterbeginTemp=$afterbeginTemp+1;
    
    # code...

    $sql1="insert into schedule(beginTime,endTime,month) values('$beginInsert1','$endInsert1','$month')";
                            
    $result1 = mysqli_query($conn,$sql1);
  }



  
 //  $sql="insert into schedule(beginTime,endTime,month) values('$beginTime','$endTime','$month')";
								            
	// $result = mysqli_query($conn,$sql);
      // echo($aDoor[$i] . " ");
      // echo "<br>";

 

echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>";

$conn->close();

											?>