<?php 


$phone=$_POST['phone'];
$password=$_POST['password'];

// $teacherId=$_POST['teacherId'];
// $name=$_POST['name'];
                            




                            

                            include '../conn.php';

                            $sql="insert into teacher(username,password) values('$phone','$password') ";
                            
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                          // echo "success";

                          echo " <script language=\"javascript\">

           window.location.href=\"../teacher/index.html\"; 


    </script>";
                          session_start();
                          $_SESSION['user']=$phone;
                        }else{
                          echo " <script language=\"javascript\">

           window.location.href=\"regT.html\"; 


    </script>";
                        }
                                 
                        // echo 'tets';

                $conn->close();

                      
                      ?>