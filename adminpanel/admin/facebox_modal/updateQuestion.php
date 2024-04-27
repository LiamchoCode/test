
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selCourse = $conn->query("SELECT * FROM preguntas_tb WHERE pre_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update Question</i></legend>
  
  <div class="col-md-12 mt-4">
    <form method="post" id="updateQuestionFrm">
      <div class="form-group">
        <legend>Question</legend>
        <input type="hidden" name="question_id" value="<?php echo $id; ?>">
        <textarea name="question" class="form-control" rows="2" required=""><?php echo $selCourse['pregunta']; ?></textarea>
      </div>


      <div class="form-group">
        <legend>Choice A</legend>
        <input type="" name="opcion_1" value="<?php echo $selCourse['opcion_1']; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <legend>Choice B</legend>
        <input type="" name="opcion_2" value="<?php echo $selCourse['opcion_2']; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <legend>Choice C</legend>
        <input type="" name="opcion_3" value="<?php echo $selCourse['opcion_3']; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <legend>Choice D</legend>
        <input type="" name="opcion_4" value="<?php echo $selCourse['opcion_4']; ?>" class="form-control" required>
      </div>

      <div class="form-group">
        <legend class="text-success">Correct Answer</legend>
        <input type="" name="exam_final" value="<?php echo $selCourse['respuesta']; ?>" class="form-control" required>
      </div>


      <div class="form-group" align="right">
        <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
      </div>
    </form>
  </div>
</fieldset>







