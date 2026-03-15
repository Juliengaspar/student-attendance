<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Teacher</title>
</head>
<body>
<h1>Teacher</h1>
<table style="border: 1px solid black">
    <tr style="border: 1px solid black">
        <th style="border: 1px solid black">First name</th>
        <th style="border: 1px solid black"> Last name</th>
    </tr>

    <?php
    foreach ($teachers as $teacher){
        ?>
    <tr style="border: 1px solid black">
        <td style="border: 1px solid black"><?= $teacher['first_name'] ?></td>
        <td style="border: 1px solid black"><?= $teacher['last_name'] ?></td>
    </tr>

        <?php

    }
    ?>

</table>

</body>
</html>