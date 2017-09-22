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
              <p class="section_skills_el_desc">Bardzo dobra znajomość, znaczniki &lt;nav&gt;, &lt;section&gt;, &lt;footer&gt;, nie są mi obce ;)</p>
            </div>
          </article>
          <article class="section_skills_el --css --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">CSS3</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, moja ulubiona wartość to - display: flex, żadnych float'ów.</p>
            </div>
          </article>
          <article class="section_skills_el --rwd --fa">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Responsive Web Design</h3>
              <p class="section_skills_el_desc">Bardzo dobra znajomość, bez żadnego skrępowania używam reguł @media tak, aby nie nadpisywać wartości CSS.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <svg aria-labelledby="simpleicons-sass-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-sass-icon">Sass icon</title><path d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zM9.615 15.998c.175.645.156 1.248-.024 1.792l-.065.18c-.024.061-.052.12-.078.176-.14.29-.326.56-.555.81-.698.759-1.672 1.047-2.09.805-.45-.262-.226-1.335.584-2.19.871-.918 2.12-1.509 2.12-1.509v-.003l.108-.061zm9.911-10.861c-.542-2.133-4.077-2.834-7.422-1.645-1.989.707-4.144 1.818-5.693 3.267C4.568 8.48 4.275 9.98 4.396 10.607c.427 2.211 3.457 3.657 4.703 4.73v.006c-.367.18-3.056 1.529-3.686 2.925-.675 1.47.105 2.521.615 2.655 1.575.436 3.195-.36 4.065-1.649.84-1.261.766-2.881.404-3.676.496-.135 1.08-.195 1.83-.104 2.101.24 2.521 1.56 2.43 2.1-.09.539-.523.854-.674.944-.15.091-.195.12-.181.181.015.09.091.09.21.075.165-.03 1.096-.45 1.141-1.471.045-1.29-1.186-2.729-3.375-2.7-.9.016-1.471.091-1.875.256-.03-.045-.061-.075-.105-.105-1.35-1.455-3.855-2.475-3.75-4.41.03-.705.285-2.564 4.8-4.814 3.705-1.846 6.661-1.335 7.171-.21.733 1.604-1.576 4.59-5.431 5.024-1.47.165-2.235-.404-2.431-.615-.209-.225-.239-.24-.314-.194-.12.06-.045.255 0 .375.12.3.585.825 1.396 1.095.704.225 2.43.359 4.5-.45 2.324-.899 4.139-3.405 3.614-5.505l.073.067z"/></svg>
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">SASS</h3>
              <p class="section_skills_el_desc">A dokładnie składnia SCSS, zdecydowanie ułatwia pracę przy większych projektach.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">jQuery</h3>
              <p class="section_skills_el_desc">Dobra znajomość. </p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">JavaScript</h3>
              <p class="section_skills_el_desc">Znajomość na poziomie podstawowy+, rozumiem i potrafę napisać samodzielnie kod, w tej dziedzinie chciałbym się najbardziej rozwinąć i doszlifować swoje umiejętności.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Vue.js</h3>
              <p class="section_skills_el_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">PHP</h3>
              <p class="section_skills_el_desc">Dobra znajomość czyztego PHP, również obiektowo.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Twig</h3>
              <p class="section_skills_el_desc">Aby kod stał się czytelniejszy.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Git</h3>
              <p class="section_skills_el_desc">Codziennie po przyjsciu do pracy podwójne espresso, a przed wyjściem git commit oraz git push.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Grunt/Gulp</h3>
              <p class="section_skills_el_desc">Narzędzia automatyzacji bez których nie wyobrażam sobie kodowania, skrypty takie jak autoprefixer, czy cssmin to podstawa.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">Node package manager</h3>
              <p class="section_skills_el_desc">Wygodne narzędzie do instalowania różnych skryptów, pluginów, z którego chętnie korzystam.</p>
            </div>
          </article>
          <article class="section_skills_el">
            <div class="section_skills_el_content">
              <h3 class="section_skills_el_title">SQL</h3>
              <p class="section_skills_el_desc">Dobra znajomość, JOIN'y, optymalizacja typy pól, itp.</p>
            </div>
          </article>
          <article class="section_skills_el">
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
