<?php 

// Count All Course
$selCourse = $conn->query("SELECT COUNT(cat_id) as totCourse FROM categorias_tb ")->fetch(PDO::FETCH_ASSOC);


// Count All Exam
$selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM quiz_tb ")->fetch(PDO::FETCH_ASSOC);




 ?>