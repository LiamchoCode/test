<?php 
 include("../../../conn.php");


extract($_POST);

$selExamineeFullname = $conn->query("SELECT * FROM usuarios WHERE exmne_fullname='$fullname' ");
$selExamineeEmail = $conn->query("SELECT * FROM usuarios WHERE exmne_email='$email' ");


if($gender == "0")
{
	$res = array("res" => "noGender");
}
else if($year_level == "0")
{
	$res = array("res" => "noLevel");
}
else if($selExamineeFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selExamineeEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else
{
	$insData = $conn->query("INSERT INTO usuarios(exmne_fullname,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_password) VALUES('$fullname','$gender','$bdate','$year_level','$email','$password')  ");
	if($insData)
	{
		$res = array("res" => "success", "msg" => $email);
	}
	else
	{
		$res = array("res" => "failed");
	}
}


echo json_encode($res);
 ?>