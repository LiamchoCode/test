<?php 
 include("../../../conn.php");


extract($_POST);

$delCourse = $conn->query("DELETE  FROM categorias_tb WHERE cat_id='$id'  ");
if($delCourse)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}



	echo json_encode($res);
 ?>