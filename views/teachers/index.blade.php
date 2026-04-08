
<?php include_once VIEWS_PATH . '/partials/head.blade.php' ?>

<main class="page-main">
    <h1><?= $title ?></h1>
    <table style="border: 1px solid black ">
        <tr style="border: 1px solid black ">
            <th style="border: 1px solid black">first name</th>
            <th style="border: 1px solid black">last name</th>
            <th style="border: 1px solid black">email</th>
            <th style="border: 1px solid black">id</th>
        </tr>
        <?php foreach ($teachers as $teacher){
            ?>
        <tr style="border: 1px solid black ">
            <td style="border: 1px solid black "><a
                        href="/teacher/detail?id=<?= $teacher->id ?>"><?= $teacher->first_name ?></a>
            </td>
            <td style="border: 1px solid black "><?= $teacher->last_name ?></td>
            <td style="border: 1px solid black "><?= $teacher->email ?></td>
            <td style="border: 1px solid black "><?= $teacher->id ?></td>
        </tr>

            <?php
        }
        ?>

    </table>


<?php include VIEWS_PATH . '/partials/nav.blade.php' ?>

<?php include VIEWS_PATH . '/partials/footer.blade.php' ?>
