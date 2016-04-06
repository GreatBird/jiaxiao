<?php 

date_default_timezone_set('Asia/Shanghai'); 

echo "明天:".date("Y-m-d",strtotime("+0 day")). "<br>";    
echo "明天:".date("Y-m-d",strtotime("+1 day")). "<br>";    



?>