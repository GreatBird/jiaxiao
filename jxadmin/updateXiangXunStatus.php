<?php 
$id=$_GET['id'];
            include '../conn.php';

            $sql="update teacher set lukaoStatus=0 where id='$id'";
    
		    //echo $sql;
		    $result = mysqli_query($conn,$sql);
		    
		    if ($result) {
		             echo "<script>window.location.href='index.html';</script>";
		    }else{
		    	echo "<script>window.location.href='index.html';</script>";
		    }
		    // echo 'tets';

$conn->close();

			?>