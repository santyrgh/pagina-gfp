<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/contenido/m_usuario.css') ?>">

    <title>Manual de usuario</title>
</head>
<body>
<div class="contenedor">
        <div class="prin">
            <!-- navbar -->
            <div class="navbar__container">
                <?= view('componentes/navbar')?>
            </div>
            <!-- contenido -->
            <div class="title">
                manual de usuario
            </div>
                
        </div>

        <!-- footer -->
        <div class="footer_container">
            <?= view('componentes/footer')?>
        </div>
    </div>
</body>
</html>