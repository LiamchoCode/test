<?php 

$exmneId = $_SESSION['examineeSession']['usuario_id'];

$selExmneeData = $conn->query("SELECT * FROM usuarios WHERE usuario_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);

$selExam = $conn->query("SELECT * FROM quiz_tb ORDER BY ex_id DESC ");


//

 ?>