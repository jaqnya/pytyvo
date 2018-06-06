<?php
include_once 'app/config.inc.php';
include_once 'app/SessionControl.inc.php';
include_once 'app/Redirection.inc.php';

if (!SessionControl::session_started()) {
    Redirection::redirect(ROUTE_SIGNIN);
}

include_once 'templates/document-declaration.inc.php';
include_once 'templates/navbar.inc.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo SERVER; ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?php echo ROUTE_ADMINISTRATION; ?>">Gesti&#243;n</a></li>
        <li class="breadcrumb-item"><a href="<?php echo ROUTE_ADMINISTRATION_SETUP; ?>">Definiciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">General</li>
    </ol>
</nav>

<div class="container rounded">
    <div class="row p-4" style="background: white;">
        <div class="col-md-12">
            <a class="quick-btn" href="#">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Usuarios</span>
            </a>
            <a class="quick-btn" href="<?php echo ROUTE_ADMINISTRATION_SETUP_GENERAL_COUNTRY; ?>">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Pa&#237;ses</span>
            </a>
            <a class="quick-btn" href="#">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Departamentos</span>
            </a>
            <a class="quick-btn" href="#">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Ciudades</span>
            </a>
            <a class="quick-btn" href="#">
                <i class="far fa-window-maximize" style="font-size: 1.5rem;"></i>
                <span>Barrios</span>
            </a>
        </div>
    </div>
</div>

<?php
include_once 'templates/document-close.inc.php';
?>