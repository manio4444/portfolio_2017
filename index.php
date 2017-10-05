<?php
$urlClean = $_SERVER['HTTP_HOST'].htmlspecialchars($_SERVER['REQUEST_URI']);
$urlFull = $_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
/*
http://sigmeo.pl/themeforest/_blustein/
http://nataliakielbicka.pl/skills
https://nofluffjobs.com/job/Senior/Scala/Developer/backend/YouGov/Poland/EYAORTIZ?utm_source=facebook&utm_medium=paid_ads&utm_campaign=promoted_ads&utm_content=EYAORTIZ
http://blog.codebusters.pl/cb_blog/uploads/files/html5_and_its_three_faces_sheet.png
https://codepen.io/mkurapov/pen/qNQXxz
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
              <p class="section_skills_el_desc">Bardzo dobra znajomość, potrafię zakodować stronę tak aby była uniwersalna i wyświetlała się dobrze zarówno na dużych ekranach, jak i na smartfonach czy tabletach.</p>

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
              <p class="section_skills_el_desc">Dobra znajomość czystego PHP, również obiektowo.</p>
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
      <div class="wrapper section_experience_wrapper">
        <h2 class="heading section_experience_heading">Doświadczenie zawodowe</h2>
        <div class="section_experience_side --left">
          <span class="section_experience_icon --work"></span>
          <article class="section_experience_el --current">
            <h3 class="section_experience_el_title">KInga Nowicka Design</h3>
            <time class="section_experience_el_date" datetime="2017">2017 - obecnie</time>
            <p class="section_experience_el_desc">Praca zdalna od ok. miesiąca, obecnie wynikiem współpracy z panią Kingą jest strona połączona ze sklepem internetowym dużej marki modowej - <a href="http://kossmann.com.pl/">Kossmann</a></p>
          </article>
          <article class="section_experience_el --current">
            <h3 class="section_experience_el_title">bcweb - Front End Developer</h3>
            <time class="section_experience_el_date" datetime="2016">2016 -> obecnie</time>
            <p class="section_experience_el_desc">Praca stacjonarna, w tej firmie miałem możliwość konfrontacji swoich umięjętności z prawdziwym stanowiskiem Front-End Developera, oraz nuczyłem się używać najnowszych narzędzi ułatwiających pracę, choć moje obowiązki bardziej można było opisać jako Full-Stack, gdyż dużo zadań wymagało pisania dodatkowych funkcjonalności w języku PHP, SQL, lub edytowania systemów CMS.</p>
          </article>
          <article class="section_experience_el --current">
            <h3 class="section_experience_el_title">Studiocitrus, Agencja interaktywna - Founder</h3>
            <time class="section_experience_el_date" datetime="2015">2015</time>
            <p class="section_experience_el_desc">Marka którą stworzyłem i sam obsługiwałem, wykorzystując zdobyte w innych miejscach pracy umiejętności miękkie, marketingowe i sprzedażowe. Sam byłem accountem, programistą, czasami też grafikiem, jeśli nie zlecałem wykonywania projektów grafikowi.</p>
          </article>
          <article class="section_experience_el --current">
            <h3 class="section_experience_el_title">Studio reklamy MadMelon - Programista stron internetowych</h3>
            <time class="section_experience_el_date" datetime="2014">2014</time>
            <p class="section_experience_el_desc">Praca zdalna, to w tej firmie miałem pierwszy komercyjny kontakt z branżą, zajmowałem się kodowaniem projektów stron internetowych, wynikiem współpracy było kilka projektów, głównie w technologii HTML, CSS.</p>
          </article>
        </div>
        <div class="section_experience_side --right">
          <span class="section_experience_icon --school"></span>
          <article class="section_experience_el --current">
            <h3 class="section_experience_el_title">Warszawska Szkoła Reklamy - Realizacja telewizyjna i filmowa</h3>
            <time class="section_experience_el_date" datetime="2015">2013 - 2015</time>
            <p class="section_experience_el_desc">W Warszawskiej Szkole Reklamy rozwijałem swoje hobby które miało być moim przyszłym zawodem - operatorka. Poza zajęciami ze montażu, ćwiczeniami operatorki czy plenerach filmowych w których chętnie brałem udział, nabyłem sporo ogólnej wiedzy z zakresu marketingu.</p>
          </article>
          <article class="section_experience_el --current">
            <h3 class="section_experience_el_title">ZS nr.1 w Mińsku Mazowieckim - Technik informatyk</h3>
            <time class="section_experience_el_date" datetime="2011">2007 - 2011</time>
            <p class="section_experience_el_desc">Tytuł potwierdzony dyplomem</p>
          </article>
        </div>
      </div>
    </section>
    <section id="section_projects">
      <div class="wrapper">
        <h2 class="heading --section_projects">Przykładowe projekty</h2>
        <div class="section_projects_content">
          <article class="section_projects_el --valdiexpress">
            <h3 class="section_projects_el_title">Valdiexpress</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, jQuery, Vue.js</p>
          </article>
          <article class="section_projects_el --magnon">
            <h3 class="section_projects_el_title">Magnon</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, jQuery</p>
          </article>
          <article class="section_projects_el --mariostinyhouses">
            <h3 class="section_projects_el_title">Mariostinyhouses</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, jQuery</p>
          </article>
          <article class="section_projects_el --grupahalo">
            <h3 class="section_projects_el_title">Grupahalo</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, JS, jQuery</p>
          </article>
          <article class="section_projects_el --q-gain">
            <h3 class="section_projects_el_title">Q-gain</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, JS, jQuery</p>
          </article>
          <article class="section_projects_el --cpsens">
            <h3 class="section_projects_el_title">Cpsens</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, JS, jQuery</p>
          </article>
          <article class="section_projects_el --nordic_care">
            <h3 class="section_projects_el_title">Nordic care</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, JS, jQuery</p>
          </article>
          <article class="section_projects_el --zib">
            <h3 class="section_projects_el_title">Zib</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, JS, jQuery</p>
          </article>
          <article class="section_projects_el --espol">
            <h3 class="section_projects_el_title">Espol</h3>
            <time class="section_projects_el_date" datetime="2009">2009, </time>
            <span class="section_projects_el_company">bcweb</span>
            <p class="section_projects_el_desc">Opis realizacji. Użyte technologie: HTML5, CSS3, JS, jQuery</p>
          </article>
        </div>
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
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:100,300,500&amp;subset=latin-ext" rel="stylesheet">
    <script src="dist/scripts.all.min.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBweORh04qPGsjpO-ib0tVSgxlayRjUoM&callback=initMap" type="text/javascript"></script> -->
  </body>
</html>
