<?php if(isset($_SESSION['auth_user'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js"></script>
    <link rel="shortcut icon" href="<?= asset('images/cit.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= asset('build/styles.css') ?>">
    <title>Menú</title>
</head>
<body class="bg-image bg-opacity-50">
    <div class="bg-light bg-opacity-10 w-100" style="height: 100vh;">
        <div class="container-fluid pt-5 mb-4">
            <h2 class="text-center mb-4 text-primary">Menú</h2>
            
            <div class="d-grid">
                <button  class="btn btn-primary"  id="cerrarsesion">Cerrar Sesión</button>
            </div>
        </div>
    </div>
</body>
</html>

<?php }

else{

    header("Location: /login/");
}

?>

<script src="<?= asset('./build/js/menu/index.js') ?>"></script>