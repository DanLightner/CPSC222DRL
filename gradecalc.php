<?php
function letterGrade($grade) {
    if ($grade >= 90) {
        return 'A';
    } elseif ($grade >= 80) {
        return 'B';
    } elseif ($grade >= 70) {
        return 'C';
    } elseif ($grade >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}
?>
