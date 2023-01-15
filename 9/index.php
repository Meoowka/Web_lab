<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/CSS.css">
    <title>Лабораторная №9</title>
</head>
<body>
    <?
        include ("./php/Contr/main.php")
    ?>
    <header class="header">
        <a href="./" class="header-logo"><img src="./material/BlogLogo.png" alt=""></a>
            <div class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
                </div>
        <nav class="navbar">
            <a href="#" class="navbar-login">
                <img src="./material/Profile.png" alt=""><span>Войти</span></a>
            <a href="#" class="navbar-reg">Зарегистрироваться</a>
        </nav>
    </header>
    <main class="main">
        <div class="main-post">
            <div class="main-post-first">
                <h1 class="post-first">
                    Последние публикации
                </h1>
                <div class="second-publish">
                <div class="second-post">
                       <? require './php/view/Post-view.php'?>
                </div>
            </div>
        
            <div class="main-post-second">
                
                <button class="second-button">Загрузить ещё 6</button>
            </div>
        </div>
                <div class="second-category">
                    <h3 class="second-h3">
                        Рубрики
                    </h3>
                    <ul class="second-ul">                        
                        <? require './php/view/Category-view.php'?>
                    </ul>
                </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-url">
            <a href="#" class="footer-a">Об авторе</a>
            <a href="#" class="footer-a">Технологии</a>
        </div>
        <div class="footer-info">
            <span>@ Blog, 2022</span>
        </div>
    </footer>
    <script src="./js/main_js.js"></script>
</body>
</html>