<?php include_once VIEWS_PATH . '/partials/head.blade.php' ?>

<p><?= $teacher->first_name ?></p>
<!--<a href="/teacher/delete?id=<?= $teacher->id ?>">suprimer le proffesseur</a>-->

<main class="page-main">
    <h1><?= $title ?></h1>
    <section class="resource-actions">
        <h2 class="sr-only">Actions relatives à <?= $teacher->first_name ?> <?= $teacher->last_name ?></h2>
        <ul>
            <li>
                <a href="/teacher/edit?id=<?= $teacher->id ?>">Modifier <?= $teacher->first_name ?></a>
            </li>
            <li>
                <form action="/teacher" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                    <input type="hidden" name="id" value="<?= $teacher->id ?>">
                    <button type="submit">Supprimer <?= $teacher->first_name ?></button>
                </form>
            </li>
        </ul>
    </section>
    <dl>
        <div>
            <dt>Prénom</dt>
            <dd><?= $teacher->first_name ?></dd>
        </div>
        <div>
            <dt>Nom de famille</dt>
            <dd><?= $teacher->last_name ?></dd>
        </div>
        <div>
            <dt>Email</dt>
            <dd><a href="mailto: <?= $teacher->email ?>"><?= $teacher->email ?></a></dd>
        </div>
    </dl>


    <form action="/teacher" method="post">
        <input type="hidden" name="_method" value="modifie">
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <input type="hidden" name="id" value="<?= $teacher->id ?>">
        <button type="submit">modifier la fiche <?= $teacher->first_name ?></button>
    </form>

    <ul>
        <li>
            <a href="/teacher/modifie?id=<?= $teacher->id ?>">Modifier <?= $teacher->first_name ?></a>
        </li>
    </ul>
    <div>
        <a href="/teacher" class="action">Voir tous les prof</a>
    </div>
<?php include VIEWS_PATH . '/partials/nav.blade.php' ?>

<?php include VIEWS_PATH . '/partials/footer.blade.php' ?>