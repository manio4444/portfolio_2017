<?php
$urlClean = $_SERVER['HTTP_HOST'].htmlspecialchars($_SERVER['REQUEST_URI']);
$urlFull = $_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
/*
http://sigmeo.pl/themeforest/_blustein/
http://nataliakielbicka.pl/skills
https://nofluffjobs.com/job/Senior/Scala/Developer/backend/YouGov/Poland/EYAORTIZ?utm_source=facebook&utm_medium=paid_ads&utm_campaign=promoted_ads&utm_content=EYAORTIZ
http://blog.codebusters.pl/cb_blog/uploads/files/html5_and_its_three_faces_sheet.png
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio - Marcin Kalinowski</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/styles.all.min.css">
    <?php include('src/php/open_graph.php'); ?>
  </head>
  <body>
    <nav id="main_navigation">
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
      </button>
      <ul class="main_navigation_list">
        <li class="main_navigation_list_el"><a href="#section_about">O mnie</a></li>
        <li class="main_navigation_list_el"><a href="#section_skills">Umiejętności</a></li>
        <li class="main_navigation_list_el"><a href="#section_experience">Doświadczenie</a></li>
        <li class="main_navigation_list_el"><a href="#section_projects">Projekty</a></li>
        <li class="main_navigation_list_el"><a href="#section_contact">Kontakt</a></li>
      </ul>
    </nav>
    <header id="section_first">
      <img src="img/20347006_1047877912015207_2013755533386842112_n.jpg" alt="" class="section_first_image">
      <h1 class="heading section_first_heading" xdata-aos="fade-right">
        <span class="section_first_heading_big">Marcin Kalinowski</span>
        <span class="section_first_heading_small">Front-End Developer Portfolio</span>
      </h1>
      <a href="#section_about" class="section_first_more">Czytaj więcej</a>
    </header>
    <section id="section_about">
      <div class="wrapper">
        <h2 class="heading">O mnie</h2>
        <p class="asddads">O mnie tekst i coś o Śledzenie światowych trendów UI / UX i że ogólnie cośtam śledzę, + że od dawna kodzenie + może tu o angielskim</p>
      </div>
    </section>
    <section id="section_skills">
      <div class="wrapper">
        <h2 class="heading">Umiejętności</h2>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">HTML5</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">CSS3</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">Responsive Web Design</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">SASS</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">jQuery</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">JavaScript</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">Vue.js</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">Git</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">Grunt/Gulp</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">Node package manager</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">SQL</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">PHP</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">asdasdasdasdasdasdsa</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">asdasdasdasdasdasdsa</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">asdasdasdasdasdasdsa</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
        <article class="section_skills_el">
          <h3 class="section_skills_el_title">Photoshop</h3>
          <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </article>
      </div>
    </section>
    <section id="section_experience">
      <div class="wrapper">
        <h2 class="heading">Doświadczenie zawodowe</h2>
      </div>
    </section>
    <section id="section_projects">
      <div class="wrapper">
        <h2 class="heading">Przykładowe projekty</h2>
      </div>
    </section>
    <section id="section_contact">
      <div class="wrapper">
        <h2 class="heading">Kontakt</h2>
      </div>
    </section>
    <footer>
      <p>Copyright &copy; <?= date('Y') ?> Wszelkie prawa zastrzeżone.</p>
    </footer>
    <div id="backtotop" title="Powrót na górę strony"></div>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:300&amp;subset=latin-ext" rel="stylesheet">
    <script src="dist/scripts.all.min.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBweORh04qPGsjpO-ib0tVSgxlayRjUoM&callback=initMap" type="text/javascript"></script> -->
  </body>
</html>
