<?php

require_once(dirname(__FILE__) . '/../app/models/task.php');

$newTask = new Task();

$newTask->addTask('content 1', 'description 1');


?>