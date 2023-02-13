<!doctype html>
<html lang="en">
<head>
    <title>

    </title>
</head>
<body>
<h1>
modules page
</h1>

<table>
    <?php
    foreach ($modules as $module):
    ?>

    <tr>
        <td>
            <?= $module ?>
        </td>
    </tr>

    <?php
    endforeach;
    ?>
</table>

</body>
</html>