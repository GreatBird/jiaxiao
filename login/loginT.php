<?php 
                                          session_start();
                                          session_unset("name");//清空指定的session
                                          session_unset("user");//清空指定的session


$phone=$_POST['phone'];
$password=$_POST['password'];
                            




                            

                            include '../conn.php';

                            $sql="SELECT count(*) as userCount from teacher where username='$phone' and password='$password' ";

                                                        $sql1="SELECT * from teacher where username='$phone' and password='$password' ";

                            $userCount="";
                            
                    
                        //echo $sql;

                            $result1 = mysqli_query($conn,$sql1);

                        if ($result1) {
                                 while($row1 = mysqli_fetch_array($result1))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $name=$row1['name'];

                                          $_SESSION['Tname']=$name;





                                      }}


                                      
                        $result = mysqli_query($conn,$sql);

                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $userCount=$row['userCount'];
                                        
                                        if ($userCount>0) {
                                          $_SESSION['Tuser']=$phone;
                                          echo " <script language=\"javascript\">

           window.location.href=\"../teacher/index.html\"; 


    </script>";
                                        }else{
                                          echo " <script language=\"javascript\">

           window.location.href=\"../student/loginT.html\"; 


    </script>";
                                        }


                                    }
                        }

                        

                         
                        
                        
                        // echo 'tets';

                $conn->close();

                      
                      ?>