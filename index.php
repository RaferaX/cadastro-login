<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login |</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container" id="signIn">
    <h1 class="form-title">Logar</h1>
    <?php
    if (isset($errors['login'])) {
      echo '<div class="error-main">
                    <p>' . $errors['login'] . '</p>
                    </div>';
      unset($errors['login']);
    }
    ?>
    <form method="POST" action="user-account.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <?php
        if (isset($errors['email'])) {
          echo ' <div class="error">
                    <p>' . $errors['email'] . '</p>
                </div>';
        }
        ?>
      </div>
      <div class="input-group password">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Senha" required>
        <i id="eye" class="fa fa-eye"></i>
        <?php
        if (isset($errors['password'])) {
          echo ' <div class="error">
                    <p>' . $errors['password'] . '</p>
                </div>';
        }
        ?>
      </div>
      <p class="recover">
        <a href="#">Recuperar senha</a>
      </p>
      <input type="submit" class="btn" value="Entrar" name="signin">
    </form>
    <p class="or">
      --------ou--------
    </p>
    <div class="links">
      <p>Não tem uma conta?</p>
      <a href="register.php">Cadastre-se</a>
    </div>
  </div>
  <script src="main.js"></script>
</body>

</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>