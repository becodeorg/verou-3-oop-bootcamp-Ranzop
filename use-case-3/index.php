<?php
require "./Student.php";

$student1 = new Student ("Magali", 18, 1);

echo $student1;

echo $student1 -> getMeanGroup();