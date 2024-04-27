<?php 
 include("../../../conn.php");

extract($_POST);

$selQuest = $conn->query("SELECT * FROM preguntas_tb WHERE quiz_id='$examId' AND pregunta='$question' ");
if($selQuest->rowCount() > 0)
{
  $res = array("res" => "exist", "msg" => $question);
}
else
{
	$insQuest = $conn->query("INSERT INTO preguntas_tb(quiz_id,pregunta,opcion_1,opcion_2,opcion_3,opcion_4,respuesta) VALUES('$examId','$question','$choice_A','$choice_B','$choice_C','$choice_D','$correctAnswer') ");

	if($insQuest)
	{
       $res = array("res" => "success", "msg" => $question);
	}
	else
	{
       $res = array("res" => "failed");
	}
}



echo json_encode($res);
 ?>