
<?php

include(dirname(__FILE__) . '/app/models/task.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $delete = htmlspecialchars($_POST["delete"]) ;

    $newTask1 = new Task();
    
    $newTask1->deleteTask($delete);
    die();

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Dlette</title>
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
            <label for="inputDelete">ENTRER UN ID </label>
            <input type="text" name="delete" class="form-control" id="inputDelete" placeholder="Delete....." required>
        </div>

        <button type="submit" class="btn btn-primary">DELETE</button>
    </form>

</body>

</html>