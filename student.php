<?php

class Student {
    private $firstName;
    private $lastName;
    private $studentID;
    private $courses;

    function __construct($firstName, $lastName, $studentID, $courses) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setStudentID($studentID);
        $this->setCourses($courses);
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    function setCourses($courses) {
        $this->courses = $courses;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getStudentID() {
        return $this->studentID;
    }

    function getCourses() {
        return $this->courses;
    }
}

?>
