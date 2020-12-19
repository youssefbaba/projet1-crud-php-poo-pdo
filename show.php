<?php

include(dirname(__FILE__) . '/app/models/task.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newtask2 = new Task();

    $id = htmlspecialchars($_POST["id"]);

    $listData = $newtask2->getTaskById($id);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Show</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .myDiv {
            border: 5px;
            background-color: lightblue;
            text-align: center;
            margin-top: 100px;
        }
    </style>

</head>

<body>
    <form action="" method="POST">

        <div class="form-group">
            <label for="inputId">ENTER UN ID NUMERIQUE </label>
            <input type="text" name="id" class="form-control" id="inputId" placeholder="Id Numerique" required>
        </div>

        <button type="submit" class="btn btn-primary">RECHERCHE</button>
    </form>

    <div class="myDiv">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <table style="width:100%">
                <tr>
                    <th>Content</th>
                    <th>Description</th>
                    <th>Completed</th>
                </tr>
                <tr>
                    <td><?php echo $listData["content"]; ?></td>
                    <td><?php echo $listData["description"]; ?></td>
                    <td><?php echo $listData["completed"]; ?></td>
                </tr>

            </table>

        <?php  } ?>


    </div>








</body>

</html>