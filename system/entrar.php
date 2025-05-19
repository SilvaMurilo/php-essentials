<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Biblioteca</title>
  <link rel="stylesheet" href="./styles/entrar.css" />
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
    <div class="signin-container">
      <form class="signin-form" method="POST" action="login.php">
        <h2>Entrar na Biblioteca</h2>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />

        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required />

        <button type="submit">Entrar</button>
      </form>
    </div>
  </main>

  <footer>
    <p>Desenvolvido por: Murilo Silva Ⓡ</p>
  </footer>

</body>
</html>
