<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require_once('./app/views/inc/head.php'); 
    ?>

</head>
<body>

    <?php 
        require_once('./app/views/inc/navlateral.php');
        require_once('./app/views/inc/nav.php');
    ?>
        <div class="container-fluid">
            <div class="page-header">
              <h1 class="all-tittles"><small>Inicio</small></h1>
            </div>

            <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-case"></i></div>
                <div class="tile-name all-tittles">administracion</div>
                <div class="tile-num full-reset">7</div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                <div class="tile-name all-tittles">Gestión de usuarios</div>
                <div class="tile-num full-reset">70</div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-o"></i></div>
                <div class="tile-name all-tittles">nueva solicitud</div>
                <div class="tile-num full-reset">11</div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar-note"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">seguimiento de solicitud</div>
                <div class="tile-num full-reset">17</div>
            </article>
            <!-- <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles">base de datos</div>
                <div class="tile-num full-reset">521</div>
            </article> -->
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles">estadisticas</div>
                <div class="tile-num full-reset">21</div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-wrench"></i></div>
                <div class="tile-name all-tittles">configuracion</div>
                <div class="tile-num full-reset">77</div>
            </article>
        </section>
        </div>
    </div>
</body>
</html>