<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Biblioteca</title>
  <link rel="stylesheet" href="./styles/index.css" />
</head>

<body>
  <nav class="nav">
    <ul>
      <li><a href="./index.php">Home</a></li>
      <?php if (isset($_SESSION['user_id'])): ?>
        <li><a href="./profile.php">Perfil</a></li>
          <?php else: ?>
        <li><a href="./entrar.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </nav>

  <main>
    <h1>Biblioteca Virtual</h1>

    <section class="book-list">
      <div class="book">
        <img src="https://cdn.awsli.com.br/2500x2500/377/377576/produto/176546737/c7c600f2d3.jpg" alt="Capa do Livro: os segredos do código" />
        <h3>O Segredo do Código</h3>
        <p class="category">Categoria: Ficção</p>
        <div class="description">
          <p>Uma história envolvente sobre um jovem que descobre um código milenar capaz de mudar o rumo da humanidade.</p>
        </div>
        <button onclick="openModal(this)">Ler mais</button>
      </div>

      <div class="book">
        <img src="https://m.media-amazon.com/images/I/71OTY6OqoFL._AC_UF1000,1000_QL80_.jpg" alt="Capa do Livro: introdução ao PHP" />
        <h3>Introdução ao PHP</h3>
        <p class="category">Categoria: Tecnologia</p>
        <div class="description">
          <p>Este livro apresenta os fundamentos da linguagem PHP de forma prática e acessível, ideal para iniciantes.</p>
        </div>
        <button onclick="openModal(this)">Ler mais</button>
      </div>

      <div class="book">
        <img src="https://m.media-amazon.com/images/I/710g3hkh7HL._AC_UF1000,1000_QL80_DpWeblab_.jpg" alt="Capa do Livro: o poder da mente" />
        <h3>O Poder da Mente</h3>
        <p class="category">Categoria: Autoajuda</p>
        <div class="description">
          <p>Descubra como transformar sua mentalidade para alcançar objetivos e realizar mudanças duradouras na vida.</p>
        </div>
        <button onclick="openModal(this)">Ler mais</button>
      </div>
    </section>
  </main>

  <footer>
    <p>Desenvolvido por: Murilo Silva Ⓡ</p>
  </footer>

  <dialog id="descriptionModal">
    <h3 id="modalTitle"></h3>
    <p id="modalContent"></p>
    <button onclick="closeModal()">Fechar</button>
  </dialog>

  <script>
    function openModal(button) {
      const book = button.closest('.book');
      const title = book.querySelector('h3').textContent;
      const description = book.querySelector('.description p').textContent;

      document.getElementById('modalTitle').textContent = title;
      document.getElementById('modalContent').textContent = description;

      const modal = document.getElementById('descriptionModal');
      modal.showModal();
    }

    function closeModal() {
      document.getElementById('descriptionModal').close();
    }
  </script>
</body>

</html>
