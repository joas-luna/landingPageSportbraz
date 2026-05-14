<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/mostrarAtletas.css">
    <link rel="stylesheet" href="../styles/template-styles/header.css">
    <link rel="stylesheet" href="../styles/template-styles/footer.css">
    <title>Atletas SportBraz</title>
</head>
<body>
    <header>
        <?php include '../templates/header.php'; ?>
    </header>

    <main class="atletas-page">
        <section class="atletas-hero">
            <h1>Atletas em destaque</h1>
            <p>Conheça alguns dos talentos brasileiros que fazem parte da nossa plataforma.</p>
        </section>

        <section class="atletas-list">
            <article class="atleta-card">
                <img src="../img/filipe_toledo.webp" alt="Filipe Toledo">
                <div class="atleta-card-content">
                    <h2>Filipe Toledo</h2>
                    <p>Surfista brasileiro, campeão internacional e referência no circuito mundial.</p>
                </div>
            </article>

            <article class="atleta-card">
                <img src="../img/atleta3.jpg" alt="Mariana Costa">
                <div class="atleta-card-content">
                    <h2>Mariana Costa</h2>
                    <p>Destaque do futsal feminino, inspirando jovens e fortalecendo o esporte nacional.</p>
                </div>
            </article>
        </section>
    </main>

    <footer>
        <?php include '../templates/footer.html'; ?>
    </footer>
</body>
</html>