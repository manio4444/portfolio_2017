<?php
$urlClean = $_SERVER['HTTP_HOST'].htmlspecialchars($_SERVER['REQUEST_URI']);
$urlFull = $_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
?>
<!-- http://sigmeo.pl/themeforest/_blustein/ -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio - Marcin Kalinowski</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('src/php/open_graph.php'); ?>
  </head>

  <body>
  <header>
    <hgroup>
      <h1>Portfolio - Marcin Kalinowski</h1>
      <h2>Front-End Developer</h2>
    </hgroup>
  </header>
  <nav class="main_navigation">
    <ul>
      <li><a href="#section_about">O mnie</a></li>
      <li><a href="#section_skills">Umiejętności</a></li>
      <li><a href="#section_experience">Doświadczenie</a></li>
      <li><a href="#section_projects">Projekty</a></li>
      <li><a href="#section_contact">Kontakt</a></li>
    </ul>
  </nav>
  <section id="section_about">

  </section>
  <section id="section_skills">

  </section>
  <section id="section_experience">

  </section>
  <section id="section_projects">

  </section>
  <section id="section_contact">

  </section>
  <footer>
    <p>Copyright &copy; <?= date('Y') ?> Wszelkie prawa zastrzeżone.</p>
  </footer>
  </body>
</html>
