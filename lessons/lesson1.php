<?php
require_once "./inc/lessons_beginner.php";
include_once "./inc/header.inc.php";
?>

    <main class="content">
        <div class="container">
            <h1 class="content__title">Урок 1</h1>
            <div class="multitable__body">
                <?php for ($i = 1; $i < 11; $i++) : ?>
                    <div class="multitable__item">
                        <?php multiTableItem($i); ?>
                    </div>

                <?php endfor; ?>
            </div>

        </div>
    </main>

<?php
include_once "./inc/footer.inc.php";
?>