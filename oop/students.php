<?php

//Use your objects from above and let each one of the 5 students study for 60, 100, 40, 300, 1000 minutes, respectively. So the first student studies 60 minutes, the second studies 100 minutes, etc. After that call the showMyself methods on all 5 again and check whether their new gpa reflects how much they studied.

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
		//echo $this->gpa .'+log('. $study_time . ")=". $this->gpa .'+' . log($study_time,10).PHP_EOL;
		$this->gpa += log($study_time,10);
	}
}

function showStudents($studentList) {
	foreach($studentList as $student) {
		$student->showMyself();
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