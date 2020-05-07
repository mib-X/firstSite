<?php
require_once "./inc/lessons_beginner.php"; ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lesson 2</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__body">
            <img class="header__logo" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='172' height='38' viewBox='0 0 172 38'%3E%3Cdefs%3E%3Cstyle%3E .prefix__cls-2%7Bfill:%2300a6eb%7D.prefix__cls-3%7Bfill:%23e60036%7D %3C/style%3E%3C/defs%3E%3Cg id='prefix__logo' transform='translate(-354 -24)'%3E%3Cpath id='prefix__Rectangle_220' d='M0 0H172V38H0z' data-name='Rectangle 220' transform='translate(354 24)' style='fill:%23e87474;opacity:0'/%3E%3Cpath id='prefix__Path_580' d='M184.09 253.859v4.071h4.84v2.42h-4.84v4.07h5.61v2.42h-8.58v-15.4h8.47v2.419z' class='prefix__cls-2' data-name='Path 580' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_581' d='M201.8 266.84h-2.86v-.66a4.085 4.085 0 0 1-2.6.88 4.178 4.178 0 0 1-3.3-1.43 5.465 5.465 0 0 1-1.254-3.74 5.105 5.105 0 0 1 1.408-3.741 4.927 4.927 0 0 1 3.674-1.429 4.834 4.834 0 0 1 2.068.44v-6.82h2.86zm-6.369-6.853a3.034 3.034 0 0 0 0 3.806 2.23 2.23 0 0 0 1.727.737 2.2 2.2 0 0 0 1.782-.7v-3.96a2.506 2.506 0 0 0-1.782-.616 2.23 2.23 0 0 0-1.727.733z' class='prefix__cls-2' data-name='Path 581' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_582' d='M213.768 256.94v5.61a4.355 4.355 0 0 1-1.276 3.266 4.585 4.585 0 0 1-3.344 1.244 4.536 4.536 0 0 1-3.322-1.254 4.362 4.362 0 0 1-1.276-3.256v-5.61h2.97v5.61a2.083 2.083 0 0 0 .484 1.43 1.655 1.655 0 0 0 2.464 0 2.088 2.088 0 0 0 .484-1.43v-5.61z' class='prefix__cls-2' data-name='Path 582' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_583' d='M219.829 259.987a3.034 3.034 0 0 0 0 3.806 2.494 2.494 0 0 0 3.53.011l1.739 1.738a4.921 4.921 0 0 1-3.719 1.518 5.173 5.173 0 1 1 0-10.34 4.93 4.93 0 0 1 3.719 1.54l-1.739 1.74a2.469 2.469 0 0 0-3.53-.011z' class='prefix__cls-2' data-name='Path 583' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_584' d='M235.591 264.97v1.87a2.646 2.646 0 0 1-.945.132 2.287 2.287 0 0 1-2.179-1.144 3.467 3.467 0 0 1-2.684 1.232 2.756 2.756 0 0 1-2.112-.847 2.906 2.906 0 0 1-.792-2.057 2.8 2.8 0 0 1 1.353-2.486 5.861 5.861 0 0 1 3.267-.88 4.013 4.013 0 0 1 .639.044v-.484a1.317 1.317 0 0 0-.374-.913 1.366 1.366 0 0 0-1.057-.407 2.756 2.756 0 0 0-1.012.209 2.2 2.2 0 0 0-.814.517l-1.518-1.518a5.025 5.025 0 0 1 3.609-1.518 4.1 4.1 0 0 1 2.925 1.034 3.411 3.411 0 0 1 1.1 2.6v3.938a.727.727 0 0 0 .165.495.547.547 0 0 0 .429.183zm-4.818-.22a1.734 1.734 0 0 0 1.365-.638V262.7a1.845 1.845 0 0 0-.485-.066 2.646 2.646 0 0 0-1.331.319.968.968 0 0 0-.56.869.938.938 0 0 0 .253.638.96.96 0 0 0 .758.29z' class='prefix__cls-2' data-name='Path 584' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_585' d='M237.2 259.14v-2.2h1.1v-2.2h2.971v2.2h1.979v2.2h-1.979v4.07a1.5 1.5 0 0 0 .362 1.056 1.237 1.237 0 0 0 .957.4 1.377 1.377 0 0 0 .66-.154v2.332a2.906 2.906 0 0 1-1.232.22 3.6 3.6 0 0 1-2.717-1.035 3.874 3.874 0 0 1-1-2.815v-4.07z' class='prefix__cls-2' data-name='Path 585' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_586' d='M245.932 255.136a1.647 1.647 0 1 1 1.166.484 1.583 1.583 0 0 1-1.166-.484zm-.265 11.7v-9.9h2.86v9.9z' class='prefix__cls-2' data-name='Path 586' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_587' d='M252.411 265.63a5.511 5.511 0 0 1 0-7.481 5.812 5.812 0 0 1 7.634 0 5.513 5.513 0 0 1 0 7.481 5.809 5.809 0 0 1-7.634 0zm2.145-5.643a3.157 3.157 0 0 0 0 3.806 2.264 2.264 0 0 0 3.343 0 3.153 3.153 0 0 0 0-3.806 2.264 2.264 0 0 0-3.343 0z' class='prefix__cls-2' data-name='Path 587' transform='translate(252.88 -205.34)'/%3E%3Cpath id='prefix__Path_588' d='M263.927 256.94h2.86v.66a3.914 3.914 0 0 1 2.552-.88 3.355 3.355 0 0 1 2.7 1.177 4.645 4.645 0 0 1 1 3.113v5.83h-2.86v-5.83a1.835 1.835 0 0 0-.44-1.265 1.485 1.485 0 0 0-1.166-.495 2.281 2.281 0 0 0-1.782.7v6.886h-2.86z' class='prefix__cls-2' data-name='Path 588' transform='translate(252.88 -205.34)'/%3E%3Cg id='prefix__Group_742' data-name='Group 742' transform='translate(-5389.684 -1173.67)'%3E%3Cpath id='prefix__Path_1021' d='M5743.683 1236.024h6.064v4.1h.107a8.254 8.254 0 0 1 2.953-3.38 8.488 8.488 0 0 1 4.976-1.463 9.611 9.611 0 0 1 4.282.878 8.443 8.443 0 0 1 2.927 2.314 9.338 9.338 0 0 1 1.675 3.3 13.816 13.816 0 0 1 .534 3.83v15.963h-6.387v-14.153a17.77 17.77 0 0 0-.16-2.341 6.318 6.318 0 0 0-.691-2.208 4.6 4.6 0 0 0-1.463-1.624 4.306 4.306 0 0 0-2.473-.639 5.457 5.457 0 0 0-2.661.613 5.633 5.633 0 0 0-1.837 1.569 6.951 6.951 0 0 0-1.09 2.208 8.769 8.769 0 0 0-.373 2.527v14.047h-6.384z' class='prefix__cls-3' data-name='Path 1021' transform='translate(0 -26.647)'/%3E%3Cpath id='prefix__Path_1022' d='M5922.337 1242.92v-7.534l-11.76 9.736-11.759-9.736v7.534l11.759 9.736z' class='prefix__cls-3' data-name='Path 1022' transform='translate(-109.916 -26.722)'/%3E%3Cpath id='prefix__Path_1023' d='M5922.337 1278.524v7.534l-11.76-9.736-11.759 9.736v-7.534l11.759-9.736z' class='prefix__cls-2' data-name='Path 1023' transform='translate(-109.916 -50.388)'/%3E%3Cpath id='prefix__Rectangle_564' d='M0 0H6.385V25.54H0z' class='prefix__cls-3' data-name='Rectangle 564' transform='translate(5774.859 1209.378)'/%3E%3Cpath id='prefix__Path_1024' d='M5855.957 1201.609a3.939 3.939 0 1 1-3.939-3.939 3.939 3.939 0 0 1 3.939 3.939' class='prefix__cls-3' data-name='Path 1024' transform='translate(-73.966)'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E" alt="">
            <nav class="header__nav">
                <ul class="header__menu">
                    <li><a href="./lesson1.php">Урок 1</a></li>
                    <li><a href="./lesson2.php">Урок 2</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main class="content">
    <div class="container">
        <h1 class="content__title">Урок 2</h1>
        <div class="multitable__body">
            <?php for ($i = 1; $i < 11; $i++) : ?>
                <div class="multitable__item">
                    <?php multiTablePaint($i, 'paintNumbers'); ?>
                </div>

            <?php endfor; ?>
        </div>

    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__info">
            <?php echo date("Y"); ?> ©
        </div>
    </div>
</footer>
</body>
</html>