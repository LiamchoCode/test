<?php
 include("../../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE preguntas_tb SET pregunta='$question', opcion_1='$opcion_1', opcion_2='$opcion_2', opcion_3='$opcion_3', opcion_4='$opcion_4' WHERE pre_id='$question_id' ");
if($updCourse)
{
	   $res = array("res" => "success");
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>