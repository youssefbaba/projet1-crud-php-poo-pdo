<?php

include(dirname(__FILE__) . '/app/models/task.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $content = htmlspecialchars($_POST["content"]) ;
    $description = htmlspecialchars($_POST["description"] );

    $newTask1 = new Task();
    
    $newTask1->addTask($content,$description);
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

    <title>Insertion</title>
</head>

<body>
    <form action="" method="POST">

        <div class="form-group">
            <label for="inputContent">Content</label>
            <input type="text" name="content" class="form-control" id="inputContent" placeholder="Content" required>
        </div>

        <div class="form-group">
            <label for="inputDescription">Description</label>
            <input type="text" name="description" class="form-control" id="inputDescription" placeholder="Description" required>
        </div>

        <button type="submit" class="btn btn-primary">INSERT</button>
    </form>

</body>

</html>