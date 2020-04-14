<?php
function GET($key) {
    if (!isset($_GET[$key])) return NULL;
    return preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",strip_tags($_GET[$key]));;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I♡Films - <?php echo ucfirst(strtolower(GET("page")));?></title>
    <link rel="stylesheet" href="Assets/Css/style<?php if (GET("page") === "home") echo "-home"; else echo "-other"; ?>.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:200,300,400,500,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ecc921254.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="call_us">
        <i class="fas fa-phone"></i>
    </div>

    <header>

        <div class="container">

            <div class="logo">
                I<i class="far fa-heart"></i>FILMS
            </div>
            <i class="menu_toggle_btn fas fa-bars"></i>
            <nav class="">
                <a href="./?page=list">Фільми</a>
                <a href="./?page=list">Серіали</a>
                <a href="./?page=list">Мультфільми</a>
                <a href="./?page=list">Добірки</a>
            </nav>
        </div>
    </header>


    <?php

        $filepath = "./".GET("page").".html";
        if (!file_exists($filepath))
            $filepath = "./404.html";
        $file = file_get_contents($filepath);
        echo $file;

    ?>

    <footer>
        <div class="part1">
            <div class="container">
                <div class="contacts">
                    <div>Маєш кльові ідеї? Пропонуй!</div>
                    <div>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-telegram"></i>
                        <i class="fab fa-discord"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </div>
                <div class="quote">
                    <i class="fas fa-quote-left"></i>
                    <div class="text">
                        <div class="quote_content"></div>
                        <div class="quote_author"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="part2">
            <div class="container">
                <div class="search">
                    <input type="text" placeholder="Що шукаємо?">
                </div>
                <div class="sections">
                    <div class="item">
                        <div class="title">Розділи</div>
                        <a href="./?page=list" class="member">Фільми</a>
                        <a href="./?page=list" class="member">Серіали</a>
                        <a href="./?page=list" class="member">Мультфільми</a>
                        <a href="./?page=list" class="member">Добірки</a>
                    </div>
                    <div class="item">
                        <div class="title">Підтримка</div>
                        <div class="member">+380630000000</div>
                        <div class="member">+380635553535</div>
                        <div class="member">mail1@gmail.com</div>
                        <div class="member">mail2@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="Assets/JS/menu.js"></script>
    <script src="Assets/JS/quote.js"></script>

</body>
