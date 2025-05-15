<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <tittle><h1>Meu Currículo</h1></tittle>
        <?php
        $nomeCompleto = "Nícolas Pereira Dias";
        $idade = 23;
        $fotoPerfil = "image.jpg";
        ?>
        <div class="perfil">
            <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
            <h1><?php echo $nomeCompleto; ?></h1>
            <p>Idade: <?php echo $idade; ?></p>
        </div>
    </header>
    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php
            $experiencias = [
                [
                    "empresa" => "IFCE Campus Cedro",
                    "cargo" => "Estagiario",
                    "periodo" => "Agosto 2019 - Dezembro 2019",
                    "descricao" => "Era monitor dos laboratorios junto de 3 individuos"
                ],
            ];
        ?>
        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>
        <?php
            $cursos = [
                [
                    "nome" => "Redes de Computadores",
                    "instituicao" => "Escola Estadual de Educação Profissional Francisca de Albuquerque Moura",
                    "periodo" => "2017 - 2019"
                ],

                [
                    "nome" => "Sistemas de Informação",
                    "instituicao" => "IFCE Campus Cedro",
                    "periodo" => "2023 – Cursando"
                ]

            ];
        ?>
        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="periodo"><?php echo $curso['periodo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="idiomas">
        <h2>Idiomas</h2>
        <?php
            $idiomas = [
                "Inglês" => 9,
                "Espanhol" => 5

            ];
        ?>
        <?php if (!empty($idiomas)): ?>
            <ul>
            <?php foreach ($idiomas as $idi => $interesse): ?>
                    <li>
                        <p><?php echo $idi; ?></p>
                        <div class="barra-nivel">
                            <?php for ($i = 1; $i <= $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse + 1; $i <= 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo $interesse; ?>/10</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

    <section id="habilidades">
        <h2>Habilidades e Hobbies</h2>
        <?php
            $habilidades = [
                "PHP" => 1,
                "HTML" => 7,
                "CSS" => 7,
                "Banco de Dados" => 7,
                "Python" => 8,
                "Java" => 8,
                "C" => 8

            ];

            $hobbies = [
                "Programação" => 10, 
                "Leitura" => 8,
                "Cinema" => 8,
                "Jogos" => 9
            ];
        ?>

        <h3>Habilidades</h3>
        <?php if (!empty($habilidades)): ?>
            <ul>
            <?php foreach ($habilidades as $habilidade => $interesse): ?>
                    <li>
                        <p><?php echo $habilidade; ?></p>
                        <div class="barra-nivel">
                            <?php for ($i = 1; $i <= $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse + 1; $i <= 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo $interesse; ?>/10</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <p><?php echo $hobby; ?></p>
                        <div class="barra-nivel">
                            <?php for ($i = 1; $i <= $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse + 1; $i <= 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo $interesse; ?>/10</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </section>

    

    <footer>
        <p>© <?php echo date ("Y"); ?> Nícolas Dias</p>
    </footer>
</body>
</html>