<?php

class Student
{
    public string $name;
    public float $grade;
    public int $group;

    public function __construct(string $name,float $grade, int $group)
        {
            $this ->name = $name;
            $this ->grade = $grade;
            $this ->group = $group;
        }
    
    public function changeGroup($changeGroup){
    $this->group = $changeGroup;
    return $this->group;
    }
    public function getInfo() {
        return $this->group;
    }
}

/* class StudentGroup
{
    public array $students;

    public function __construct(array $students)
        {
            $this->students = $students;
        }

    public function getGroupInfo()
    {
        foreach ($this->students as $student){
            echo "{$student->name} achieved a grade of {$student->grade}";
        }
    }
}

$group1 = new StudentGroup ([$student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10]);
$group1 = new StudentGroup ([$student11, $student12, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10]); */