<?php $Titulo= "Section 3 - Question 25"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
$students = [
    ["enrollment" => "20231001", "name" => "Ana Silva", "grade" => 8.5],
    ["enrollment" => "20231002", "name" => "Bruno Costa", "grade" => 7.2],
    ["enrollment" => "20231003", "name" => "Carlos Souza", "grade" => 9.1],
    ["enrollment" => "20231004", "name" => "Daniela Rocha", "grade" => 6.8],
    ["enrollment" => "20231005", "name" => "Eduardo Melo", "grade" => 8.0],
    ["enrollment" => "20231006", "name" => "Fernanda Lima", "grade" => 7.9],
    ["enrollment" => "20231007", "name" => "Gabriel Torres", "grade" => 9.3],
    ["enrollment" => "20231008", "name" => "Helena Almeida", "grade" => 6.5],
    ["enrollment" => "20231009", "name" => "Igor Fernandes", "grade" => 8.7],
    ["enrollment" => "20231010", "name" => "Juliana Martins", "grade" => 7.4]
];

echo "<table border='1'>";
echo "<tr><th>Enrollment</th><th>Full Name</th><th>PWEB1 Grade</th></tr>";

for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    echo "<td>" . $students[$i]["enrollment"] . "</td>";
    echo "<td>" . $students[$i]["name"] . "</td>";
    echo "<td>" . $students[$i]["grade"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>