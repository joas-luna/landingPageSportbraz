<?php
$dataFile = __DIR__ . '/../script/atletas.json';
$athletes = [];
$errorMessage = '';

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $decoded = json_decode($json, true);

    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
        $athletes = $decoded;
    } else {
        $errorMessage = 'Erro ao carregar os dados dos atletas. Verifique o arquivo JSON.';
    }
} else {
    $errorMessage = 'Arquivo de dados dos atletas não encontrado.';
}

function resolveImagePath(string $relativePath): string
{
    if (empty($relativePath)) return '../img/atletas-placeholder.png';
    if (strpos($relativePath, '/') === 0) return $relativePath;
    return '../' . ltrim($relativePath, './');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../img/logotipo-1.png" type="image/x-icon">
<link rel="stylesheet" href="../styles/template-styles/header.css">
<title>Atletas em Destaque | SportBraz</title>

<style>

/* =========================
   ROOT
========================= */

:root{
    --bg: #0b1220;
    --card: #111827;
    --card2: #0f172a;

    --text: #ffffff;
    --muted: #b6c2d9;

    --border: rgba(255,255,255,0.08);

    --green: #39d353;
    --blue: #38bdf8;

    --shadow: 0 20px 50px rgba(0,0,0,0.35);
}

/* =========================
   RESET
========================= */

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    font-family: Arial, sans-serif;
    background: linear-gradient(180deg, #070b1a, #111827, #0f172a);
    color: var(--text);
}


/* =========================
   MAIN
========================= */

main{
    max-width: 1200px;
    margin: auto;
    padding: 40px 20px;
}

/* =========================
   INTRO
========================= */

.intro{
    background: rgba(17,24,39,0.7);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 35px;
    box-shadow: var(--shadow);
}

.intro h1{
    font-size: 2.8rem;
    margin-bottom: 10px;
}

.intro p{
    color: var(--muted);
    line-height: 1.6;
}

/* =========================
   STATS
========================= */

.stats{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 15px;
    margin-top: 25px;
}

.stat-card{
    background: linear-gradient(145deg, var(--card), var(--card2));
    border: 1px solid var(--border);
    padding: 20px;
    border-radius: 18px;
    text-align: center;
}

.stat-card span{
    display: block;
    color: var(--muted);
    margin-bottom: 10px;
}

.stat-card strong{
    font-size: 1.8rem;
    color: var(--green);
}

/* =========================
   GRID
========================= */

.athlete-grid{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 25px;
    margin-top: 40px;
}

/* =========================
   CARD
========================= */

.athlete-card{
    background: linear-gradient(145deg, var(--card), var(--card2));
    border: 1px solid var(--border);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: .3s ease;
}

.athlete-card:hover{
    transform: translateY(-8px);
    border-color: rgba(56,189,248,0.4);
}

/* IMAGE */

.athlete-card figure{
    height: 260px;
    overflow: hidden;
}

.athlete-card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s ease;
}

.athlete-card:hover img{
    transform: scale(1.05);
}

/* CONTENT */

.card-body{
    padding: 20px;
}

.card-body h2{
    font-size: 1.4rem;
    margin-bottom: 10px;
}

.card-body p{
    color: var(--muted);
    font-size: .95rem;
    line-height: 1.6;
}

/* META */

.athlete-meta{
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
    gap: 10px;
}

.athlete-meta span{
    background: rgba(255,255,255,0.05);
    padding: 8px 12px;
    border-radius: 999px;
    color: var(--muted);
    font-size: .85rem;
}

/* =========================
   ERROR
========================= */

.message-box{
    margin-top: 20px;
    padding: 15px;
    border-radius: 12px;
    background: rgba(255,0,0,0.1);
    border: 1px solid rgba(255,0,0,0.3);
    color: #ffb4b4;
}

/* =========================
   FOOTER
========================= */

.footer{
    text-align: center;
    padding: 30px;
    margin-top: 50px;
    border-top: 1px solid var(--border);
    color: var(--muted);
}

/* =========================
   RESPONSIVO
========================= */

@media (max-width: 900px){
    .athlete-grid,
    .stats{
        grid-template-columns: 1fr 1fr;
    }

    .intro h1{
        font-size: 2rem;
    }
}

@media (max-width: 600px){
    .athlete-grid,
    .stats{
        grid-template-columns: 1fr;
    }
}
</style>

</head>

<body>

<header>
    <?php include __DIR__ . '/../templates/header.php'; ?>
</header>

<main>

<section class="intro">
    <div>
        <h1>Atletas em destaque</h1>
        <p>Dados carregados via JSON para facilitar atualização sem mexer no código.</p>
    </div>

    <div class="stats">
        <div class="stat-card">
            <span>Atletas</span>
            <strong><?= count($athletes) ?></strong>
        </div>
        <div class="stat-card">
            <span>Fonte</span>
            <strong>JSON</strong>
        </div>
        <div class="stat-card">
            <span>Layout</span>
            <strong>Responsivo</strong>
        </div>
    </div>
</section>

<?php if ($errorMessage): ?>
    <div class="message-box">
        <?= htmlspecialchars($errorMessage) ?>
    </div>
<?php endif; ?>

<section class="athlete-grid">

<?php foreach ($athletes as $athlete): ?>
    <article class="athlete-card">

        <figure>
            <img src="<?= htmlspecialchars(resolveImagePath($athlete['imagem'] ?? '')) ?>"
                 alt="<?= htmlspecialchars($athlete['nome'] ?? 'Atleta') ?>">
        </figure>

        <div class="card-body">

            <h2><?= htmlspecialchars($athlete['nome'] ?? 'Atleta') ?></h2>

            <p><?= htmlspecialchars($athlete['descricao'] ?? '') ?></p>

            <div class="athlete-meta">
                <span><?= htmlspecialchars($athlete['esporte'] ?? '-') ?></span>
                <span><?= intval($athlete['idade'] ?? 0) ?> anos</span>
                <span>#<?= intval($athlete['id'] ?? 0) ?></span>
            </div>

        </div>

    </article>
<?php endforeach; ?>

</section>

</main>

<footer class="footer">
    SportBraz © <?= date('Y') ?>
</footer>

</body>
</html>