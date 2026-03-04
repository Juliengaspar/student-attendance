<?php include VIEWS_PATH.'/partials/head.php' ?>
<main class="page-main">
    <h1><?= $title ?></h1>

    <?php if (count($students) > 0) { ?>
        <ol>
            <?php foreach ($students as $student) { ?>
                <li>
                    <?= $student['first_name'] ?>
                    &nbsp;&nbsp;<?= $student['last_name'] ?>
                </li>
            <?php } ?>
        </ol>
    <?php } else { ?>
        <p>Mais où sont-ils&nbsp;?</p>
    <?php } ?>

</main>


<?php include VIEWS_PATH.'/partials/nav.php' ?>


<?php include VIEWS_PATH.'/partials/footer.php' ?>
