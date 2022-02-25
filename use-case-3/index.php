<?php
require "./Student.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$student1 = new Student ("Magali", 18, 1);
$student2 = new Student ("Andrew", 9, 1);
$student3 = new Student ("Barry", 9, 1);
$student4 = new Student ("Jane", 12, 1);
$student5 = new Student ("Matthew", 8, 1);
$student6 = new Student ("Jaboodi", 11, 1);
$student7 = new Student ("Cheesey", 7, 1);
$student8 = new Student ("Harry", 14, 1);
$student9 = new Student ("Sarah", 15, 1);
$student10 = new Student ("Tine", 6, 1);

$student11 = new Student ("Hanne", 19, 2);
$student12 = new Student ("Tom", 12, 2);
$student13 = new Student ("Steve", 11, 2);
$student14 = new Student ("Basile", 13, 2);
$student15 = new Student ("Kamiel", 14, 2);
$student16 = new Student ("Camille", 18, 2);
$student17 = new Student ("Snarly", 5, 2);
$student18 = new Student ("Nurdle", 4, 2);
$student19 = new Student ("Wahid", 20, 2);
$student20 = new Student ("Mahmoud", 10, 2);


$students = array ($student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10,
$student11, $student12, $student13, $student14, $student15, $student16, $student17, $student18, $student19, $student20);

function getTotalScore($students){
$totalScore = 0;

foreach ($students as $student) {
    $totalScore += $student->grade;
}

return $totalScore;
}

echo getTotalScore($students)/count($students);

echo $student8->changeGroup(2);
echo $student8->getInfo();

function getGroupMean ($students){
$meanGroup1 = 0;
$meanGroup2 = 0;
    foreach ($students as $student){
    if ($student->group == 1) {
        $meanGroup1 += $student->grade;
    }
    else if ($student->group == 2) {
        $meanGroup2 += $student->grade;
    }
}
    return [$meanGroup1, $meanGroup2];
}
print_r(getGroupMean($students));







// this function won't work because the foreach loop unpacks the array
// but then on the line with the max function it expects an array again.
// we could loop through the array, find who's part of what group
// then push them into another array and then fnd the best and worst performing students
function makeGroups ($students){
$group1 = [];
$group2 = [];

    foreach ($students as $student){
        if ($student->group == 1) {
            $group1[] = $student->grade;
        }
        else if ($student->group == 2){
            $group2[] = $student->grade;
        }
    }    
    $dividedGroups = [$group1, $group2];
    return $dividedGroups;   
}

echo '<pre>';
print_r(makeGroups($students));
echo '</pre>';

function balanceGroupLevel ($dividedGroups) {
$bestStudent1 = "";    
$bestStudent2 = "";    
$worstStudent1 = "";    
$worstStudent2 = "";
foreach ($dividedGroups as $array) {  
$bestStudent1 = max($array->grade);
$bestStudent2 = max($array->grade);
$worstStudent1 = min($array->grade);
$worstStudent2 = min($array->grade);
    }

return [$bestStudent1, $bestStudent2, $worstStudent1, $worstStudent2];
}


echo '<pre>';
print_r(balanceGroupLevel($students));
echo '</pre>';

// je kan twee waardes returnen uit een functie met een array
// return [value1, value2]









