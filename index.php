<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logotipo-1.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
    <title>SportBraz</title>
</head>
<body>
    <header>
        <?php
            include './templates/header.php';
        ?>
    </header>
    <main>
        <aside id="home">
            <h2>Valorizando o esporte brasileiro em todas as suas formas</h2>
            <p>O SportBraz é uma plataforma dedicada a dar visibilidade a atletas, projetos sociais e à cultura esportiva no Brasil — do esporte de base aos e-sports. Conectamos talentos, promovemos oportunidades e ampliamos o acesso à informação para quem deseja crescer no cenário esportivo.</p>
            <div class="buttons">
                <a href="/about" class="button">Explorar Atletas</a>
                <a href="/contact" class="button">Conhecer Projetos</a>
            </div>
        </aside>
    </main>
    <footer>
        <?php
            include './templates/footer.html';
        ?>
    </footer>
</body>
</html>