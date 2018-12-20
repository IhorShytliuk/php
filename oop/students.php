<?php

//Now define 5 student objects and store the objects in an array called studentList. The five students are: Mike Barnes, Jim Nickerson, Jack Indabox, Jane Miller and Mary Scott. Mike is a freshman, Jim a sophomore, Jack a junior, Jane and Mary are seniors. Their respective GPAs are: 4, 3, 2.5, 3.6 and 2.7. Make sure you assign the gender when you instantiate the objects.

//Then call the showMyself method on all of them. I suggest you use a loop for making the objects and a separate loop for showing the objects.

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
	
	public function showMyself() {
		echo $this->firstname . " " . $this->lastname . ", " . $this->gender  . ", " . $this->status . ", " . $this->gpa . PHP_EOL;
	}
	
	public function studyTime($study_time) {
		$this->gpa = $this->gpa + log($study_time);
	}
}

$studentList = [];
$students = [ 
	['Mike', 'Barnes', 'male', 'freshman', 4],
	['Jim', 'Nickerson', 'male', 'sophomore', 3],
	['Jack', 'Indabox', 'male', 'junior', 2.5],
	['Jane', 'Miller', 'female', 'senior', 3.6],
	['Mary', 'Scott', 'female', 'senior', 2.7]
];

foreach($students as $student) {
	$studentList[] = new Student($student[0], $student[1], $student[2], $student[3], $student[4]);
}

foreach($studentList as $student) {
	$student->showMyself();
}