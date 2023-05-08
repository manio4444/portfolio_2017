<?php
function includeSvg($url) { if (file_exists($url)) include $url; }

$aboutConfig = json_decode(file_get_contents('src/config/data/about.json'), true);
$skillsConfig = json_decode(file_get_contents('src/config/data/skills.json'), true);
$experienceConfig = json_decode(file_get_contents('src/config/data/experience.json'), true);
$educationConfig = json_decode(file_get_contents('src/config/data/education.json'), true);
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
          <h2 class="heading"><?= $aboutConfig["title"] ?></h2>
          <p class="section_about_desc"><?= $aboutConfig["description"] ?></div>
      </section>

      <section id="section_skills" class="page_section">
        <div class="wrapper wrapper--section_skills">
          <h2 class="heading -section_skills">Umiejętności</h2>
          <div class="section_skills_el_container">
            <?php foreach ($skillsConfig["data"] as $skill) : ?>
            <article data-aos="zoom-in-up" class="section_skills_el">
              <div class="section_skills_el_icon <?= $skill["cssClassName"] ?>">
                <?php if (isset($skill["svg"])) includeSvg($skill["svg"]); ?>
              </div>
              <div class="section_skills_el_content">
                <h3 class="section_skills_el_title"><?= $skill["title"] ?></h3>
                <!-- EXAMPLE STARTS - ●●◐○○ -->
                <div class="section_skills_el_star"><?= $skill["stars"] ?></div>
              </div>
            </article>
          <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="section_experience" class="page_section">
        <div class="wrapper wrapper--section_experience">
          <h2 class="heading section_experience_heading">Doświadczenie zawodowe</h2>
          <div class="section_experience_side section_experience_side--left">
            <span class="section_experience_icon section_experience_icon--work"></span>
            <?php foreach ($experienceConfig["data"] as $job) : ?>
              <article class="section_experience_el">
                <div class="section_skills_el_icon">
                </div>
                <div class="section_skills_el_content">
                  <h3 data-aos="fade-right" class="section_experience_el_title"><?= $job["title"] ?></h3>
                  <time data-aos="fade-right" class="section_experience_el_date" datetime="<?= $job["datetimeTag"] ?>"><?= $job["datetimeText"] ?></time>
                  <p data-aos="fade-right" class="section_experience_el_desc"><?= $job["description"] ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
          <div class="section_experience_side section_experience_side--right screen-only">
            <span class="section_experience_icon section_experience_icon--school"></span>
            <?php foreach ($educationConfig["data"] as $education) : ?>
              <article class="section_experience_el">
                <h3 data-aos="fade-left" class="section_experience_el_title"><?= $education["title"] ?></h3>
                <time data-aos="fade-left" class="section_experience_el_date" datetime="<?= $education["datetimeTag"] ?>"><?= $education["datetimeText"] ?></time>
                <p data-aos="fade-left" class="section_experience_el_desc"><?= $education["description"] ?></p>
              </article>
            <?php endforeach; ?>
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
              <li>Możliwość pracy zdalnej 100%</li>
              <li>Forma zatrudnienia: B2B</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="section_expectations" class="page_section screen-only">
        <div class="wrapper wrapper--section_expectations">
          <div class="section_expectations_desc">
            <h2 class="heading">Oczekiwania</h2>
            <p>W związku z obecną sytuacją (pandemia) szukam odwrotnie niż zwykle - remote 100%, z opcją na okazjonalną wizytę w biurze, natomiast docelowo - praca w biurze z opcją na remote :) Zależy mi na projektach, w których mógłbym wykorzystać swoją dotychczas zgromadzoną wiedzę i umiejętności, cały czas się rozwijać, oraz wymieniać doświadczeniami ;)</p>
            <p>Interesują mnie stanowiska: Front-End Developer, React Developer, JavaScript Developer, React-Native Developer, Vue Developer, kolejność oznacza ilość doświadczenia w poszczególnych specjalizacjach.</p>
            <p>Poniżej wklejam mapkę z zarysem obszaru, w którym chciałbym pracować (docelowo po pandemii) oraz pokazuję, że umiem obsługiwać Google Maps API v3 ;) Z racji, iż dojeżdżam obecnie z Mińska Mazowieckiego, szukam lokalizacji w miarę dobrze skomunikowanej ze wschodnią linią kolejową, ew. z drogą krajową nr 2 lub autostradą A2 (południowa obwodnica Warszawy), ale obiecuję rozważyć wszystkie możliwe propozycje.</p>
            <p>Podsumowując:</p>
            <ul>
              <li>Front/React/JavaScript/Vue/React-Native</li>
              <li>Forma zatrudnienia: B2B</li>
              <li>Miejsce: Warszawa, remote</li>
              <li>Remote: obecnie 100%, docelowo ok. 40%</li>
            </ul>
          </div>
        </div>
        <div id="google_map"></div>
      </section>

      <section id="section_projects" class="page_section screen-only">
        <div class="wrapper">
          <h2 class="heading">Przykładowe projekty</h2>
          <div class="section_projects_content">
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

            <article class="section_projects_el section_projects_el--hgtv">
              <a href="https://de.hgtv.com/" target="_blank">
                <h3 class="section_projects_el_title">HGTV DE</h3>
                <span class="section_projects_el_date">
                  <time datetime="2019">2019, </time>
                  <span>Intive GmbH</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: JavaScript, React, Node</p>
                <p class="section_projects_el_desc">Zakres prac: Stworzenie webowej aplikacji VOD brandu HGTV na rynek niemiecki, na podstawie VOD stworzonego przez Discovery</p>
              </a>
            </article>

            <article class="section_projects_el section_projects_el--heathrowexpress">
              <a href="https://www.heathrowexpress.com/" target="_blank">
                <h3 class="section_projects_el_title">Heathrow Express</h3>
                <span class="section_projects_el_date">
                  <time datetime="2019">2019, </time>
                  <span>Intive GmbH</span>
                </span>
                <p class="section_projects_el_desc">Użyte technologie: JavaScript, Vue.js, jQuery, ASP.NET</p>
                <p class="section_projects_el_desc">Zakres prac: Końcowy etap developmentu, głównie bugfixing oraz ostatnie zmiany w designach przed go live. Aplikacja służy do zamawiania biletów pociągowych, pomiędzy dwoma Londyńskimi lotniskami.</p>
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
