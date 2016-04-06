<?php 

include "conn.php";


$username=$_POST['username'];

$password=$_POST['password'];


$resultTemp1=mysqli_query($conn,"select count(*) as countUser from user where username='$username'");


while($row=mysqli_fetch_array($resultTemp1)){
		$count=$row['countUser'];
		if ($count==0) {
			$resultTemp=mysqli_query($conn,"insert into user (username,password) values('$username','$password')");
			session_start();
			$_SESSION['user']=$username;
					echo '<script>alert("操作成功");location.href="index.html"</script>';

		}else{
								echo '<script>alert("您已有账号，请登录！");location.href="login.php"</script>';

		}


}


$conn->close();


?>