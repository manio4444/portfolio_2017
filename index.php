<?php
$urlClean = $_SERVER['HTTP_HOST'].htmlspecialchars($_SERVER['REQUEST_URI']);
$urlFull = $_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
?>
<!-- http://sigmeo.pl/themeforest/_blustein/ -->
<!-- http://nataliakielbicka.pl/skills -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio - Marcin Kalinowski</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('src/php/open_graph.php'); ?>
  </head>

  <body>
  <header>
    <h1>
      <span>Portfolio - Marcin Kalinowski</span>
      <span>Front-End Developer</span>
    </h1>
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
    <h2>O mnie</h2>
    <article class="about_element">

    </article>
  </section>
  <section id="section_skills">
    <h2>Umiejętności</h2>

  </section>
  <section id="section_experience">
    <h2>Doświadczenie zawodowe</h2>

  </section>
  <section id="section_projects">
    <h2>Przykładowe projekty</h2>

  </section>
  <section id="section_contact">
    <h2>Kontakt</h2>

  </section>
  <footer>
    <p>Copyright &copy; <?= date('Y') ?> Wszelkie prawa zastrzeżone.</p>
  </footer>
  </body>
</html>
