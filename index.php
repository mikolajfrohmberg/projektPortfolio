<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta description="Wykonał Mikołaj Frohmberg. Strona prezentująca umiejętności
    związane z kodowaniem w webowych językach programowania.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Mikołaj Frohmberg</title>
    
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <script src="libraries/jquery-3.4.1.min.js"></script>
    <script src="libraries/moment-2.24.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="libraries/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="libraries/slick-1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="libraries/slick-1.8.1/slick/slick.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <nav>
        <div id="navbar">
            <a id="scroll-top" href="#"></a>
            <a class="change-lang" id="lang-en" href="./en"></a>
        </div>
    </nav>

    <div id="title-banner">
        <h1>PORTFOLIO - MIKOŁAJ FROHMBERG</h1>
    </div>
    <div id="main-article">
        <article>
            <li class="article-point"><span>O mnie</span></li>
            <figure id="zdjecie">
                <img src="img/myphoto.jpg" alt="Moje zdjęcie">
            </figure>
            <div id="opis">
            <p><strong>Cześć!</strong></p>
            <p>Mam na imię Mikołaj i urodziłem się <span id="wiek"></span> temu w Poznaniu.</p>
            <p>Pierwszą styczność z programowaniem miałem w wieku 14 lat, gdy uczyłem się języka C++ na&nbsppodstawie tutoriali dostępnych na YouTube.
            <p>Kolejno wiedzę z zakresu programowania oraz działania baz danych podbudowałem w&nbspliceum (w&nbspklasie o&nbspprofilu częściowo informatycznym) oraz na studiach.</p>
            <p>Od ponad 2 lat moim głównym obszarem zainteresowania są języki programowania webowego.</p>
            <p>W międzyczasie prowadziłem korepetycje z&nbspzakresu programowania dla uczniów szkół podstawowych i&nbspśrednich oraz wziąłem udział w&nbspprogramie Letnich Praktyk Eurocash w&nbspdziale Analiz i&nbspProgramowania.</p>
            <p>Obecnie jestem studentem III roku Informatyki na Politechnice Poznańskiej.</p>
            <p>Program studiów nie obejmuje pełnego zapoznania się z wymaganymi w obszarze webowym zagadnieniami, więc uczę się na podstawie materiałów dostępnych w sieci oraz stosując metodę prób i błędów :)</p>
            <p>Moim ulubionym językiem jest JavaScript, gdyż dostrzegam drzemiący w nim wielki potencjał oraz uniwersalność.</p>
            </div>
            <li class="article-point"><span>Wykorzystywane języki</span></li>
            <div id="languages-carousel">
                <div class="slick-element">
                    <img class="icon" src="img/icons/javascript.svg"/>
                    <span>Javascript</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/html5.svg"/>
                    <span>HTML 5</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/css.svg"/>
                    <span>CSS</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/php.svg"/>
                    <span>PHP</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/cpp.svg"/>
                    <span>C++</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/python.svg"/>
                    <span>Python</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/c-sharp.svg"/>
                    <span>C#</span>
                </div>
            </div>

            <li class="article-point"><span>Poznane technologie</span></li>
            <div id="technology-carousel">
                <div class="slick-element">
                    <img class="icon" src="img/icons/jquery.svg"/>
                    <span>JQuery</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/bootstrap.svg"/>
                    <span>Bootstrap</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/sass.svg"/>
                    <span>Sass</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/mysql.svg"/>
                    <span>MySQL</span>
                </div>
                <div class="slick-element">
                    <img class="icon" src="img/icons/windowsforms.svg"/>
                    <span>Windows Forms</span>
                </div>  
            </div>
            <li class="article-point"><span>Zainteresowania</span></li>
            <div id="intrests">
                <div class="zainteresowanie" id="new-tech">
                    <img class="interest-img" src="img/interests/cpu1.jpg" alt="new technologies picture"/>
                    <div class="slide-interest"><span>Technologie w codzienności</span></div>
                </div>
                <div id="break1" class="break"></div>
                <div class="zainteresowanie" id="soccer">
                    <img class="interest-img" src="img/interests/soccer1.jpg" alt="soccer picture"/>
                    <div class="slide-interest"><span>Piłka nożna<br>(liga hiszpańska)</span></div>
                </div>
                <div id="break2" class="break"></div>
                <div class="zainteresowanie" id="geocaching">
                    <img class="interest-img" src="img/interests/geocache1.jpg" alt="geocaching picture"/>
                    <div class="slide-interest"><span>Geocaching</span></div>
                </div>
                <div id="break3" class="break"></div>
                <div class="zainteresowanie" id="magic-tg">
                    <img class="interest-img" src="img/interests/mtg1.jpg" alt="magic the gathering picture"/>
                    <div class="slide-interest"><span>Magic: the Gathering</span></div>
                </div>
                <div id="break4" class="break"></div>
                <div class="zainteresowanie" id="video-games">
                    <img class="interest-img" src="img/interests/videogame1.jpg" alt="video games picture"/>
                    <div class="slide-interest"><span>Gry wideo</span></div>
                </div>
            </div>
        </article>
    </div>

    <footer>
        <div id="footer">
            <div id="contact">
                <div id="email-container"><p><a id="email" href="mailto:mikolaj.frohmberg@gmail.com"><img src="img/icons/mail.svg"/>mikolaj.frohmberg@gmail.com</a></p></div>
                <div id="git-container"><p><a id="repozytorium" target="blank" href="https://github.com/mikolajfrohmberg"><img src="img/icons/github.svg"/>github.com/mikolajfrohmberg</a></p></div>
            </div>
            <span>Mikołaj Frohmberg 2020r.</span>
        </div>
    </footer>

</body>
</html>

<?php
    
?>