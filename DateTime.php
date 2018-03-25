
<?php
date_default_timezone_set("Asia/dhaka");
$CurrentTime=time();
$DateTime=strftime("%B-%d-%Y %H:%M:%S %A",$CurrentTime);
 //This is the SQL Format for Date and Time 
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
echo $DateTime;
?>
