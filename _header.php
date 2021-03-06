<?php

// Processa título da página
if ($pageTitle == '') {
    $_TITLE = "{$siteName}";
} else {
    $_TITLE = "{$pageTitle} - {$siteName}";
}

// Processa CSS desta página
if($pageCSS == '') {
    $_CSS = '';
} else {
    $_CSS = '<link rel="stylesheet" href="css/' . $pageCSS . '">' . "\n";
}

// Processa JavaScript desta página
if($pageJS == '') {
    $_JS = '';
} else {
    $_JS = '<script src="js/' . $pageJS . '"></script>' . "\n";
}

?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php echo $_CSS ?>
    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title><?php echo $_TITLE ?></title>
</head>

<body>

    <!-- Âncora para início da página -->
    <a id="top" name="top"></a>

    <!-- Enquadramento da página -->
    <div class="wrap">

        <header>
            <a href="index.php" title="Catodo Comum - Página inicial"><img src="<?php echo $siteLogo ?>"
                    alt="Aero - Intranet"></a>
            <h1><?php echo $siteName ?><small><?php echo $siteSlogan ?></small></h1>
        </header>

        <nav>
            <a href="index.php" title="Página inicial"><span>Início</span></a>
            <a href="noticias.php" title="Notícias atualizadas"><span>Notícias</span></a>
            <a href="contatos.php" title="Faça contato conosco"><span>Contatos</span></a>
            <a href="sobre.php" title="Sobre o Catodo Comum"><span>Sobre</span></a>
        </nav>

        <main>