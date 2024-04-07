<?php

class Student {
    private $firstName;
    private $lastName;
    private $studentID;
    private $courses;

    public function __construct($firstName, $lastName, $studentID, $courses) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setStudentID($studentID);
        $this->setCourses($courses);
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function setCourses($courses) {
        $this->courses = $courses;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function getCourses() {
        return $this->courses;
    }
}

?>
