<?php 

$id=$_GET['id'];

								            include '../conn.php';

								            $sql="delete from paiban where id='$id' ";
								            
								    
										    //echo $sql;
										    $result = mysqli_query($conn,$sql);

										    echo "<script>window.location.href='index.html';</script>";
										    
										    

								$conn->close();

											?>