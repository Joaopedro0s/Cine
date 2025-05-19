<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CineClub</title>
  <link rel="stylesheet" href="{{ url('/css/app.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="menu-icon">☰</div>
    <div class="logo">
      <img src="{{ url('/images/cineclublogo.png') }}" alt="Logo CineClub" />
    </div>
    <nav>
      <ul>
        <li><a href="#">Filmes</a></li>
        <li><a href="#">Séries</a></li>
        <li><a href="#">Entrar</a></li>
        <li><a href="#">Criar uma conta</a></li>
      </ul>
    </nav>
    <div class="search-box">
      <input type="text" placeholder="Pesquisar..." />
      <button>🔍</button>
    </div>
  </header>

  <main>
    <div class="banner-container">
      <div class="carrossel-wrapper">
        <div class="banner" id="carrossel">
          <!-- Slides serão inseridos pelo JavaScript -->
        </div>
        <!-- Controles do carrossel -->
        <button class="carrossel-controle prev" aria-label="Slide anterior">❮</button>
        <button class="carrossel-controle next" aria-label="Próximo slide">❯</button>
        <div class="carrossel-indicators"></div>
      </div>
      <div class="content">
        <p>
          <strong>
            Descubra, avalie e compartilhe<br />
            suas paixões pelo cinema e séries<br />
            com a nossa comunidade!
          </strong>
        </p>
        <button class="start-btn">COMECE AGORA</button>
      </div>
    </div>
  </main>

  <footer>
    <p>
      Sua crítica, seu cinema. Também disponível em
      <img src="{{ url('/images/android1.png') }}" alt="Android" class="icon" />
      <img src="{{ url('/images/apple1.png') }}" alt="Apple" class="icon" />
    </p>
  </footer>

  <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
