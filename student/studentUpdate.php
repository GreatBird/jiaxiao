
            
<?php 


$phone=$_POST['phone'];

$address=$_POST['address'];

$name=$_POST['name'];
$id=$_POST['id'];



                            include '../conn.php';

                            $sql="update user set name='$name',phone='$phone', address='$address' where id='$id'";
                            
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                             echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>";    
                        }else{
echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>";
                        }
                        // echo 'tets';

                $conn->close();

                      ?>