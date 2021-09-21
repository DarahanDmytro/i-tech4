<!doctype html>
<html lang="ru">
<head>
  <title>Лабораторна №3 Дараган</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	  crossorigin="anonymous"></script>
  <script>
    if (typeof jQuery == 'undefined') { 
           document.write(unescape("%3Cscript src='/js/jquery-1.6.1.min.js' 
          type='text/javascript'%3E%3C/script%3E"));
    }
  </script>
  <script src="js/clockDriwer.js"></script>
</head>
<body>
   <header >
     <h1>Лабораторна №3 Дараган КІУКІ-19-5</h1>
       <?php
        include "../username.php";
       ?>
   </header>
   <main>
     <img id="slider" src="images/1.jpg" alt="Слайдер">
     <span>1ms <input id="ranger" type="range" min="1" max="10000" step="1" oninput="changeInterval()"> 10000ms</span>
     <br>
     <label for="ranger">5000 ms</label>
   </main>
   <footer>
     <div id="clock"></div>
   </footer>
</body>
</html>
