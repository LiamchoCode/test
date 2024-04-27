<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-srca"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"><a href="home.php">Dashboard</a></li>

                <li class="app-sidebar__heading">Ver Categorías</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Categorías
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForAddCourse">
                                <i class="metismenu-icon"></i>
                                Añadir Categoría
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-course">
                                <i class="metismenu-icon">
                                </i>Ver Categoría
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="app-sidebar__heading">Ver quizes</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Quizes
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForExam">
                                <i class="metismenu-icon"></i>
                                Añadir Quiz
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-exam">
                                <i class="metismenu-icon">
                                </i>Ver Quiz
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="app-sidebar__heading">Ver usuarios</li>
                <li>
                    <a href="" data-toggle="modal" data-target="#modalForAddExaminee">
                        <i class="metismenu-icon pe-7s-add-user">
                        </i>Añadir usuario
                    </a>
                </li>
                <li>
                    <a href="home.php?page=manage-examinee">
                        <i class="metismenu-icon pe-7s-users">
                        </i>Ver usuarios
                    </a>
                </li>
                <li class="app-sidebar__heading">RANKING</li>
                <li>
                    <a href="home.php?page=ranking-exam">
                        <i class="metismenu-icon pe-7s-cup">
                        </i>Puntajes
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>