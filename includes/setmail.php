<?php
function updatamail($id,$email,$ip){
	$hashmail = md5(strtolower(trim($email)));
	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
	$con->query("SET NAMES utf8");
	$Time = time();
	$Time = date("Y-m-d H:i:s",$Time); 
	$sql = "UPDATE  `list` SET  `BAHA_NAME` = '" . getbahaname($id) . "',`EMAIL` =  '" . $email . "',`HASHED_MAIL` =  '" . $hashmail . "',`MODIFY_IP` =  '" . $ip . "',`MODIFY_TIME` = '" . $Time . "' WHERE `BAHA_ID`='" . $id . "'";
	@mysqli_query($con, $sql);
	return true;
}
?>
