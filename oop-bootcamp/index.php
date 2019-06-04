<?php

class Task {
    public $description;
    public $assigned_to;
    public $due_date;
    public $completed = false;

    public function __construct($description, $assigned_to, $due_date)
    {
        $this->description = $description;
        $this->assigned_to = $assigned_to;
        $this->due_date = $due_date;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'Manu', '5/6/2019');
var_dump($task->description);
var_dump($task->assigned_to);
var_dump($task->completed);
$task->complete();
var_dump($task->completed);