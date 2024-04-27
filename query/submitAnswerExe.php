<?php
 session_start(); 
 include("../conn.php");
 extract($_POST);

 $usuario_id = $_SESSION['examineeSession']['usuario_id'];



$selExAttempt = $conn->query("SELECT * FROM quiz_status WHERE usuario_id='$usuario_id' AND quiz_id='$ex_id'  ");

$selAns = $conn->query("SELECT * FROM user_respuestas WHERE axmne_id='$usuario_id' AND quiz_id='$ex_id' ");


if($selExAttempt->rowCount() > 0)
{
	$res = array("res" => "alreadyTaken");
}
else if($selAns->rowCount() > 0)
{
	$updLastAns = $conn->query("UPDATE user_respuestas SET exans_status='old' WHERE axmne_id='$usuario_id' AND quiz_id='$ex_id'  ");
	if($updLastAns)
	{
		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
		  	 $insAns = $conn->query("INSERT INTO user_respuestas(axmne_id,quiz_id,quest_id,exans_answer) VALUES('$usuario_id','$ex_id','$key','$value')");
		}
		if($insAns)
		{
			 $insAttempt = $conn->query("INSERT INTO quiz_status(usuario_id,quiz_id)  VALUES('$usuario_id','$ex_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}
	}
}
else
{

		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
		  	 $insAns = $conn->query("INSERT INTO user_respuestas(axmne_id,quiz_id,quest_id,exans_answer) VALUES('$usuario_id','$ex_id','$key','$value')");
		}
		if($insAns)
		{
			 $insAttempt = $conn->query("INSERT INTO quiz_status(usuario_id,quiz_id)  VALUES('$usuario_id','$ex_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}


}



 
 

 echo json_encode($res);
 ?>


 