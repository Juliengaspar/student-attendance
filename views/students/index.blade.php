<?php include_once VIEWS_PATH . '/partials/head.blade.php' ?>

<main class="page-main">
    <h1><?= $title ?></h1>

    <?php if (count($students) > 0): ?>
    <ol>
            <?php foreach ($students as $student): ?>
        <li>
            <a href="/etudiant?id=<?= $student->id ?>">
                    <?= $student->first_name ?>
                &nbsp;<?= $student->last_name ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ol>
    <?php else: ?>
    <p>Mais où sont-ils&nbsp;?</p>
    <?php endif; ?>
    <div>
        <a href="/etudiants/create" class="action">Ajouter un étudiant</a>
    </div>
</main>

<?php include VIEWS_PATH . '/partials/nav.blade.php' ?>

<?php include VIEWS_PATH . '/partials/footer.blade.php' ?>