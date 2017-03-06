<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
<body>

<?php
if (isset($_GET['json'])) {
	$JSONDATA = $_GET['json'];
	
	$arr = json_decode($JSONDATA,true);
	//var_dump($arr);
	echo '<p style="color:red;">Level</p>';
	echo $Level = $arr[0]['Level'].'<br>';
	echo '<p style="color:red;">Password</p>';
	echo $Password = $arr[0]['Password'].'<br>';
	echo '<p style="color:red;">ActiveFlag</p>';
	echo $ActiveFlag = $arr[0]['ActiveFlag'].'<br>';
	echo '<p style="color:red;">FirstName</p>';
	echo $FirstName = $arr[0]['FirstName'].'<br>';
	echo '<p style="color:red;">MiddleName</p>';
	echo $MiddleName = $arr[0]['MiddleName'].'<br>';
	echo '<p style="color:red;">LastName</p>';
	echo $LastName = $arr[0]['LastName'].'<br>';
	echo '<p style="color:red;">FirstNameAR</p>';
	echo $FirstNameAR = $arr[0]['FirstNameAR'].'<br>';
	echo '<p style="color:red;">MiddleNameAR</p>';
	echo $MiddleNameAR = $arr[0]['MiddleNameAR'].'<br>';
	echo '<p style="color:red;">LastNameAR</p>';
	echo $LastNameAR = $arr[0]['LastNameAR'].'<br>';
	echo '<p style="color:red;">GenderCode</p>';
	echo $GenderCode = $arr[0]['GenderCode'].'<br>';
	echo '<p style="color:red;">BirthDate</p>';
	echo $BirthDate = $arr[0]['BirthDate'].'<br>';
	echo '<p style="color:red;">CityName</p>';
	echo $CityName = $arr[0]['CityName'].'<br>';
	echo '<p style="color:red;">CityNameAR</p>';
	echo $CityNameAR = $arr[0]['CityNameAR'].'<br>';
	echo '<p style="color:red;">CountryCode</p>';
	echo $CountryCode = $arr[0]['CountryCode'].'<br>';
	echo '<p style="color:red;">GPA</p>';
	echo $GPA = $arr[0]['GPA'].'<br>';
	echo '<p style="color:red;">SchoolID</p>';
	echo $SchoolID = $arr[0]['SchoolID'].'<br>';
	echo '<p style="color:red;">JoiningDate</p>';
	echo $JoiningDate = $arr[0]['JoiningDate'].'<br>';
	echo'<p style="color:red;">StudentCode</p>';
	echo $StudentCode = $arr[0]['StudentCode'].'<br>';
	echo '<p style="color:red;">GenderID</p>';
	echo $GenderID = $arr[0]['GenderID'].'<br>';
	echo '<p style="color:red;">ReligionID</p>';
	echo $ReligionID = $arr[0]['ReligionID'].'<br>';
	echo '<p style="color:red;">nationalityID</p>';
	echo $nationalityID = $arr[0]['nationalityID'].'<br>';
	echo '<p style="color:red;">ParentID</p>';
	echo $ParentID = $arr[0]['ParentID'].'<br>';
	echo '<p style="color:red;"></p>';
	echo $Username = $arr[0]['Username'].'<br>';
	echo '<p style="color:red;">Username</p>';
	echo $Email = $arr[0]['Email'].'<br>';
	echo '<p style="color:red;">StudentPIC</p>';
	echo $StudentPIC = $arr[0]['StudentPIC'].'<br>';
	echo '<p style="color:red;">ClassID</p>';
	echo $ClassID = $arr[0]['ClassID'].'<br>';
	echo '<p style="color:red;">Mobile</p>';
	echo $ClassID = $arr[0]['mobile'].'<br>';
	//$counter=count($arr);
	//require_once "lib/admin.php";
	//$_stu = new Admin();
	
/*
	for ($i=0; $i < $counter; $i++) { 

		$StudentID = null;
	$Level = $arr[$i]['Level'];
	$Password = $arr[$i]['Password'];
	$ActiveFlag = $arr[$i]['ActiveFlag'];
	$FirstName = $arr[$i]['FirstName'];
	$MiddleName = $arr[$i]['MiddleName'];
	$LastName = $arr[$i]['LastName'];
	$FirstNameAR = $arr[$i]['FirstNameAR'];
	$MiddleNameAR = $arr[$i]['MiddleNameAR'];
	$LastNameAR = $arr[$i]['LastNameAR'];
	$GenderCode = $arr[$i]['GenderCode'];
	$BirthDate = $arr[$i]['BirthDate'];
	$CityName = $arr[$i]['CityName'];
	$CityNameAR = $arr[$i]['CityNameAR'];
	$CountryCode = $arr[$i]['CountryCode'];
	$GPA = $arr[$i]['GPA'];
	$SchoolID = $arr[$i]['SchoolID'];
	$JoiningDate = $arr[$i]['JoiningDate'];
	$StudentCode = $arr[$i]['StudentCode'];
	$GenderID = $arr[$i]['GenderID'];
	$ReligionID = $arr[$i]['ReligionID'];
	$nationalityID = $arr[$i]['nationalityID'];
	$ParentID = $arr[$i]['ParentID'];
	$Username = $arr[$i]['Username'];
	$Email = $arr[$i]['Email'];
	$StudentPIC = $arr[$i]['StudentPIC'];
	$ClassID = $arr[$i]['ClassID'];


echo '<br>';
		echo $message = $_stu->SaveSTU($StudentID,$Level,$Password,$ActiveFlag,$FirstName,$MiddleName,$LastName,$FirstNameAR,$MiddleNameAR,$LastNameAR,$GenderCode,$BirthDate,$CityName,$CityNameAR,$CountryCode,$GPA,$SchoolID,$JoiningDate,$StudentCode,$GenderID,$ReligionID,$nationalityID,$ParentID,$Username,$Email,$StudentPIC,$ClassID);
	}
	*/

	
}


?>

</body>
</html>

