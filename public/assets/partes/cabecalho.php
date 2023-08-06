<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titulo = "Design Responsivo";
        global $tituloPagina;
        if ($tituloPagina != '') {
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="../src/assets/css/antigo/_jquery.fancybox.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../src/assets/img/favicon.ico">
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <?php if($tituloPagina == ''): ?>
                <h1 class="logo">Logo</h1>
            <?php else: ?>
                <a href="index.php" class="logo">Logo</a>
            <?php endif; ?>
            <nav class="menu-principal  menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/fechar menu</button>
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $tituloPagina == '' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a> </li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre nós' ? 'menu-principal__item--atual' : '' ?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Portfolio' ? 'menu-principal__item--atual' : '' ?>" href="portfolio.php">Portfolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div><!--Fim do container-->
    </header>
    <main>