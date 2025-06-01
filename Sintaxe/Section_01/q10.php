<?php $Titulo = "Section 1 - Character Count (IFCE Summary)"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $summary = "The Federal Institute of Education, Science and Technology of Ceará (IFCE) is a federal public educational institution that aims to promote professional and technological education in the state of Ceará. Created in 2008, from the transformation of the Federal Agrotechnical Schools and other educational units, IFCE is linked to the Ministry of Education (MEC) and is part of the Federal Network of Professional, Scientific and Technological Education.

With several campuses spread across the state, IFCE offers a wide range of basic, technical, undergraduate, postgraduate, and extension courses. Its technical-level courses cover areas such as computer science, mechanics, electronics, agriculture, logistics, among others, always focusing on training qualified professionals for the job market. Furthermore, the institution offers higher education courses in various areas, such as engineering, licentiates, and technological courses.

IFCE has stood out for the quality of its courses, with modern infrastructure and well-equipped laboratories, providing students with excellent training. The institution also invests in research and innovation, seeking technological and scientific solutions that contribute to regional and national development. It has partnerships with several companies and other educational institutions, promoting exchanges and internship programs for its students.

In addition to teaching and research, IFCE also carries out extension projects aimed at the community, offering courses, lectures, and free services to the population. The institution is a center for developing competencies and potential, being an important vector for social inclusion and training for the job market.

Through its commitment to quality public education, IFCE has played a fundamental role in forming critical citizens, prepared for the challenges of the contemporary world and to actively contribute to the process of transforming society.
";
            $totalCharacters = strlen($summary);
            echo "<p>" . $summary . "</p>"; 
            echo "<p>The total number of characters is: <strong>" . $totalCharacters . "</strong></p>"; // Exibindo a contagem
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>