<?php
include(dirname(__FILE__) . '/app/models/task.php');

$newtask2 = new Task();
$listTasks = $newtask2->getTask();

//echo "<pre>".print_r($listTasks,true)."</pre>" ;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read-Data</title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
</head>

<body>


    <h1> Table Of Data  </h1>
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>Content</th>
            <th>Description</th>
        </tr>
        <?php foreach ($listTasks as $value) { ?>
            <tr>
                <td><?php echo $value["id"]; ?></td>
                <td><?php echo $value["content"]; ?></td>
                <td><?php echo $value["description"]; ?></td>
            </tr>
        <?php  };  ?>
    </table>  

</body>

</html>
