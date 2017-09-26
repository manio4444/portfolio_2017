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
<html lang="pl">
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
      <img src="img/20347006_1047877912015207_2013755533386842112_n.jpg" alt="Marcin Kalinowski" class="section_first_image">
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
      <div class="wrapper -section_skills">
        <h2 class="heading -section_skills">Umiejętności</h2>
        <div class="section_skills_el_container">
          <article class="section_skills_el --hmtl --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">HTML5</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, znaczniki &lt;nav&gt;, &lt;section&gt;, &lt;footer&gt;, nie są mi obce ;)<!-- Divitis --></p>
            </div>
          </article>
          <article class="section_skills_el --css --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">CSS3</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, żadnych float'ów, tylko flex.</p>
            </div>
          </article>
          <article class="section_skills_el --rwd --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Responsive Web Design</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, bez żadnego skrępowania używam reguł @media tak, aby nie nadpisywać wartości CSS.</p>
            </div>
          </article>
          <article class="section_skills_el --sass">
            <?php include 'img/skills/sass.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">SASS</h3>
              <p class="section_skills_el_desc">A dokładnie składnia SCSS, zdecydowanie ułatwia pracę przy większych projektach.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/gulp.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Grunt/Gulp</h3>
              <p class="section_skills_el_desc">Narzędzia automatyzacji bez których nie wyobrażam sobie kodowania, skrypty takie jak autoprefixer, czy cssmin to podstawa.</p>
            </div>
          </article>
          <article class="section_skills_el --javascript">
            <?php include 'img/skills/javascript.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">JavaScript</h3>
              <p class="section_skills_el_desc">Znajomość na poziomie podstawowy+, rozumiem i potrafę napisać samodzielnie kod, w tej dziedzinie chciałbym się najbardziej rozwinąć i doszlifować swoje umiejętności.</p>
            </div>
          </article>
          <article class="section_skills_el --jquery">
            <?php include 'img/skills/jquery.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">jQuery</h3>
              <p class="section_skills_el_desc">Dobra znajomość. </p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/vuejs.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Vue.js</h3>
              <p class="section_skills_el_desc">Podstawy.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/php.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">PHP</h3>
              <p class="section_skills_el_desc">Dobra znajomość czyztego PHP, również obiektowo.</p>
            </div>
          </article>
          <article class="section_skills_el --twig --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Twig</h3>
              <p class="section_skills_el_desc">Aby kod stał się czytelniejszy.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/git.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Git</h3>
              <p class="section_skills_el_desc">Codziennie po przyjsciu do pracy podwójne espresso, a przed wyjściem git commit oraz git push.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/npm.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Node package manager</h3>
              <p class="section_skills_el_desc">Wygodne narzędzie do instalowania różnych skryptów, pluginów, z którego chętnie korzystam.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/mysql.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">SQL</h3>
              <p class="section_skills_el_desc">Dobra znajomość, JOIN'y, optymalizacja typy pól, itp.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <?php include 'img/skills/adobephotoshop.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Photoshop</h3>
              <p class="section_skills_el_desc">Znajomość na poziomie cięcia szablonów psd/tiff i podstawowych sposobów obróbki w celu eksportu grafiki</p>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section id="section_experience">
      <div class="wrapper">
        <h2 class="heading">Doświadczenie zawodowe</h2>
        <span class="section_experience_icon --work"></span>
        <article class="section_experience_el --current">
          <h3 class="section_experience_el_title">bcweb - Front End Developer</h3>
          <time class="section_experience_el_date" datetime="2017">2016-2017</time>
          <p class="section_experience_el_desc">A dokładnie składnia SCSS, zdecydowanie ułatwia pracę przy większych projektach.</p>
        </article>
        <article class="section_experience_el --current">
          <h3 class="section_experience_el_title">bcweb - Front End Developer</h3>
          <time class="section_experience_el_date" datetime="2017">2016-2017</time>
          <p class="section_experience_el_desc">A dokładnie składnia SCSS, zdecydowanie ułatwia pracę przy większych projektach.</p>
        </article>
        <article class="section_experience_el --current">
          <h3 class="section_experience_el_title">bcweb - Front End Developer</h3>
          <time class="section_experience_el_date" datetime="2017">2016-2017</time>
          <p class="section_experience_el_desc">A dokładnie składnia SCSS, zdecydowanie ułatwia pracę przy większych projektach.</p>
        </article>

        <span class="section_experience_icon --school"></span>
        <article class="section_experience_el --current">
          <h3 class="section_experience_el_title">Warszawska Szkoła Reklamy</h3>
          <time class="section_experience_el_date" datetime="2015">2013 - 2015</time>
          <p class="section_experience_el_desc">Realizacja telewizyjna i filmowa</p>
        </article>
        <article class="section_experience_el --current">
          <h3 class="section_experience_el_title">ZS nr.1 w Mińsku Mazowieckim</h3>
          <time class="section_experience_el_date" datetime="2011">2007 - 2011</time>
          <p class="section_experience_el_desc">Technik informatyk, tytuł potwierdzony dyplomem</p>
        </article>
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
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:300,500&amp;subset=latin-ext" rel="stylesheet">
    <script src="dist/scripts.all.min.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBweORh04qPGsjpO-ib0tVSgxlayRjUoM&callback=initMap" type="text/javascript"></script> -->
  </body>
</html>
