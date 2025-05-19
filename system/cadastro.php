<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro</title>
  <link rel="stylesheet" href="styles/cadastro.css" />
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.querySelector('form');
      const password = document.getElementById('user_password');
      const confirm = document.getElementById('confirm_password');
      const birthDate = document.getElementById('birthday_date');

      form.addEventListener('submit', function (e) {
        if (password.value !== confirm.value) {
          e.preventDefault();
          alert('As senhas não coincidem!');
          confirm.focus();
          return;
        }

        const today = new Date();
        const birth = new Date(birthDate.value);
        const age = today.getFullYear() - birth.getFullYear();
        const monthDiff = today.getMonth() - birth.getMonth();
        const isBirthdayPassed =
          monthDiff > 0 || (monthDiff === 0 && today.getDate() >= birth.getDate());
        const realAge = isBirthdayPassed ? age : age - 1;

        if (realAge < 14) {
          e.preventDefault();
          alert('Você precisa ter pelo menos 14 anos para se cadastrar.');
          birthDate.focus();
        }
      });
    });
  </script>
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

  <main class="signup-container">
    <h1>Crie sua conta</h1>
    <form action="./routes/cadastro.php" method="post" class="signup-form">
      <label for="user_name">Nome:</label>
      <input type="text" name="user_name" id="user_name" required />

      <label for="user_email">Email:</label>
      <input type="email" name="user_email" id="user_email" required />

      <label for="birthday_date">Data de nascimento:</label>
      <input type="date" name="birthday_date" id="birthday_date" required />

      <label for="user_password">Senha:</label>
      <input type="password" name="user_password" id="user_password" required />

      <label for="confirm_password">Confirmar senha:</label>
      <input type="password" name="confirm_password" id="confirm_password" required />

      <button type="submit">Continuar</button>
    </form>
  </main>

  <footer>
    <p>Desenvolvido por: Murilo Silva Ⓡ</p>
  </footer>
</body>

</html>
