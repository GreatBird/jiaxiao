<?php 
            include '../conn.php';

  $paibanDate = $_POST['paibanDate'];

  $array=explode('-',$paibanDate);

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




  $aDoor = $_POST['teacher'];
  $aDoor1 = $_POST['paiBanTime'];



  // $paiBanTime = $_POST['paiBanTime'];

  // echo $month;

  // echo $paiBanTime;
  // list($beginTime, $endTime) = split ('--', $paiBanTime);
  // echo $beginTime;
  // echo $endTime;






  if(empty($aDoor)) 
  {
    echo("不能为空");
  } 
  else 
  {
    $N = count($aDoor);

    $N1 = count($aDoor1);



   for($j=0; $j < $N1; $j++)
    {

      list($beginTime,$endTime) = split ('--', $aDoor1[$j]);

      for($i=0; $i < $N; $i++)
    {

      list($name, $teacherID,$lukaoStatus) = split ('--', $aDoor[$i]);
      $sql="insert into paiban(beginTime,endTime,teacherID,teacherName,month,paibanDate,lukaoStatus) values('$beginTime','$endTime','$teacherID','$name','$month','$day','$lukaoStatus')";
                            
    $result = mysqli_query($conn,$sql);
      // echo($aDoor[$i] . " ");
      // echo "<br>";

    }



     

    }

    




  }

echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>";

$conn->close();

											?>