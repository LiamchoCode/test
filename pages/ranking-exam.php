<div class="app-main__outer">
    <div class="app-main__inner">



        <?php
        @$ex_id = $_GET['ex_id'];


        if ($ex_id != "") {
            $selEx = $conn->query("SELECT * FROM quiz_tb WHERE ex_id='$ex_id' ")->fetch(PDO::FETCH_ASSOC);



            $selExmne = $conn->query("SELECT * FROM usuarios et");


        ?>
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b class="text-primary">RANKING</b><br>
                            Quiz : <?php echo $selEx['ex_title']; ?><br><br>
                            <span class="border" style="padding:10px;color:black;background-color: yellow;">Exclente</span>
                            <span class="border" style="padding:10px;color:white;background-color: green;">Muy bien</span>
                            <span class="border" style="padding:10px;color:white;background-color: blue;">Bien</span>
                            <span class="border" style="padding:10px;color:white;background-color: red;">Fallido</span>
                            <span class="border" style="padding:10px;color:black;background-color: #E9ECEE;">No respondido</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                    <tbody>
                        <thead>
                            <tr>
                                <th width="25%">Examinee Fullname</th>
                                <th>Score / Over</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <?php
                        while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                            <?php
                            $exmneId = $selExmneRow['usuario_id'];
                            $selScore = $conn->query("SELECT * FROM preguntas_tb eqt INNER JOIN user_respuestas ea ON eqt.pre_id = ea.quest_id AND eqt.respuesta = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.quiz_id='$ex_id' AND ea.exans_status='new' ORDER BY ea.exans_id DESC");

                            $selAttempt = $conn->query("SELECT * FROM quiz_status WHERE usuario_id='$exmneId' AND quiz_id='$ex_id' ");

                            $over = $selEx['ex_questlimit_display'];


                            @$score = $selScore->rowCount();
                            @$ans = $score / $over * 100;

                            ?>
                            <tr style="<?php
                                        if ($selAttempt->rowCount() == 0) {
                                            echo "background-color: #E9ECEE;color:black";
                                        } else if ($ans >= 90) {
                                            echo "background-color: yellow;";
                                        } else if ($ans >= 80) {
                                            echo "background-color: green;color:white";
                                        } else if ($ans >= 75) {
                                            echo "background-color: blue;color:white";
                                        } else {
                                            echo "background-color: red;color:white";
                                        }


                                        ?>">
                                <td>

                                    <?php echo $selExmneRow['exmne_fullname']; ?></td>

                                <td>
                                    <?php
                                    if ($selAttempt->rowCount() == 0) {
                                        echo "Not answer yet";
                                    } else if ($selScore->rowCount() > 0) {
                                        echo $totScore =  $selScore->rowCount();
                                        echo " / ";
                                        echo $over;
                                    } else {
                                        echo $totScore =  $selScore->rowCount();
                                        echo " / ";
                                        echo $over;
                                    }




                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($selAttempt->rowCount() == 0) {
                                        echo "Not answer yet";
                                    } else {
                                        echo $ans; ?>%<?php
                                                                }

                                                                    ?>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>



        <?php
        } else { ?>
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>RANKING</b></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Lista de quizes
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                                <tr>
                                    <th class="text-left pl-4">Quiz</th>
                                    <th class="text-left ">Categoría</th>
                                    <th class="text-left ">Descripción</th>
                                    <th class="text-center" width="8%">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $selExam = $conn->query("SELECT * FROM quiz_tb ORDER BY ex_id DESC ");
                                if ($selExam->rowCount() > 0) {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['ex_title']; ?></td>
                                            <td>
                                                <?php
                                                $courseId =  $selExamRow['cat_id'];
                                                $selCourse = $conn->query("SELECT * FROM categorias_tb WHERE cat_id='$courseId' ");
                                                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                    echo $selCourseRow['cat_nombre'];
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $selExamRow['ex_description']; ?></td>
                                            <td class="text-center">
                                                <a href="?page=ranking-exam&ex_id=<?php echo $selExamRow['ex_id']; ?>" class="btn btn-success btn-sm">Ver</a>
                                            </td>
                                        </tr>

                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="5">
                                            <h3 class="p-3">No hay resultados</h3>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <?php }

        ?>

    </div>