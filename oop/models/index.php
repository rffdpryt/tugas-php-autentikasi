<?php

include_once('models/Student.php');
include_once('models/Score.php');

// $students = Student::all();
// $scores = Score::all();

// var_dump($students);
// var_dump($scores);

$create = Student::create([
    'name' => "Ananda David"
]);

var_dump($create);

?>