<?php 
$id=$_GET['id'];
?>




            
<?php 

                            include '../conn.php';

                            $sql="update yuyue set classStatus=3 where id ='$id' ";
                            
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 echo "<script>window.location.href='queryYuYue.php'</script>";
                        }
                        // echo 'tets';

                $conn->close();

                      ?>
            


