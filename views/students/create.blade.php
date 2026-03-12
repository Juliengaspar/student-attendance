<?php include_once VIEWS_PATH . '/partials/head.blade.php' ?>
<main class="page-main">
    <h1><?= $title ?></h1>
    <form action="/etudiants" method="post" enctype="multipart/form-data">
        <!-- Equivalent to... -->
        <input type="hidden" name="_token" value="<?= csrf_token() ?>"/>
        <div>
            <label for="family_name">Nom de famille <sup>*</sup></label>
            <input type="text" name="family_name" id="family_name" required>
        </div>
        <div>
            <label for="first_name">Prénom<sup>*</sup></label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div>
            <label for="matricule">Matricule<sup>*</sup></label>
            <input type="text" name="matricule" id="matricule" required>
        </div>
        <div>
            <label for="email">Email<sup>*</sup></label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="birth_date">Date de naissance</label>
            <input type="date" name="birth_date" id="birth_date">
        </div>
        <div>
            <label for="profile_photo">Photo de profile <small>jpeg ou png, 2mo maximum </small></label>
            <input type="file" name="profile_photo" id="profile_photo">
        </div>
        <button type="submit">Enregistrer l'etudiants</button>
    </form>

</main>

<?php include VIEWS_PATH . '/partials/nav.blade.php' ?>

<?php include VIEWS_PATH . '/partials/footer.blade.php' ?>