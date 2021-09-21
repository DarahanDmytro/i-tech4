<?php
  if(isset($_POST["username"])){
      setcookie("username",@$_POST["username"]);
      header('Location: index.php');
      exit;
   }
?>
<!doctype html>
<html lang="ru">
<head>
   <title>Лабораторна №4 Дараган</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="styles/mainstyle.css">
</head>
<body>
  <header>
  <h1>Лабораторна робота №4 <br> Дараган Дмитро КІУКІ-19-5</h1>
  <?php
    include "username.php";
  ?>
  </header>
  <main>
  <form action="index.php" method="POST">
     <h2>Зареєєструйтеся</h2>
     <span><input type="text" name="username">
     <input type="submit" value="Відправити"></span>
     <p>
      Зареєстровані користувачі отримують переваги
     </p>
  </form>
  <?php
    if(isset($_COOKIE["username"]))
        echo <<< ID
         <aside>
         <h2>Каталог попередніх лабораторних робіт</h2>
         <ol>
            <li><a href="lb1/index.php">Лабораторна №1</a></li>
            <li><a href="lb2/index.php">Лабораторна №2</a></li>
            <li><a href="lb3/index.php">Лабораторна №3</a></li>
         </ol>
         </aside>
        ID
  ?>
  </main>
  <footer>
      <a href="https://dec.nure.ua/ru/">
	<img src="lb1/images/magic.gif" alt="Відвідай Хогвартс">
      </a>
  </footer>
</body>
</html>