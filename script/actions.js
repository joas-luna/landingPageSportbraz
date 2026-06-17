document.getElementById('news-link').addEventListener('click', function(e) {
        e.preventDefault();
        
        // Verifica se está na página inicial
        if (window.location.pathname.includes('/pages/') || window.location.pathname.includes('\\pages\\')) {
            // Se estiver em outra página, redireciona para index.php com âncora
            window.location.href = '../index.php#news';
        } else {
            // Se já estiver na index, apenas faz scroll
            const newsSection = document.getElementById('news');
            if (newsSection) {
                newsSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });