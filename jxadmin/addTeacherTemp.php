<?php 
            include '../conn.php';

  $username = $_POST['username'];

  $name = $_POST['name'];
  $teacherID = $_POST['teacherID'];

  $password=substr($username,-4);

$sql="insert into teacher(username,password,teacherID,name) values('$username','$password','$teacherID','$name')";
                                            
  $result = mysqli_query($conn,$sql);
  

echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>";

$conn->close();

                                            ?>