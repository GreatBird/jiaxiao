 <?php 

                            include '../conn.php';

                            $id=$_GET['id'];

                            $sql="delete from teacher where id='$id'";
                            

                            
                            
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);


                        echo "<script>alert('操作成功，返回首页！');window.location.href='index.html';</script>";
                        
                        

                $conn->close();

                      ?>