<div class="app-main__outer">
    <div id="refreshData">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">

                        <div>Panel administrador
                        </div>
                    </div>
                    <div class="page-title-actions">


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Categorías</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Quizes</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div>Categorías</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Lista de categorías
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                <thead>
                                    <tr>
                                        <th class="text-left pl-4">Categoría</th>
                                        <th class="text-center" width="20%">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $selCourse = $conn->query("SELECT * FROM categorias_tb ORDER BY cat_id DESC ");
                                    if ($selCourse->rowCount() > 0) {
                                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td class="pl-4">
                                                    <?php echo $selCourseRow['cat_nombre']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <a rel="facebox" style="text-decoration: none;" class="btn btn-primary btn-sm" href="facebox_modal/updateCourse.php?id=<?php echo $selCourseRow['cat_id']; ?>" id="updateCourse">Editar</a>
                                                    <button type="button" id="deleteCourse" data-id='<?php echo $selCourseRow['cat_id']; ?>' class="btn btn-danger btn-sm">Borrar</button>
                                                </td>
                                            </tr>

                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="2">
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


            </div>



        </div>

    </div>