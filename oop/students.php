<?php

//Well, now use magic methods from the link http://php.net/manual/en/language.oop5.magic.php and try to refactor your code using these methods. Imagine additional cases for your code if needed.

class Student{
	private $firstname;
	private $lastname;
	private $gender;
	private $status;
	private $gpa;
	
	function __construct($firstname, $lastname, $gender, $status, $gpa) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
		$this->status = $status;
		$this->gpa = $gpa;
	}
	
	public function __toString() {
		return $this->firstname . " " . $this->lastname . ", " . $this->gender  . ", " . $this->status . ", " . $this->gpa . PHP_EOL;
	}
	
	public function studyTime($study_time) {
		$this->gpa += log($study_time,10);
		$this->gpa = round($this->gpa, 2);
	}
}

function showStudents($studentList) {
	foreach($studentList as $student) {
		echo $student;
	}
	echo PHP_EOL;
}

$students = [ 
	['Mike', 'Barnes', 'male', 'freshman', 4],
	['Jim', 'Nickerson', 'male', 'sophomore', 3],
	['Jack', 'Indabox', 'male', 'junior', 2.5],
	['Jane', 'Miller', 'female', 'senior', 3.6],
	['Mary', 'Scott', 'female', 'senior', 2.7]
];

$studentList = [];
foreach($students as $student) {
	$studentList[] = new Student($student[0], $student[1], $student[2], $student[3], $student[4]);
}

showStudents($studentList);

$newStudyTime = [60, 100, 40, 300, 1000];

for($i = 0; $i < count($studentList); $i++) {
	$studentList[$i]->studyTime($newStudyTime[$i]);
}

showStudents($studentList);