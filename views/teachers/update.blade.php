<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titre ?>></title>
</head>
<body>
<h1><?= $titre ?></h1>
<form action="/teacher" method="post">
    <input type="hidden" name="_method" value="mysave">
    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
    <input type="hidden" name="id" value="<?= $teacher->id ?>">

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" value="<?= $teacher->first_name ?>">

    <button type="submit">Soumettre les modification</button>

</form>

</body>
</html>