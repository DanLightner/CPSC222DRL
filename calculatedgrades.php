<?php
require_once('student.php');
require_once('gradecalc.php');
$students = array(
    new Student("Kevin", "Slonka", "1001", array("CPSC222" => 98, "CPSC111" => 76, "CPSC333" => 82)),
    new Student("Joe", "Schmoe", "1005", array("CPSC122" => 88, "CPSC411" => 46, "CPSC323" => 72)),
    new Student("Stewie", "Griffin", "1009", array("CPSC244" => 68, "CPSC116" => 96, "CPSC345" => 82))
);

for ($i = 0; $i < count($students); $i++) {
    $student = $students[$i];
    foreach ($student->getCourses() as $course => $grade) {
        $letterGrade = letterGrade($grade);
    }
}

?>

<html>
<head>

        <h1> Chapters 5 & 6 </h1>	
</head>
<body>
<?php foreach ($students as $student) { ?>
    <table border="5" class="student-table">
        <tr>
            <th>Name</th>
            <td><?php echo $student->getFirstName() . ' ' . $student->getLastName(); ?></td>
        </tr>
        <tr>
            <th>Student ID</th>
            <td><?php echo $student->getStudentID(); ?></td>
        </tr>
        <tr>
            <th>Grades</th>
            <td>
                <ul>
                    <?php foreach ($student->getCourses() as $course => $grade) { ?>
                        <li><?php echo $course . ' - ' . $grade . '% (' . letterGrade($grade) . ')'; ?></li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
    </table>
<?php } ?>
</body>
</html>
