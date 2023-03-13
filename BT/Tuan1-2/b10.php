<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>
    <?php
    $meal = [
        "breakfast" => "Break and milk",
        "lunch" => "Rice",
        "dinner" => "Instance Noodle"
    ];
    echo "<table>";
    foreach ($meal as $category => $name) {
        echo "<tr>
             <td style='background-color: yellow;'>$category</td>
             <td>$name</td>
             </tr>";
    }
    echo "</table>";

    ?>
</body>

</html>