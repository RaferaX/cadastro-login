<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial | Home</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <div class="user-details">
        <p>Usuário Logado</p>
        <?php
        echo '<p>Email: ' . $user['email'] . '</p><br>';

        echo '<p> Nome: ' . $user['name'] . '</p>';

        ?>
        <a href="logout.php">Sair</a>

    </div>


</body>

</html>