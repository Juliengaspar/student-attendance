<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>create</title>
</head>
<body>
<h1>AJout d'un professeur</h1>

<form action="/teachers" method="POST">
    <div>
        <label for="first_Name">Votre prenom</label>
        <input type="text" id="first_Name" name="first_Name">
    </div>
    <div>
        <label for="last_Name">Votre nom de famille</label>
        <input type="text" id="last_Name" name="last_Name">
    </div>
    <div>
        <label for="email">Votre email</label>
        <input type="email" id="email" name="email">
    </div>
    <button type="submit">Soummetre</button>

</form>

</body>
</html>