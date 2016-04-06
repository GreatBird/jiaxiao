<?php 
            include '../conn.php';

  
  $id = $_GET['id'];
  $type = $_GET['type'];

  if ($type=='lu') {
  	# code...
  	$sql="update user set luStatus=1 where id='$id'";

  }

  if ($type=='xiang') {
  	# code...
  	$sql="update user set xiangStatus=1 where id='$id'";

  }


                                            
  $result = mysqli_query($conn,$sql);
  

echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>";

$conn->close();

                                            ?>