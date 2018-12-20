<?php
//Define a student class. A student has the following attributes: `firstname`, `lastname`, `gender` which can be "male" or "female", `status` which can be equal to "freshman", "sophomore", "junior", and "senior" and "gpa".

//Then define the following methods for the student class.
//The `showMyself` method will simply print all the attribute variables when called upon the object. This method has no input arguments.
//The `studyTime` method will increment the gpa of the student according to the following formula: ` gpa = gpa + log(study_time)`. The only input argument of this method is the variable study_time. In addition make sure that the gpa variable never exceeds 4.0 even if the student studies for a very long time.

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
