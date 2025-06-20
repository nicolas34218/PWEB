<?php
$diretorioDestino = "uploads/";
$mensagensErro = [];
$dadosUsuario = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cadastrar"])) {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha']; 

    if (empty($nome)) {
        $mensagensErro[] = "O campo 'Nome Completo' é obrigatório.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagensErro[] = "O campo 'E-mail' é obrigatório e deve ser um e-mail válido.";
    }
    if (empty($senha)) {
        $mensagensErro[] = "O campo 'Senha' é obrigatório.";
    } else {

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $dadosUsuario['senha_hash'] = $senhaHash;
    }

    $dadosUsuario['nome'] = $nome;
    $dadosUsuario['email'] = $email;

    if (isset($_FILES["perfil_imagem"]) && $_FILES["perfil_imagem"]["error"] === UPLOAD_ERR_OK) {
        $nomeArquivoOriginal = basename($_FILES["perfil_imagem"]["name"]);
        $arquivoTmpName = $_FILES["perfil_imagem"]["tmp_name"];
        $tamanhoArquivo = $_FILES["perfil_imagem"]["size"];
        $tipoArquivo = strtolower(pathinfo($nomeArquivoOriginal, PATHINFO_EXTENSION));

        $nomeArquivoUnico = uniqid() . "." . $tipoArquivo;
        $arquivoDestino   = $diretorioDestino . $nomeArquivoUnico;

        $check = getimagesize($arquivoTmpName);
        if ($check === false) {
            $mensagensErro[] = "O arquivo enviado não é uma imagem válida.";
        }

        if ($tamanhoArquivo > 500000) {
            $mensagensErro[] = "Desculpe, a imagem de perfil é muito grande. Tamanho máximo: 500 KB.";
        }

        $formatosPermitidos = ["jpg", "jpeg", "png", "gif", "tiff"];
        if (!in_array($tipoArquivo, $formatosPermitidos)) {
            $mensagensErro[] = "Desculpe, apenas arquivos JPG, JPEG, PNG, TIFF e GIF são permitidos para a imagem de perfil.";
        }

        if (file_exists($arquivoDestino)) {
            $mensagensErro[] = "Desculpe, ocorreu um problema com o nome do arquivo. Por favor, tente novamente.";
        }

        if (empty($mensagensErro)) { 
            if (move_uploaded_file($arquivoTmpName, $arquivoDestino)) {
                $dadosUsuario['caminho_imagem'] = $arquivoDestino;
            } else {
                $mensagensErro[] = "Desculpe, ocorreu um erro ao enviar a imagem de perfil. Código do erro: " . $_FILES["perfil_imagem"]["error"];
            }
        }
    } elseif (isset($_FILES["perfil_imagem"]) && $_FILES["perfil_imagem"]["error"] !== UPLOAD_ERR_NO_FILE) {
        $mensagensErro[] = "Ocorreu um erro no upload da imagem: " . $_FILES["perfil_imagem"]["error"];
    } else {
        $dadosUsuario['caminho_imagem'] = 'uploads/default_avatar.png'; 
        if (!file_exists($dadosUsuario['caminho_imagem'])) {
            $mensagensErro[] = "Nenhuma imagem de perfil foi enviada e o avatar padrão não foi encontrado.";
            $dadosUsuario['caminho_imagem'] = null; 
        }
    }

    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado do Cadastro</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php if (!empty($mensagensErro)): ?>
                <div class="message error-message">
                    <h2>Erro no Cadastro!</h2>
                    <?php foreach ($mensagensErro as $erro): ?>
                        <p><?php echo htmlspecialchars($erro); ?></p>
                    <?php endforeach; ?>
                </div>
                <a href="index.html" class="back-button">Voltar para o Cadastro</a>
            <?php else: ?>
                <div class="message success-message">
                    <h2>Usuário Cadastrado com Sucesso!</h2>
                </div>
                <?php if (isset($dadosUsuario['caminho_imagem']) && $dadosUsuario['caminho_imagem'] && file_exists($dadosUsuario['caminho_imagem'])): ?>
                    <img src="<?php echo htmlspecialchars($dadosUsuario['caminho_imagem']); ?>" alt="Imagem de Perfil" class="profile-image">
                <?php else: ?>
                    <p>Nenhuma imagem de perfil foi enviada ou o avatar padrão não pôde ser carregado.</p>
                <?php endif; ?>

                <div class="user-info">
                    <p><strong>Nome:</strong> <?php echo htmlspecialchars($dadosUsuario['nome']); ?></p>
                    <p><strong>E-mail:</strong> <?php echo htmlspecialchars($dadosUsuario['email']); ?></p>
                    <p><strong>Senha (Hash):</strong> <?php echo htmlspecialchars($dadosUsuario['senha_hash']); ?> (Nunca armazene a senha em texto puro!)</p>
                </div>
                <a href="index.html" class="back-button">Voltar para o Cadastro</a>
            <?php endif; ?>
        </div>
    </body>
    </html>
    <?php

} else {
    header("Location: index.html");
    exit();
}
?>