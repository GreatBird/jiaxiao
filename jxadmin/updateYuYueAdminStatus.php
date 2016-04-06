<?php 
            include '../conn.php';

  $id = $_GET['id'];

  

$sql="delete from yuyue where id = '$id'";
                                            
$result = mysqli_query($conn,$sql);
  

echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"queryPaiBanTemp.php\"; 


    </script>";

$conn->close();

                                            ?>