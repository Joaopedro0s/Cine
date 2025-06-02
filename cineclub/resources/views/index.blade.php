<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineCríticas</title>
<link rel="stylesheet" href="{{ url('/css/style.css') }}" />
</head>
<body>
  <header>
    <h1>CineCríticas</h1>
    <nav>
    <a href="{{ url('/teste') }}">Início</a>
    <a href="#">Lançamentos</a>
      <a href="#">Mais bem avaliados</a>
      <a href="#">Contato</a>
    </nav>
  </header>

  <section class="destaque">
    <div class="destaque-info">
      <h2>Filme em Destaque: O Som do Silêncio</h2>
      <p>Uma jornada poderosa pela resiliência humana em meio à perda auditiva. Uma obra emocional e cinematograficamente rica.</p>
      <div class="estrelas">★★★★☆</div>
    </div>
    <img src="filmes/destaque.jpg" alt="Filme em destaque">
  </section>

  <main class="grid-filmes">
    <article class="filme">
      <img src="filmes/oppenheimer.jpg" alt="Oppenheimer">
      <h3>Oppenheimer</h3>
      <p>Visualmente impactante, com atuação impecável de Cillian Murphy. Um épico histórico moderno.</p>
      <div class="estrelas">★★★★★</div>
    </article>

    <article class="filme">
      <img src="filmes/barbie.jpg" alt="Barbie">
      <h3>Barbie</h3>
      <p>Colorido, divertido e surpreendentemente profundo. Um filme que brinca com estereótipos e entrega reflexão.</p>
      <div class="estrelas">★★★★☆</div>
    </article>

    <article class="filme">
      <img src="filmes/duna2.jpg" alt="Duna Parte 2">
      <h3>Duna: Parte 2</h3>
      <p>Uma continuação épica que supera o primeiro filme. Visualmente magnífico e narrativamente envolvente.</p>
      <div class="estrelas">★★★★☆</div>
    </article>
    
  </main>

  <footer>
    <p>&copy; 2025 CineCríticas. Todos os direitos reservados.</p>
  </footer>
      <script src="{{ url('/js/script.js') }}"></script>
</body>
</html>
