<?php
require_once "./inc/lessons_beginner.php";
include_once "./inc/header.inc.php";
?>

<main class="content">
    <div class="container">
        <h1 class="content__title">Урок 3</h1>

        <?php if (isset($_POST['string'])) { ?>
            <div class="output">
                Новая строка: <?php echo reverseString(htmlspecialchars($_POST['string'])); ?> <br>
                <a href="" class="btn" onclick="history.back()">Вернуться назад</a>
            </div>
        <?php } else {
            include './inc/form.inc.html';
        } ?>
    </div>
</main>

<?php
include_once "./inc/footer.inc.php";
?>
