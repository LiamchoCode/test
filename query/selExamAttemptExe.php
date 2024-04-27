<?php 
 session_start();
 include("../conn.php");
$exmneId = $_SESSION['examineeSession']['usuario_id'];
 

extract($_POST);

 $selExamAttmpt = $conn->query("SELECT * FROM quiz_status WHERE usuario_id='$exmneId' AND quiz_id='$thisId' ");

 if($selExamAttmpt->rowCount() > 0)
 {
 	$res = array("res" => "alreadyExam", "msg" => $thisId);
 }
 else
 {
 	$res = array("res" => "takeNow");
 }


 echo json_encode($res);
 ?>