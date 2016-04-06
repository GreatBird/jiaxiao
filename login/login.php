<?php 
                                          session_start();
                                          session_unset("Tname");//清空指定的session
                                          session_unset("Tuser");//清空指定的session


$cityID=$_POST['cityID'];
$password=$_POST['password'];
                            




                            

                            include '../conn.php';



                            $sql="SELECT count(*) as userCount from user where username='$cityID' and password='$password' ";
                            $userCount="";

                            $sql1="SELECT * from user where username='$cityID' and password='$password' ";

                            
                    
                        //echo $sql;

                            $result1 = mysqli_query($conn,$sql1);

                        if ($result1) {
                                 while($row1 = mysqli_fetch_array($result1))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $name=$row1['name'];

                                          $_SESSION['name']=$name;





                                      }}

                            
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $userCount=$row['userCount'];
                                        
                                        if ($userCount>0) {
                                          $_SESSION['user']=$cityID;
                                          echo " <script language=\"javascript\">

           window.location.href=\"../student/index.html\"; 


    </script>";
                                        }else{
                                          echo " <script language=\"javascript\">

           window.location.href=\"login.html\"; 


    </script>";
                                        }


                                    }
                        }
                        // echo 'tets';

                $conn->close();

                      
                      ?>