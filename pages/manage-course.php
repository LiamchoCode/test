<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
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
                                            <button type="button" data-toggle="modal" data-target="#updateCourse-<?php echo $selCourseRow['cat_id']; ?>" class="btn btn-primary btn-sm">Editar</button>
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