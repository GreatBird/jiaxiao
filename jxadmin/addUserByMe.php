<?php

include '../conn.php';

$file = fopen("testZP.csv","r");

while(!feof($file))
  {
    $tempSQL="";
    $temp=fgetcsv($file);
    // print_r($temp);


    $count=sizeof($temp);
    for($i=0; $i < $count-1; $i++) { 
     $tempSQL=$tempSQL."'".$temp[$i]."'".',';

  if ($i==5) {
    //username
    $tempSQL=$tempSQL."'".substr($temp[5],-4)."'".',';
    //password
    $tempSQL=$tempSQL."'".$temp[5]."'".',';
      
  }
      # code...
    }

    $tempSQL=$tempSQL."'".$temp[$count-1]."'";

    //echo $tempSQL;


  $sql="insert into user(excelId,signupDate,name,studentID,sex,cityID,password,username,pattern,address,phone,qihao,carType,jieshao) values($tempSQL)";

  //echo $sql."<br>";






                            
  $result = mysqli_query($conn,$sql);






}
fclose($file);

$conn->close();

?>


