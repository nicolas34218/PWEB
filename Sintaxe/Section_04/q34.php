<?php $Titulo= "Section 4 - Question 34: Grade Average"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function calculateGradeAverage($grades) {
        if (empty($grades)) {
            return 0;
        }
        $sumGrades = array_sum($grades);
        return $sumGrades / count($grades);
    }

    $student1Grades = [7.5, 8.0, 6.5, 9.0];
    $average1 = calculateGradeAverage($student1Grades);
    echo "<p>Student 1's average grade is: " . number_format($average1, 2, ',', '.') . "</p>";

    $student2Grades = [5.0, 4.0, 6.0];
    $average2 = calculateGradeAverage($student2Grades);
    echo "<p>Student 2's average grade is: " . number_format($average2, 2, ',', '.') . "</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>