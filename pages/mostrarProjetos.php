<?php
$dataFile = __DIR__ . '/../script/projetos.json';
$projects = [];
$errorMessage = '';

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $decoded = json_decode($json, true);

    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
        $projects = $decoded;
    } else {
        $errorMessage = 'Erro ao carregar os dados dos projetos. Verifique o arquivo JSON.';
    }
} else {
    $errorMessage = 'Arquivo de dados dos projetos não encontrado.';
}

function resolveImagePath(string $relativePath): string
{
    if (empty($relativePath)) {
        return '../img/futebol-destaques.avif';
    }
    if (strpos($relativePath, '/') === 0) {
        return $relativePath;
    }
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
<link rel="stylesheet" href="../styles/template-styles/footer.css">
<title>Projetos em Destaque | SportBraz</title>

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
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
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
    width: 100%;
    max-width: 960px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
}

.intro h1{
    font-size: 2.6rem;
    margin-bottom: 0;
}

.intro p{
    color: var(--muted);
    line-height: 1.6;
    max-width: 760px;
}

/* =========================
   STATS
========================= */

.stats{
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 15px;
    margin-top: 25px;
    width: 100%;
    max-width: 960px;
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

.project-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 40px;
    align-items: start;
}

/* =========================
   CARD
========================= */

.project-card{
    display: flex;
    flex-direction: column;
    background: linear-gradient(145deg, var(--card), var(--card2));
    border: 1px solid var(--border);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: .3s ease, border-color .3s ease;
    text-decoration: none;
    color: inherit;
    min-height: 100%;
}

.project-card:hover{
    transform: translateY(-8px);
    border-color: rgba(56,189,248,0.4);
}

/* IMAGE */

.project-card figure{
    height: 240px;
    overflow: hidden;
}

.project-card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s ease;
}

.project-card:hover img{
    transform: scale(1.05);
}

.project-card .card-body{
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    flex: 1;
}

.project-title{
    font-size: 1.55rem;
    margin-bottom: 8px;
}

.project-description{
    color: var(--muted);
    font-size: .96rem;
    line-height: 1.7;
    margin: 0;
    flex: 1;
}

.project-footer{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 8px;
}

.project-button{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 8px 14px;
    background: rgba(56,189,248,0.16);
    color: var(--blue);
    border-radius: 999px;
    border: 1px solid rgba(56,189,248,0.25);
    font-size: .82rem;
    transition: background .2s ease, transform .2s ease;
}

.project-card:hover .project-button{
    background: rgba(56,189,248,0.24);
    transform: translateY(-1px);
}

/* META */

.project-meta{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    width: 100%;
}

.project-meta span{
    background: rgba(255,255,255,0.05);
    padding: 6px 10px;
    border-radius: 999px;
    color: var(--muted);
    font-size: .78rem;
    line-height: 1.3;
    flex: 1 1 110px;
    min-width: 90px;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ERROR */

.message-box{
    margin-top: 20px;
    padding: 15px;
    border-radius: 12px;
    background: rgba(255,0,0,0.1);
    border: 1px solid rgba(255,0,0,0.3);
    color: #ffb4b4;
}

/* RESPONSIVO */

@media (max-width: 900px){
    .project-grid,
    .stats{
        grid-template-columns: 1fr 1fr;
    }

    .intro h1{
        font-size: 2rem;
    }
}

@media (max-width: 600px){
    .project-grid,
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
        <h1>Projetos em destaque</h1>
        <p>Dados carregados via JSON para facilitar atualização sem mexer no código.</p>
    </div>

    <div class="stats">
        <div class="stat-card">
            <span>Projetos</span>
            <strong><?= count($projects) ?></strong>
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

<section class="project-grid">

<?php foreach ($projects as $project): ?>
    <?php $projectUrl = trim($project['site'] ?? ''); ?>
    <a class="project-card" href="<?= htmlspecialchars($projectUrl ?: '#') ?>" target="_blank" rel="noopener noreferrer">

        <figure>
            <img src="<?= htmlspecialchars(resolveImagePath($project['imagem'] ?? '')) ?>"
                 alt="<?= htmlspecialchars($project['nome'] ?? 'Projeto') ?>">
        </figure>

        <div class="card-body">

            <h2 class="project-title"><?= htmlspecialchars($project['nome'] ?? 'Projeto') ?></h2>

            <p class="project-description"><?= htmlspecialchars($project['descricao'] ?? '') ?></p>

            <div class="project-meta">
                <span><?= htmlspecialchars($project['localidade'] ?? '-') ?></span>
                <span><?= htmlspecialchars($project['rede-social'] ?? '-') ?></span>
                <span>#<?= intval($project['id'] ?? 0) ?></span>
            </div>

            <div class="project-footer">
                <span class="project-button">Visitar ONG</span>
                <span><?= htmlspecialchars($projectUrl ? parse_url($projectUrl, PHP_URL_HOST) : 'Sem site') ?></span>
            </div>

        </div>

    </a>
<?php endforeach; ?>

</section>

</main>

    <footer class="footer">
        <?php include __DIR__ . '/../templates/footer.php'; ?>
    
    </footer>
</body>
</html>
