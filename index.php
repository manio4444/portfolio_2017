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
      <h1 class="heading section_first_heading">
        <span class="section_first_heading_big">Marcin Kalinowski</span>
        <span class="section_first_heading_small">Front-End Developer Portfolio</span>
      </h1>
      <a href="#section_about" class="section_first_more">Czytaj więcej</a>
    </header>

    <section id="section_about">
      <div class="wrapper">
        <h2 class="heading">O mnie</h2>
        <p class="section_about_desc">Swoją przygodę z kodowaniem zacząłem bardzo wcześnie, mniej więcej w okresie szkoły podstawowej, za czasów HTML 4.01, zagłębiając się w linijki kodu i styli CSS. Raz na jakiś czas dorabiałem sobie tworząc stronę intenetową "dla znajomego". Od ok. 2-3 lat zacząłem się zajmować tworzeniem stron internetowych na użytek komercyjny, a od roku pracuję na stanowisku Front-End Developer. Lubię cały rozwijać swoje umiejętności, staram się przy każdym zleceniu wprowadzić coś nowego, spróbować technologii której jeszcze nie korzystałem, śledzę na bieżąca strony, blogi i grupy dotyczące kodowania, światowych trendów, oraz standardów. Znam język angielski na poziomie komunikatywnym, potrafię czytać i pisać dokumentację oraz używam nazw zmiennych i piszę komentarze do swojego kodu w tym języku.</p>
      </div>
    </section>

    <section id="section_skills">
      <div class="wrapper -section_skills">
        <h2 class="heading -section_skills">Umiejętności</h2>
        <div class="section_skills_el_container">
          <article data-aos="zoom-in-up" class="section_skills_el --hmtl --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">HTML5</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, znaczniki &lt;nav&gt;, &lt;section&gt;, &lt;footer&gt;, nie są mi obce ;)<!-- Divitis --></p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el --css --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">CSS3</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, żadnych float'ów, tylko flex.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el --rwd --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Responsive Web Design</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, potrafię zakodować stronę tak aby była uniwersalna i wyświetlała się dobrze zarówno na dużych ekranach, jak i na smartfonach czy tabletach.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el --sass">
            <?php include 'img/skills/sass.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">SASS</h3>
              <p class="section_skills_el_desc">A dokładnie składnia SCSS, zdecydowanie ułatwia pracę przy większych projektach.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
            <?php include 'img/skills/gulp.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Grunt/Gulp</h3>
              <p class="section_skills_el_desc">Narzędzia automatyzacji bez których nie wyobrażam sobie kodowania, skrypty takie jak autoprefixer, czy cssmin to podstawa.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el --javascript">
            <?php include 'img/skills/javascript.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">JavaScript</h3>
              <p class="section_skills_el_desc">Znajomość na poziomie podstawowy+, rozumiem i potrafę napisać samodzielnie kod, w tej dziedzinie chciałbym się najbardziej rozwinąć i doszlifować swoje umiejętności.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el --jquery">
            <?php include 'img/skills/jquery.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">jQuery</h3>
              <p class="section_skills_el_desc">Dobra znajomość. </p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
            <?php include 'img/skills/vuejs.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Vue.js</h3>
              <p class="section_skills_el_desc">Podstawy.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
            <?php include 'img/skills/php.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">PHP</h3>
              <p class="section_skills_el_desc">Dobra znajomość czystego PHP, również obiektowo.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el --twig --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Twig</h3>
              <p class="section_skills_el_desc">Aby kod stał się czytelniejszy.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
            <?php include 'img/skills/git.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Git</h3>
              <p class="section_skills_el_desc">Codziennie po przyjsciu do pracy podwójne espresso, a przed wyjściem git commit oraz git push.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
            <?php include 'img/skills/npm.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Node package manager</h3>
              <p class="section_skills_el_desc">Wygodne narzędzie do instalowania różnych skryptów, pluginów, z którego chętnie korzystam.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
            <?php include 'img/skills/mysql.svg'; ?>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">SQL</h3>
              <p class="section_skills_el_desc">Dobra znajomość, JOIN'y, optymalizacja typy pól, itp.</p>
            </div>
          </article>
          <article data-aos="zoom-in-up" class="section_skills_el">
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
            <h3 data-aos="fade-right" class="section_experience_el_title">Kinga Nowicka Design</h3>
            <time data-aos="fade-right" class="section_experience_el_date" datetime="2017">2017 - obecnie</time>
            <p data-aos="fade-right" class="section_experience_el_desc">Praca zdalna od ok. miesiąca, obecnie wynikiem współpracy z panią Kingą jest strona połączona ze sklepem internetowym dużej marki modowej - <a href="http://kossmann.com.pl/">Kossmann</a></p>
          </article>
          <article class="section_experience_el --current">
            <h3 data-aos="fade-right" class="section_experience_el_title">bcweb - Front End Developer</h3>
            <time data-aos="fade-right" class="section_experience_el_date" datetime="2016">2016 - obecnie</time>
            <p data-aos="fade-right" class="section_experience_el_desc">Praca stacjonarna, w tej firmie miałem możliwość konfrontacji swoich umięjętności z prawdziwym stanowiskiem Front-End Developera, oraz nauczyłem się używać najnowszych narzędzi ułatwiających pracę, choć moje obowiązki bardziej można było opisać jako Full-Stack, gdyż dużo zadań wymagało pisania dodatkowych funkcjonalności w języku PHP, SQL, lub edytowania systemów CMS.</p>
          </article>
          <article class="section_experience_el">
            <h3 data-aos="fade-right" class="section_experience_el_title">Studiocitrus, Agencja interaktywna - Founder</h3>
            <time data-aos="fade-right" class="section_experience_el_date" datetime="2015">2015</time>
            <p data-aos="fade-right" class="section_experience_el_desc">Marka którą stworzyłem i sam obsługiwałem, wykorzystując zdobyte w innych miejscach pracy umiejętności miękkie, marketingowe i sprzedażowe. Sam byłem accountem, programistą, czasami też grafikiem, jeśli nie zlecałem wykonywania projektów grafikowi.</p>
          </article>
          <article class="section_experience_el">
            <h3 data-aos="fade-right" class="section_experience_el_title">Studio reklamy MadMelon - Programista stron internetowych</h3>
            <time data-aos="fade-right" class="section_experience_el_date" datetime="2014">2014</time>
            <p data-aos="fade-right" class="section_experience_el_desc">Praca zdalna, to w tej firmie miałem pierwszy komercyjny kontakt z branżą, zajmowałem się kodowaniem projektów stron internetowych, wynikiem współpracy było kilka projektów, głównie w technologii HTML, CSS.</p>
          </article>
        </div>
        <div class="section_experience_side --right">
          <span class="section_experience_icon --school"></span>
          <article class="section_experience_el">
            <h3 data-aos="fade-left" class="section_experience_el_title">Warszawska Szkoła Reklamy - Realizacja telewizyjna i filmowa</h3>
            <time data-aos="fade-left" class="section_experience_el_date" datetime="2015">2013 - 2015</time>
            <p data-aos="fade-left" class="section_experience_el_desc">W Warszawskiej Szkole Reklamy rozwijałem swoje hobby które miało być moim przyszłym zawodem - operatorka. Poza zajęciami ze montażu, ćwiczeniami operatorki czy plenerach filmowych w których chętnie brałem udział, nabyłem sporo ogólnej wiedzy z zakresu marketingu.</p>
          </article>
          <article class="section_experience_el">
            <h3 data-aos="fade-left" class="section_experience_el_title">ZS nr.1 w Mińsku Mazowieckim - Technik informatyk</h3>
            <time data-aos="fade-left" class="section_experience_el_date" datetime="2011">2007 - 2011</time>
            <p data-aos="fade-left" class="section_experience_el_desc">Tytuł potwierdzony dyplomem</p>
          </article>
        </div>
      </div>
    </section>

    <section id="section_expectations">
      <div class="wrapper">
        <h2 class="heading">Oczekiwania</h2>
        <p class="section_expectations_desc">Tu daj też kolorową mapę googla z zaznaczonym obszarem wwa GOOGLE API V3</p>
      </div>
    </section>

    <section id="section_projects">
      <div class="wrapper">
        <h2 class="heading --section_projects">Przykładowe projekty</h2>
        <div class="section_projects_content">
          <article class="section_projects_el --pomocdrogowa-krakow-a4">
            <a href="http://pomocdrogowa-krakow-a4.pl/" target="_blank">
              <h3 class="section_projects_el_title">Pomocdrogowa</h3>
              <span class="section_projects_el_date">
                <time datetime="2014">2014, </time>
                <span>MadMelon</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery, WordPress</p>
            </a>
          </article>
          <article class="section_projects_el --magicphotography">
            <a href="http://magicphotography.pl/" target="_blank">
              <h3 class="section_projects_el_title">Magicphotography</h3>
              <span class="section_projects_el_date">
                <time datetime="2014">2014, </time>
                <span>MadMelon</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --marcolsm">
            <a href="http://marcolsm.pl/" target="_blank">
              <h3 class="section_projects_el_title">Marcol SM</h3>
              <span class="section_projects_el_date">
                <time datetime="2015">2015, </time>
                <span>Studiocitrus</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --fugotrans">
            <a href="http://fugotrans.pl/" target="_blank">
              <h3 class="section_projects_el_title">Fugotrans</h3>
              <span class="section_projects_el_date">
                <time datetime="2015">2015, </time>
                <span>Studiocitrus</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --valdiexpress">
            <a href="http://valdiexpress.pl/" target="_blank">
              <h3 class="section_projects_el_title">Valdiexpress</h3>
              <span class="section_projects_el_date">
                <time datetime="2016">2016, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery, Vue.js</p>
            </a>
          </article>
          <article class="section_projects_el --magnon">
            <a href="http://magnon.pl/" target="_blank">
              <h3 class="section_projects_el_title">Magnon</h3>
              <span class="section_projects_el_date">
                <time datetime="2016">2016, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --mariostinyhouses">
            <a href="http://mariostinyhouses.com/" target="_blank">
              <h3 class="section_projects_el_title">Mariostinyhouses</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --grupahalo">
            <a href="http://strojedlahostess.pl/" target="_blank">
              <h3 class="section_projects_el_title">Grupahalo</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --q-gain">
            <a href="http://produkcja.bcweb.com.pl/q-gain.com/q-gain.com_2017-07-31/" target="_blank">
              <h3 class="section_projects_el_title">Q-gain</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Sklep internetowy. Użyte technologie: HTML5, CSS3, JS, jQuery, QuickCart</p>
            </a>
          </article>
          <article class="section_projects_el --cpsens">
            <a href="http://produkcja.bcweb.com.pl/cpsens/cpsens_2017-09-29/" target="_blank">
              <h3 class="section_projects_el_title">Cpsens</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --nordic_care">
            <a href="http://nordiccare.pl/" target="_blank">
              <h3 class="section_projects_el_title">Nordic care</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --zib">
            <a href="http://produkcja.bcweb.com.pl/zib/zib_2017-09-28/" target="_blank">
              <h3 class="section_projects_el_title">Zib</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --espol">
            <a href="http://produkcja.bcweb.com.pl/espol/2017-09-18_espol/" target="_blank">
              <h3 class="section_projects_el_title">Espol</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>bcweb</span>
              </span>
              <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
            </a>
          </article>
          <article class="section_projects_el --kossmann">
            <a href="http://kossmann.com.pl/new_page/" target="_blank">
              <h3 class="section_projects_el_title">Kossmann</h3>
              <span class="section_projects_el_date">
                <time datetime="2017">2017, </time>
                <span>Kinga Nowicka Design</span>
              </span>
              <p class="section_projects_el_desc">Sklep internetowy. Użyte technologie: HTML5, CSS3, JS, jQuery, QuickCart</p>
            </a>
          </article>
        </div>
      </div>
    </section>

    <section id="section_contact">
      <div class="wrapper">
        <h2 class="heading">Kontakt</h2>
        <p class="section_contact">Formulasz wklej gotowy ten co zawsze i jakiś tekst zapraszam do kontaktu blablabla</p>
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
