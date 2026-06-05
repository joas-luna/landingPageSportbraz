<main>
    <?php if(isset($_GET['message'])):?>
        <?php if($_GET['message']):?>
            <h1><?= $_GET['message'] ?></h1>
        <?php endif?>
    <?php endif?>

    <aside id="home">

        <div id="imagem-topo">
            <img src="./img/Imagem-topo.png" alt="imagem de topo">
        </div>
        <h2>Valorizando o esporte brasileiro em todas as suas formas</h2>
        <p>O SportBraz é uma plataforma dedicada a dar visibilidade a atletas, projetos sociais e à cultura esportiva no Brasil — do esporte de base aos e-sports. Conectamos talentos, promovemos oportunidades e ampliamos o acesso à informação para quem deseja crescer no cenário esportivo.</p>
        <div class="buttons">
            <a href="/about" class="button">Explorar Atletas</a>
            <a href="/contact" class="button">Conhecer Projetos</a>
        </div>

    </aside>

    <section class="sports">
        <h2>Modalidades em destaque</h2>

        <div class="cards">
            <div class="card">
                <img src="./img/futebol-destaques.avif" alt="">
                <h3>Futebol</h3>
            </div>

            <div class="card">
                <img src="./img/volei-destaque.jpg" alt="">
                <h3>Vôlei</h3>
            </div>

            <div class="card">
                <img src="./img/esport-destaque.webp" alt="">
                <h3>E-sports</h3>
            </div>
        </div>
    </section>

    <section class="numbers">
        <div class="number-box">
            <h2>+500</h2>
            <p>Atletas cadastrados</p>
        </div>

        <div class="number-box">
            <h2>+120</h2>
            <p>Projetos esportivos</p>
        </div>

        <div class="number-box">
            <h2>27</h2>
            <p>Estados alcançados</p>
        </div>
    </section>

    <section class="news">
        <h2>Últimas notícias</h2>

        <article>
            <div class="video-container">
                <iframe 
                    src="https://www.youtube.com/embed/RDB7cvTNLQ8"
                    title="YouTube video player"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
            <h3>IEM Rio 2026 | CS2</h3>
            <p>A IEM Rio 2026 entregou uma das finais mais intensas da história recente do Counter-Strike. 
                O confronto entre Team Spirit e Team Vitality transformou a arena em um verdadeiro espetáculo 
                para os fãs brasileiros de e-sports. A Team Spirit chegou à grande final mostrando um estilo 
                agressivo e extremamente coordenado, apostando em jogadas rápidas e domínio mecânico. 
                Já a Vitality entrou como uma das equipes mais consistentes do campeonato, trazendo experiência, 
                controle tático e uma defesa quase impecável nos mapas decisivos. O duelo ficou marcado por rounds
                equilibrados, viradas inesperadas e clutchs decisivos que levantaram a torcida do início ao fim.
                A atmosfera no Rio de Janeiro mostrou mais uma vez porque o Brasil é considerado um dos maiores
                palcos do Counter-Strike mundial. Além da competição, a final reforçou o crescimento dos e-sports
                no Brasil, atraindo milhares de espectadores presencialmente e milhões acompanhando online.
                Eventos como a IEM Rio ajudam a consolidar o cenário competitivo brasileiro como referência global
                no entretenimento digital e esportivo.</p>
        </article>
    </section>

    <section class="esports-banner">
        <div class="content">
            <h2>Futevôlei também é esporte</h2>

            <img src="./img/futevolei.webp" alt="Futevôlei">
            
            <p>
                Criado nas praias do Rio de Janeiro na década de 1960, o futevôlei mistura elementos
                do futebol e do vôlei em uma combinação extremamente técnica e física. Os jogadores usam
                apenas pés, cabeça, peito e ombros para manter a bola no ar e ultrapassar a rede,
                sem poder utilizar as mãos.
            </p>

            <p>
                O que muita gente não percebe é o nível de preparo exigido pela modalidade.
                Reflexo rápido, coordenação motora, resistência física, impulsão e controle corporal
                são fundamentais. Em partidas profissionais, os atletas executam movimentos acrobáticos
                e jogadas aéreas que exigem anos de treinamento.
            </p>

            <p>
                Além do espetáculo visual, o futevôlei se tornou parte da cultura esportiva brasileira,
                principalmente nas regiões litorâneas. Hoje, o esporte cresce internacionalmente
                e já possui torneios profissionais, atletas patrocinados e campeonatos transmitidos
                pela internet.
            </p>
        </div>
    </section>

    <section class="athletes">
        <h2>Atletas em destaque</h2>

        <div class="athlete-card">
            <img src="./img/atleta1.jpg" alt="">
            <h3>Lucas Andrade</h3>
            <p>Jogador profissional de vôlei de praia</p>
        </div>
    </section>

    <section class="cta">
        <h2>Faça parte do SportBraz</h2>
        <p>Descubra atletas, projetos e o futuro do esporte brasileiro.</p>
    
        <a href="#" class="button">Começar agora</a>
    </section>
</main>
