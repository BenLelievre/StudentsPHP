<?php
$students = array(
    array(
        'id' => 1,
        'firstname' => 'John',
        'lastname' => 'Doe',
        'email' => 'john@doe.com',
    ),
    array(
        'id' => 2,
        'firstname' => 'Pierre',
        'lastname' => 'Durand',
        'email' => 'pierre@durand.com',
    ),
);
foreach ($students as $student) {
    echo '<li>' . $student['firstname'].', ' .$student['lastname']. '(' .$student['email'].')</li>';}
    
?>
