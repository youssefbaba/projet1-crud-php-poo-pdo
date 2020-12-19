
<?php

include(dirname(__FILE__) . '/app/models/task.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newtask3 = new Task();

    $search = htmlspecialchars($_POST["search"]);

    $listData = $newtask3->searchTasks($search);
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
            <label for="inputSearch">Entrez la chose que vous recherchez</label>
            <input type="text" name="search" class="form-control" id="inputSearch" placeholder="Search ....." required>
        </div>

        <button type="submit" class="btn btn-primary">SEARCH</button>
    </form>

    <div class="myDiv">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <table style="width:100%">
                <tr>
                    <th>Id</th>
                    <th>Content</th>
                    <th>Description</th>
                    <th>Completed</th>
                </tr>
                <?php foreach ($listData as $value) { ?>
                    <tr>
                        <td><?php echo $value["id"]; ?></td>
                        <td><?php echo $value["content"]; ?></td>
                        <td><?php echo $value["description"]; ?></td>
                        <td><?php echo $value["completed"]; ?></td>

                    </tr>
                <?php  };  ?>

            </table>

        <?php  } ?>


    </div>








</body>

</html>