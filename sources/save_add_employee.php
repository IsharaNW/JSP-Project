<?php
require("../DB/dbcon.php");


if(isset($_POST['FName']) && isset($_POST['LName']) && isset($_POST['Gender'])  && isset($_POST['Nic'])  && isset($_POST['Dob']) && isset($_POST['type']) && isset($_POST['TelNum']) && isset ($_POST['Address'])) {


	
	$fname=$_POST['FName'];
	$lname=$_POST['LName'];
	$gender=$_POST['Gender'];
	$nic=$_POST['Nic'];
	$dob=$_POST['Dob'];
	$job=$_POST['type'];
	$telnum=$_POST['TelNum'];
	$address=$_POST['Address'];
	
	

	$sql = "insert into employee (`FirstName`,`LastName`,`Gender`,`NIC`,`DOB`, `Type`,`TpNum`,`Address`) values ('".$fname."','".$lname."','".$gender."','".$nic."','".$dob."','".$job."','".$telnum."','".$address."')";

	$result = mysql_query($sql);

	if($result==1){
		echo "$fname"." employee added succesfully!";
		}else{
		echo "Something went wrong.";
			}



/*<?php
if( isset($_POST['FName'])) { //&& isset($_POST['LName']) && /*isset($_POST['Gender']) && isset($_POST['nic']) /*&& isset($_POST['bday']) /*&& isset($_POST['Type']) && isset($_POST['tel']) && isset($_POST['address']) {

	
 	echo 2;

	/*$fname=$_POST['FName'];
	$lname=$_POST['LName'];
	//$gender=$_POST['Gender'];
	$nic=$_POST['nic'];
	//$dob=$_POST['bday'];
	//$type=$_POST['Type'];
	$telnum=$_POST['tel'];
	$address=$_POST['address'];

	$sql="insert into employee(`FirstName`,`LastName`,`Gender`,`NIC`,`DOB`,`Type`,`TpNum`,`Address`) values ('".$fname."','".$lname."','".$gender."','".$nic."','".$dob."','".$type."','".$telnum."','".$address."')";

	mysql_query($sql);*/

	$sql1="select Id from employee where FirstName = '".$fname."' and LastName = '".$lname."'";

	$res=mysql_query($sql1);

	if ($res) {
		while($data = mysql_fetch_array($res)){
			$id=$data['Id'];
		}
	}
	

	if($job=="Manager"){
		$var="MAN";

	}
	if($job=="FSE"){
		$var="FSE";

	}
	if($job=="Administrator"){
		$var="ADM";

	}
	if($job=="StockKeeper"){
		$var="STK";

	}

	
	
	$var2=$var."$id";
	$sql2="insert into employe_det (`Id`,`EmpId`) values ('".$id."','".$var2."')";

	mysql_query($sql2);
	}

	?>