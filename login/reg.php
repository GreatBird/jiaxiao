<?php 
                          session_start();


$phone=$_POST['cityID'];
$password=$_POST['password'];
                            




                            

                            include '../conn.php';

                            $sql="insert into user(username,password) values('$phone','$password') ";
                            
                    
                        //echo $sql;  // alert(\"操作成功，即将返回首页\");  alert(\"操作失败，即将返回首页\");


                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                          
                          $_SESSION['user']=$phone;
                                                    $_SESSION['name']='name';


                          echo " <script language=\"javascript\">

           window.location.href=\"../student/index.html\"; 


    </script>";
                        }else{
echo " <script language=\"javascript\">

           window.location.href=\"../student/index.html\"; 


    </script>";                        }
                                 
                        // echo 'tets';

                $conn->close();

                      
                      ?>