<?php
require_once('student.php');
require_once('gradecalc.php');

$students = array(
    new Student("Kevin", "Slonka", "1001", array("CPSC222" => 98, "CPSC111" => 76, "CPSC333" => 82)),
    new Student("Joe", "Schmoe", "1005", array("CPSC122" => 88, "CPSC411" => 46, "CPSC323" => 72)),
    new Student("Stewie", "Griffin", "1009", array("CPSC244" => 68, "CPSC116" => 96, "CPSC345" => 82))
);

echo '<h1>Chapter 5 and 6</h1>';
echo '<div style="margin-top: 20px;">';
for ($i = 0; $i < count($students); $i++) {
    $student = $students[$i];
	echo '<table border="1" style="margin-bottom: 20px;">';
	echo '<tr><td style="text-align: center;"><b>Name</b></td><td>' . $student->getLastName() . ', ' . $student->getFirstName() . '</td></tr>';
	echo '<tr><td style="text-align: center;"><b>Student ID</b></td><td>' . $student->getStudentID() . '</td></tr>';
	echo '<tr><td style="text-align: center;"><b>Grades</b></td><td>';
	echo '<ul>';
    foreach ($student->getCourses() as $course => $grade) {
        echo '<li>' . $course . ' - ' . $grade . ' ' . letterGrade($grade) . '</li>';
    }
    echo '</ul>';
    echo '</td></tr>';
    echo '</table>';
}
echo '</div>';
?>
