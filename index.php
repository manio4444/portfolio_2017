<?php
setcookie('cv_opened', 'yes', strtotime( '+30 days' ), "/");
$urlClean = $_SERVER['HTTP_HOST'].htmlspecialchars($_SERVER['REQUEST_URI']);
$urlFull = $_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
function includeSvg($url) { if (file_exists($url)) include $url; }
/*
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

    <nav id="main_navigation" class="screen-only">
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

    <main class="page_container">
      <header id="section_first" class="page_section">
        <div class="wrapper wrapper--section_first">
          <img src="img/20347006_1047877912015207_2013755533386842112_n.jpg" alt="Marcin Kalinowski" class="section_first_image">
          <h1 class="heading section_first_heading">
            <span class="section_first_heading_big">Marcin Kalinowski</span>
            <span class="section_first_heading_small screen-only">Front-End Developer Portfolio</span>
            <span class="section_first_heading_small print-only">Front-End Developer</span>
          </h1>
          <a href="#section_about" class="section_first_more screen-only">Czytaj więcej</a>
        </div>
      </header>

      <section id="section_about" class="page_section screen-only">
        <div class="wrapper">
          <h2 class="heading">O mnie</h2>
          <p class="section_about_desc">Swoją przygodę z kodowaniem zacząłem bardzo wcześnie, mniej więcej w okresie szkoły podstawowej, za czasów HTML 4.01, zagłębiając się w linijki kodu i stylów CSS. Raz na jakiś czas dorabiałem sobie, tworząc stronę internetową "dla znajomego". Około 7-8 lat temu postanowiłem zmienić moje hobby w pracę, zacząłem się zajmować tworzeniem stron internetowych na użytek komercyjny, a od 4 lat pracuję jako Front-End Developer. Lubię cały czas rozwijać swoje umiejętności, staram się przy każdym zleceniu wprowadzić coś nowego, spróbować technologii, z której jeszcze nie korzystałem, śledzę na bieżąco strony, blogi i grupy dotyczące kodowania, światowych trendów, oraz standardów. Znam język angielski na poziomie komunikatywnym, potrafię czytać i pisać dokumentację oraz nie mam problemów z porozumiewaniem się w tym języku ;)</p>
        </div>
      </section>

      <section id="section_skills" class="page_section">
        <div class="wrapper wrapper--section_skills">
          <h2 class="heading -section_skills">Umiejętności</h2>
          <div class="section_skills_el_container">
            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--hmtl icon--fa">
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">HTML5</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość, znaczniki &lt;nav&gt;, &lt;section&gt;, &lt;footer&gt;, nie są mi obce ;)</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--css icon--fa">
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">CSS3</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość, żadnych float'ów, tylko flex.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--rwd icon--fa">
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Responsive Web Design</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość, potrafię zakodować stronę tak, aby wyświetlała się idealnie zarówno na dużych ekranach, jak i na smartfonach czy tabletach.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--noborder icon--svg">
                <?php includeSvg('img/skills/sass.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">SASS, LESS</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość preprocesorów, "must have" przy większych projektach, a w praktyce to w każdych.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el print-nowrap">
              <div class="section_skills_el_icon icon--padding-big icon--svg">
                <?php includeSvg('img/skills/material.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Bootstrap, Semantic UI, Material UI</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość frameworków CSS/JS.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--noborder icon--svg">
                <?php includeSvg('img/skills/javascript.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">JavaScript</h3>
                <p class="section_skills_el_desc">Dobra znajomość, również standardu ES6 (i wyżej).</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--noborder icon--svg">
                <?php includeSvg('img/skills/typescript.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">TypeScript</h3>
                <p class="section_skills_el_desc">Podstawowa znajomość.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--react icon--svg">
                <?php includeSvg('img/skills/react.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">React</h3>
                <p class="section_skills_el_desc">Dobra znajomość najpopularniejszego frameworka JavaScript, w tym znajomość optymalizacji komponentów.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/vuejs.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Vue.js</h3>
                <p class="section_skills_el_desc">Podstawy. W tej dziedzinie chciałbym się najbardziej rozwinąć i zdobyć praktyczne doświadczenie.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--padding-big icon--svg">
                <?php includeSvg('img/skills/redux.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Redux, Vuex</h3>
                <p class="section_skills_el_desc">Umiejętność rozszerzania aplikacji bazujących na scentralizowanych managerach stanu.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--padding-big icon--svg">
                <?php includeSvg('img/skills/jquery.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">jQuery</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/git.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Git</h3>
                <p class="section_skills_el_desc">Bardzo dobra znajomość, praca na branchach, tworzenie od podstaw repozytoriów, mergowanie itp.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/gulp.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Grunt, Gulp, Webpack</h3>
                <p class="section_skills_el_desc">Narzędzia automatyzacji, buildery, minifikatory to rzeczy, bez których nie wyobrażam sobie kodowania.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg icon--padding-small">
                <?php includeSvg('img/skills/docker.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Vagrant, Docker</h3>
                <p class="section_skills_el_desc">Narzędzia wirtualizacji, które mi się podoba, bo maksymalnie zmniejsza czas konfigurowania środowiska deweloperskiego.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/linux.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Windows, MacOS, Linux</h3>
                <p class="section_skills_el_desc">Terminal nie przyprawia mnie o zawroty głowy ;) Z Linuxa najchętniej CentOS.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/vmware.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">VMware, VirtualBox</h3>
                <p class="section_skills_el_desc">Znajomość wirtualizacji maszyn przydaje się wszędzie tam, gdzie jeszcze nie dotarł Vagrant :)</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/php.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">PHP</h3>
                <p class="section_skills_el_desc">Dobra znajomość czystego PHP, również obiektowo.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--twig icon--fa">
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Smarty, Twig</h3>
                <p class="section_skills_el_desc">Systemy szablonów, aby kod stał się czytelniejszy.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/npm.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Node package manager, Yarn</h3>
                <p class="section_skills_el_desc">Narzędzia "Must Have" do instalowania różnych skryptów, plugin-ów, konfigurowania i odpalania wszelakich builder-ów, w każdym projekcie Front End'owym.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg">
                <?php includeSvg('img/skills/mysql.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">SQL</h3>
                <p class="section_skills_el_desc">Dobra znajomość, JOIN'y, optymalizacja typy pól itp.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg icon--padding-small">
                <?php includeSvg('img/skills/python.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Python</h3>
                <p class="section_skills_el_desc">Podstawowa wiedza potrzebna do niewielkich poprawek kodu.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg icon--padding-superbig icon--invision">
                <?php includeSvg('img/skills/invision.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Invision, Zeplin, Figma</h3>
                <p class="section_skills_el_desc">Bezproblemowo korzystam z wszystkich narzędzi do eksportowania prototypów aplikacji/widoków.</p>
              </div>
            </article>

            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon icon--svg icon--padding-small">
                <?php includeSvg('img/skills/adobephotoshop.svg'); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title">Photoshop</h3>
                <p class="section_skills_el_desc">Znajomość na poziomie cięcia szablonów psd/tiff i podstawowych sposobów obróbki w celu eksportu grafiki</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section id="section_experience" class="page_section">
        <div class="wrapper wrapper--section_experience">
          <h2 class="heading section_experience_heading">Doświadczenie zawodowe</h2>
          <div class="section_experience_side section_experience_side--left">
            <span class="section_experience_icon section_experience_icon--work"></span>
            <article class="section_experience_el section_experience_el--current">
              <h3 data-aos="fade-right" class="section_experience_el_title">intive GmbH - Software Engineer</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2017">2019 - obecnie</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Stacjonarnie (Software House). Praca jako Front End Developer przy kilku dużych aplikacjach webowych w JavaScript (React/Vue.js) oraz aplikacji mobilnej (React Native). Zakres prac w większości polegał na developmencie, częściowo też mainteance/refactor/bugfixing, zależnie od projektu.</p>
            </article>

            <article class="section_experience_el">
              <h3 data-aos="fade-right" class="section_experience_el_title">createIT - Front End Developer</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2017">2018 - 2019</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Stacjonarnie (Software House). Po zakończeniu projektu outsourcingowego, czekając na następny duży projekt, pracowałem w dziale projektów wewnętrznych. Zakres prac: głównie tworzenie mniejszych stron od podstaw na platformie WordPress, support stron klientów, bugfixing, okresowo outsourcing na kilka dni do nieco większego projektu.</p>
            </article>

            <article class="section_experience_el">
              <h3 data-aos="fade-right" class="section_experience_el_title">top concepts GmbH - Front End Developer</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2017">2017 - 2018</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Praca zdalna, ale stacjonarnie w biurze w Warszawie (outsourcingowy) poprzez createIT. Do głównych zadań należało bieżące utrzymanie dużych niemieckich sklepów opartych na platformie e-commerce OXID, tj. tworzenie nowych modułów JavaScript, widoków Twig/Smarty, funkcjonalności, ścisła współpraca z programistami back-end w zakresie bieżących zadań.</p>
            </article>

            <article class="section_experience_el section_experience_el--current">
              <h3 data-aos="fade-right" class="section_experience_el_title">Kinga Nowicka Design - Full Stack Developer</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2017">2017 - obecnie</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Praca zdalna, wynikiem współpracy z panią Kingą jest stworzenie od podstaw i utrzymanie sklepu internetowego dużej marki modowej - <a href="http://kossmann.com.pl/">Kossmann</a>, oraz utrzymanie sklepu <a href="https://sowlofficial.com/">Sowlofficial</a> i kilka mniejszych projektów.</p>
            </article>

            <article class="section_experience_el">
              <h3 data-aos="fade-right" class="section_experience_el_title">bcweb - Front End Developer</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2016">2016 - 2017</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Praca stacjonarna, w tej firmie miałem możliwość konfrontacji swoich umiejętności z prawdziwym stanowiskiem Front End Developera, oraz nauczyłem się używać najnowszych narzędzi ułatwiających pracę, choć moje obowiązki bardziej można było opisać jako Full Stack, gdyż dużo zadań wymagało pisania dodatkowych funkcjonalności w języku PHP, SQL, lub edytowania back-end'u systemów CMS.</p>
            </article>

            <article class="section_experience_el">
              <h3 data-aos="fade-right" class="section_experience_el_title">Studiocitrus, Agencja interaktywna - Founder</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2015">2015</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Marka, którą stworzyłem i sam obsługiwałem, wykorzystując zdobyte w innych miejscach pracy umiejętności miękkie, marketingowe i sprzedażowe. Sam byłem accountem, programistą, czasami też grafikiem, jeśli nie zlecałem wykonywania projektów grafikowi.</p>
            </article>

            <article class="section_experience_el">
              <h3 data-aos="fade-right" class="section_experience_el_title">Studio reklamy MadMelon - Programista stron internetowych</h3>
              <time data-aos="fade-right" class="section_experience_el_date" datetime="2014">2014</time>
              <p data-aos="fade-right" class="section_experience_el_desc">Praca zdalna, to w tej firmie miałem pierwszy komercyjny kontakt z branżą, zajmowałem się kodowaniem projektów stron internetowych, wynikiem współpracy było kilka projektów, głównie w technologii HTML, CSS.</p>
            </article>
          </div>
          <div class="section_experience_side section_experience_side--right screen-only">
            <span class="section_experience_icon section_experience_icon--school"></span>
            <article class="section_experience_el">
              <h3 data-aos="fade-left" class="section_experience_el_title">Warszawska Szkoła Reklamy - Realizacja telewizyjna i filmowa</h3>
              <time data-aos="fade-left" class="section_experience_el_date" datetime="2015">2013 - 2015</time>
              <p data-aos="fade-left" class="section_experience_el_desc">W Warszawskiej Szkole Reklamy rozwijałem swoje hobby, które miało być moim przyszłym zawodem - operatorka. Poza zajęciami z montażu ćwiczeniami operatorki czy plenerach filmowych, w których chętnie brałem udział, nabyłem sporo ogólnej wiedzy z zakresu marketingu.</p>
            </article>

            <article class="section_experience_el">
              <h3 data-aos="fade-left" class="section_experience_el_title">ZS nr.1 w Mińsku Mazowieckim - Technik informatyk</h3>
              <time data-aos="fade-left" class="section_experience_el_date" datetime="2011">2007 - 2011</time>
              <p data-aos="fade-left" class="section_experience_el_desc">Tytuł potwierdzony dyplomem</p>
            </article>
          </div>
        </div>
      </section>

      <section id="section_portfolio" class="page_section print-only">
        <div class="wrapper">
          <div class="section_expectations_desc">
            <h2 class="heading">Portfolio</h2>
            <p>Link do portfolio: <a href="http://portfolio.studiocitrus.pl/" target="_blank">portfolio.studiocitrus.pl</a></p>
            <img src="img/qr.svg" class="section_portfolio_qr" />
          </div>
        </div>
      </section>

      <section id="section_fillers" class="page_section print-only">
        <div class="wrapper">
          <div class="section_expectations_desc">
            <h2 class="heading">Języki</h2>
            <ul class="section_filler_ul">
              <li>Polski</li>
              <li>Angielski, komunikatywny</li>
            </ul>
          </div>
        </div>
        <div class="wrapper">
          <div class="section_expectations_desc">
            <h2 class="heading">Wymagania</h2>
            <ul class="section_filler_ul">
              <li>Możliwość okazjonalnej pracy zdalnej, ok. 40%</li>
              <li>Mile widziane biuro przy węźle kolejowym, ale nie jest to konieczne</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="section_expectations" class="page_section screen-only">
        <div class="wrapper wrapper--section_expectations">
          <div class="section_expectations_desc">
            <h2 class="heading">Oczekiwania</h2>
            <p>Przede wszystkim szukam pracy stacjonarnej, z opcją remote, w której mógłbym wykorzystać swoją dotychczas zgromadzoną wiedzę i umiejętności, cały czas się rozwijać, oraz wymieniać doświadczeniami ;)</p>
            <p>Interesują mnie stanowiska: Junior/Mid Front-End Developer lub początkujący Vue/Angular/React Developer (nie posiadam praktycznego doświadczenia w w/w frameworkach).</p>
            <p>Poniżej wklejam mapkę z zarysem obszaru, w którym chciałbym pracować oraz pokazuję, że umiem obsługiwać Google Maps API v3 ;) Z racji, iż dojeżdżam obecnie z Mińska Mazowieckiego, szukam lokalizacji w miarę dobrze skomunikowanej ze wschodnią linią kolejową, ew. z drogą krajową nr. 2, ale obiecuję rozważyć wszystkie możliwe propozycje.</p>
            <p>Podsumywując:</p>
            <ul>
              <li>Front-End: Junior/Mid</li>
              <li>Vue/Angular/React: Junior</li>
              <li>Forma zatrudnienia: B2B</li>
              <li>Miejsce: Warszawa</li>
              <li>Remote: minimum 40%</li>
            </ul>
          </div>
        </div>
        <div id="google_map"></div>
      </section>

      <section id="section_projects" class="page_section screen-only">
        <div class="wrapper">
          <h2 class="heading">Przykładowe projekty</h2>
          <div class="section_projects_content">
            <article class="section_projects_el section_projects_el--pomocdrogowa-krakow-a4">
              <a href="http://pomocdrogowa-krakow-a4.pl/" target="_blank">
                <h3 class="section_projects_el_title">Pomocdrogowa</h3>
                <span class="section_projects_el_date">
                  <time datetime="2014">2014, </time>
                  <span>MadMelon</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery, WordPress</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--magicphotography">
              <a href="http://magicphotography.pl/" target="_blank">
                <h3 class="section_projects_el_title">Magicphotography</h3>
                <span class="section_projects_el_date">
                  <time datetime="2014">2014, </time>
                  <span>MadMelon</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--marcolsm">
              <a href="http://marcolsm.pl/" target="_blank">
                <h3 class="section_projects_el_title">Marcol SM</h3>
                <span class="section_projects_el_date">
                  <time datetime="2015">2015, </time>
                  <span>Studiocitrus</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--fugotrans">
              <a href="http://fugotrans.pl/" target="_blank">
                <h3 class="section_projects_el_title">Fugotrans</h3>
                <span class="section_projects_el_date">
                  <time datetime="2015">2015, </time>
                  <span>Studiocitrus</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--valdiexpress">
              <a href="http://valdiexpress.pl/" target="_blank">
                <h3 class="section_projects_el_title">Valdiexpress</h3>
                <span class="section_projects_el_date">
                  <time datetime="2016">2016, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery, Vue.js</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--magnon">
              <a href="http://magnon.pl/" target="_blank">
                <h3 class="section_projects_el_title">Magnon</h3>
                <span class="section_projects_el_date">
                  <time datetime="2016">2016, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--mariostinyhouses">
              <a href="http://produkcja.bcweb.com.pl/mariotinyhouses/2017-05-26/" target="_blank">
                <h3 class="section_projects_el_title">Mariostinyhouses</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--grupahalo">
              <a href="http://strojedlahostess.pl/" target="_blank">
                <h3 class="section_projects_el_title">Grupahalo</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--q-gain">
              <a href="http://produkcja.bcweb.com.pl/q-gain.com/q-gain.com_2017-07-31/" target="_blank">
                <h3 class="section_projects_el_title">Q-gain</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Sklep internetowy. Użyte technologie: HTML5, CSS3, JS, jQuery, QuickCart</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--cpsens">
              <a href="http://produkcja.bcweb.com.pl/cpsens/cpsens_2017-09-29/" target="_blank">
                <h3 class="section_projects_el_title">Cpsens</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--nordic_care">
              <a href="http://nordiccare.pl/" target="_blank">
                <h3 class="section_projects_el_title">Nordic care</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--espol">
              <a href="http://produkcja.bcweb.com.pl/espol/2017-09-18_espol/" target="_blank">
                <h3 class="section_projects_el_title">Espol</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>bcweb</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--kossmann">
              <a href="http://kossmann.com.pl/" target="_blank">
                <h3 class="section_projects_el_title">Kossmann</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2017, </time>
                  <span>Kinga Nowicka Design</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery, QuickCart</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie od podstaw sklepu internetowego, oraz utrzymanie.</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--sowlofficial">
              <a href="https://sowlofficial.com/" target="_blank">
                <h3 class="section_projects_el_title">Sowlofficial</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2018, </time>
                  <span>Kinga Nowicka Design</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, jQuery, QuickCart</p>
                <p class="section_projects_el_desc">Zakres prac: Utrzymanie, częściowy redesign i support obecnego sklepu na systemie QuickCart.</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--cortexpower">
              <a href="https://www.cortexpower.de/" target="_blank">
                <h3 class="section_projects_el_title">cortexpower.de</h3>
                <span class="section_projects_el_date">
                  <time datetime="2017">2018, </time>
                  <span>top concepts GmbH</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: HTML5, CSS3, JS, jQuery, OXID, Smarty</p>
                <p class="section_projects_el_desc">Zakres prac: Redesign platformy e-commerce, do obecnego designu.</p>
              </a>
            </article>
          </div>
        </div>
      </section>

      <section id="section_contact" class="page_section">

        <div class="wrapper wrapper--section_contact">
          <h2 class="heading">Kontakt</h2>
          <p class="section_contact_desc">Jeśli podoba się Państwu moje portfolio i jesteście zainteresowani współpracą bądź macie dodatkowe pytania gorąco zachęcam do skorzystania z poniższego formularza kontaktowego. Chętnie zapoznam się i rozważę każdą popozycję.</p>
          <form action="send.php" method="post" class="contact_form" id="contact_form">
            <input type="text" name="contact_name" placeholder="Imię, Nazwisko, nazwa firmy" required>
            <input type="email" name="contact_email" placeholder="E-mail kontaktowy" required>
            <textarea name="contact_body" placeholder="Treść wiadomości" required></textarea>
            <button class="send_btn">Wyślij</button>
            <input type="hidden" name="49f84321e320cba4343bcab725c18149">
            <input type="hidden" name="b7b564ab232539533b8a357a5f64dff7">
          </form>
          <div class="section_contact_labels print-only">
            <div class="section_contact_labels_el">
              <i class="fa fa-phone"></i>
              <span>+48 512 260 969</span>
            </div>
            <div class="section_contact_labels_el">
              <i class="fa fa-envelope"></i>
              <span><?php echo str_replace("@","&#64;",'kalinowskixmarcin@o2.pl'); ?></span>
            </div>
          </div>
        </div>
      </section>

      <footer id="section_footer" class="page_section">
        <div class="wrapper wrapper--section_footer">
          <p class="section_footer_copyright screen-only">Copyright &copy; <?= date('Y') ?> Wszelkie prawa zastrzeżone.</p>
          <p class="section_footer_agreement print-only">Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w ofercie pracy dla potrzeb procesu rekrutacji zgodnie z ustawą z dnia 27.08.1997r. Dz. U. z 2002 r., Nr 101, poz. 923 ze zm.</p>
        </div>
      </footer>
    </main>

    <div id="backtotop" title="Powrót na górę strony"></div>

    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:100,300,500&amp;subset=latin-ext" rel="stylesheet">
    <script src="dist/scripts.all.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBweORh04qPGsjpO-ib0tVSgxlayRjUoM&callback=initMap"></script>
  </body>
</html>
