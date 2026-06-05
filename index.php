<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logotipo-1.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/template-styles/header.css">
    <link rel="stylesheet" href="styles/template-styles/footer.css">
    <title>SportBraz</title>
</head>
<body>
    <?php include_once './templates/header.php'; ?>

    <?php 
        if(isset($_GET['page'])) {
            if($_GET['page']) {
                include_once "./templates/" . $_GET['page'] . ".php";
            } else {
                header("Location: ./?page=home&message=Página não encontrada!");
            }
        } else {
            include_once "./templates/home.php";
        }
    ?>
    
    <?php include_once './templates/footer.html'; ?>
</body>
</html>

<?php exit;