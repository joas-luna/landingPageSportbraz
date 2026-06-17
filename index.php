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
    <header>
        <?php
            include './templates/header.php';
        ?>
    </header>
    <main>
        <aside id="home">

            <div id="imagem-topo">
                <img src="./img/Imagem-topo.png" alt="imagem de topo">
            </div>
            <h2>Valorizando o esporte brasileiro em todas as suas formas</h2>
            <p>O SportBraz é uma plataforma dedicada a dar visibilidade a atletas, projetos sociais e à cultura esportiva no Brasil — do esporte de base aos e-sports. Conectamos talentos, promovemos oportunidades e ampliamos o acesso à informação para quem deseja crescer no cenário esportivo.</p>
            <div class="buttons">
                <a href="./pages/mostrarAtletas.php" class="button">Explorar Atletas</a>
                <a href="./pages/mostrarProjetos.php" class="button">Conhecer Projetos</a>
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

        <section class="news" id="news">
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

                <img src="./img/futvolei.webp" alt="Futevôlei">
                
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

        <section class="diversidade">
            <h2>Brasil e sua diversidade</h2>

            <div class="capoeira">

                <article>
                    <h3>Capoeira</h3>
                    
                    <div class="video-container">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/dP3MiUTl-xs?start=58"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <p>
                        A Capoeira Angola é uma das mais importantes expressões da cultura afro-brasileira. Mais do que um esporte ou uma luta, ela representa história, resistência e identidade. Criada pelos povos africanos escravizados no Brasil, a Capoeira Angola surgiu como uma forma de preservar tradições, fortalecer a comunidade e resistir à opressão.
                        Caracterizada por movimentos estratégicos, ritmo cadenciado e forte conexão com a música, a Capoeira Angola valoriza a malícia, a criatividade e o diálogo corporal entre os jogadores. Ao som do berimbau, do pandeiro e das cantigas tradicionais, a roda se transforma em um espaço de aprendizado, respeito e expressão cultural.
                        Apesar de sua enorme importância histórica, a Capoeira Angola muitas vezes recebe menos visibilidade do que esportes mais populares. No entanto, ela continua sendo um símbolo de diversidade e inclusão, presente em comunidades, projetos sociais, escolas e centros culturais em todo o Brasil e no mundo.
                        Nas periferias brasileiras, a Capoeira Angola desempenha um papel fundamental na formação de crianças e jovens, promovendo disciplina, autoestima, consciência cultural e oportunidades de desenvolvimento social. Por meio dela, muitos encontram um espaço de pertencimento, convivência e valorização de suas raízes.
                        Ao conhecer e apoiar práticas como a Capoeira Angola, contribuímos para combater a indiferença no esporte e ampliar o reconhecimento de modalidades que carregam importantes histórias de luta, cultura e transformação social. Valorizar a Capoeira Angola é valorizar a diversidade do esporte brasileiro e a riqueza cultural que faz parte da nossa identidade.
                    </p>
                </article>

            </div>

            <div class="handebol">


                <article>

                    <h3>Handebol no Brasil</h3>

                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/EjSnEEpXWig"
                            title="Vídeo sobre o Handebol no Brasil"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <p>
                        O handebol chegou ao Brasil no início do século XX, trazido principalmente por imigrantes europeus, especialmente alemães, que se estabeleceram na região Sul do país. Com o passar dos anos, a modalidade ganhou espaço nas escolas e instituições de ensino, tornando-se um dos esportes mais praticados no ambiente escolar brasileiro. Apesar dessa presença constante na educação, o handebol ainda enfrenta desafios para conquistar o mesmo reconhecimento e investimento destinados a modalidades mais populares.
                    </p>

                    <p>
                        Dinâmico, estratégico e repleto de emoção, o handebol combina velocidade, trabalho em equipe e tomada rápida de decisões. Cada partida é marcada por jogadas intensas, ataques velozes e defesas espetaculares, criando um espetáculo esportivo capaz de prender a atenção de qualquer espectador. Ainda assim, muitas pessoas desconhecem a riqueza técnica e a competitividade que fazem do handebol um dos esportes coletivos mais fascinantes do mundo.
                    </p>

                    <p>
                        No Brasil, a modalidade já proporcionou importantes conquistas internacionais e revelou atletas de destaque, demonstrando que o país possui talento e potencial para competir entre as maiores potências do esporte. Entretanto, a falta de visibilidade na mídia e o baixo investimento em comparação com outras modalidades contribuem para a falsa ideia de que o handebol possui pouca relevância no cenário esportivo nacional.
                    </p>

                    <p>
                        Em escolas, projetos sociais e comunidades, o handebol desempenha um papel fundamental na formação de jovens, incentivando valores como disciplina, cooperação, respeito e superação. Sua prática promove inclusão e cria oportunidades para crianças e adolescentes desenvolverem habilidades físicas, sociais e emocionais, fortalecendo o esporte como ferramenta de transformação social.
                    </p>

                    <p>
                        Valorizar o handebol é ampliar o olhar sobre a diversidade esportiva brasileira. Ao conhecer sua história, suas conquistas e seu impacto social, percebemos que existem modalidades extraordinárias além das mais tradicionais. Dar visibilidade ao handebol é combater a indiferença no esporte e despertar a curiosidade por uma prática que continua formando atletas, inspirando jovens e construindo histórias de dedicação em todo o país.
                    </p>

                </article>

            </div>

            <div class="jiu-jitsu">

                <article>

                    <h3>Jiu-Jitsu Brasileiro</h3>

                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/fdzTPkxbivU"
                            title="Vídeo sobre Jiu-Jitsu Brasileiro"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <p>
                        O Jiu-Jitsu Brasileiro é uma das modalidades esportivas mais reconhecidas do país no cenário internacional. Desenvolvido no Brasil a partir de adaptações de técnicas japonesas de luta, o esporte se tornou um símbolo de estratégia, disciplina e superação. Ao longo dos anos, o Jiu-Jitsu conquistou milhões de praticantes em diversos países, levando o nome do Brasil para os maiores eventos de artes marciais do mundo.
                    </p>

                    <p>
                        Diferente de modalidades que dependem principalmente da força física, o Jiu-Jitsu valoriza a técnica, a inteligência e o uso eficiente do corpo. Seus praticantes aprendem a controlar o adversário por meio de alavancas, imobilizações e finalizações, demonstrando que conhecimento e estratégia podem superar diferenças de tamanho e força.
                    </p>

                    <p>
                        Além do aspecto competitivo, o Jiu-Jitsu tem desempenhado um importante papel social em diversas comunidades brasileiras. Academias, projetos esportivos e iniciativas sociais utilizam a modalidade como ferramenta de inclusão, ajudando crianças e jovens a desenvolver disciplina, respeito, autocontrole e confiança.
                    </p>

                    <p>
                        Nas periferias do Brasil, o esporte frequentemente representa uma oportunidade de transformação de vida. Muitos atletas encontraram no Jiu-Jitsu um caminho para o crescimento pessoal e profissional, fortalecendo valores como persistência, dedicação e responsabilidade. O esporte também promove um forte senso de comunidade, criando ambientes de apoio e desenvolvimento para seus praticantes.
                    </p>

                    <p>
                        Valorizar o Jiu-Jitsu Brasileiro é reconhecer a riqueza da diversidade esportiva nacional. Mais do que uma luta, ele é uma expressão de cultura, esforço e superação que inspira pessoas de diferentes idades e origens. Ao dar visibilidade a modalidades como essa, contribuímos para combater a indiferença no esporte e ampliar o acesso a oportunidades que transformam vidas.
                    </p>

                

                </article>

            </div>

            <div class="surfe">

                <article>
                    <h3>Surfe Brasileiro</h3>

                    <div class="video-container">
                        <iframe
                            src="https://www.youtube.com/embed/ZE5qcFZoCy0"
                            title="Vídeo sobre Surfe Brasileiro"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <p>
                        O surfe brasileiro é muito mais do que um esporte praticado no mar. Ele representa a conexão entre o ser humano e a natureza, além de ser uma história de dedicação, superação e conquista. Ao longo das últimas décadas, o Brasil se consolidou como uma das maiores potências do surfe mundial, revelando atletas que conquistaram títulos internacionais e inspiraram milhões de pessoas.
                    </p>

                    <p>
                        Caracterizado pelo equilíbrio, pela técnica e pela leitura das ondas, o surfe exige preparo físico, disciplina e coragem. Cada onda apresenta um novo desafio, tornando a prática uma experiência única que combina esporte, estratégia e respeito ao meio ambiente. Essa relação com a natureza é um dos aspectos que tornam o surfe uma modalidade tão admirada em todo o mundo.
                    </p>

                    <p>
                        Embora seja frequentemente associado às praias mais famosas do país, o surfe também tem se tornado uma ferramenta de inclusão social. Projetos esportivos e iniciativas comunitárias oferecem oportunidades para crianças e jovens de diferentes realidades, promovendo valores como perseverança, responsabilidade e trabalho em equipe.
                    </p>

                    <p>
                        O crescimento do surfe brasileiro demonstra como modalidades menos tradicionais podem transformar vidas e abrir novos horizontes. Além das competições e conquistas, o esporte contribui para a conscientização ambiental e incentiva hábitos saudáveis, fortalecendo a relação entre esporte, cidadania e qualidade de vida.
                    </p>

                    <p>
                        Ao valorizar o surfe brasileiro, ampliamos o reconhecimento da diversidade esportiva existente no país e combatemos a ideia de que apenas os esportes mais populares merecem atenção. O surfe é um exemplo de como paixão, esforço e oportunidade podem criar histórias inspiradoras dentro e fora das ondas.
                    </p>

                </article>

            </div>



        </section>

        <section class="periferia">
                <h2>Esporte na periferia</h2>

                <div class="video-container">
                    <iframe
                        src="https://www.youtube.com/embed/tNWMIm17y1Y"
                        title="A IMPORTÂNCIA DO ESPORTE NAS FAVELAS E PERIFERIAS"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
    
                <p>
                    O esporte é uma ferramenta poderosa de transformação social, especialmente nas periferias brasileiras. 
                    Em comunidades onde o acesso a oportunidades é limitado, o esporte oferece um caminho para o desenvolvimento 
                    pessoal, a inclusão social e a construção de um futuro melhor. Projetos esportivos comunitários têm se 
                    multiplicado em favelas e bairros periféricos, proporcionando a jovens talentos a chance de se destacar e 
                    alcançar seus sonhos. Além disso, o esporte promove valores como disciplina, trabalho em equipe e resiliência, 
                    contribuindo para a formação de cidadãos mais conscientes e engajados. O investimento em infraestrutura esportiva 
                    e programas de treinamento nessas áreas é fundamental para garantir que o potencial dos jovens seja plenamente 
                    explorado, transformando vidas e fortalecendo comunidades inteiras.
                </p>
        </section>

    </main>

    <footer class="footer">
        <?php
            include './templates/footer.php';
        ?>
    </footer>
</body>
</html>