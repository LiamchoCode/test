<?php 
 include("../../../conn.php");

 extract($_POST);

$course_name = strtoupper($course_name);
 $selCourse = $conn->query("SELECT * FROM categorias_tb WHERE cat_nombre='$course_name' ");

 if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "course_name" => $course_name);
 }
 else
 {
    
	$insCourse = $conn->query("INSERT INTO categorias_tb(cat_nombre) VALUES('$course_name') ");
	if($insCourse)
	{
		$res = array("res" => "success", "course_name" => $course_name);
	}
	else
	{
		$res = array("res" => "failed", "course_name" => $course_name);
	}


 }




 echo json_encode($res);
 ?>