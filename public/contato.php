<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('assets/partes/cabecalho.php');

    $txtname = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFormulario = '';
    if( isset($_POST['submit']) ){
        $txtname = $_POST['txtname'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if ($txtname != '' && $email != '' && $mensagem != '') {
            $mensagemEmail = 'Nome: ' . $txtname . ' - ';
            $mensagemEmail .= 'E-mail:' . $email . ' - ';
            $mensagemEmail .= 'Mensagem: ' . $mensagem;
            if (mail('contato@site.com.br', 'Mensagem de contato', $mensagemEmail)) {
                $sucessoFormulario = 'Mensagem enviada com sucesso!';
            }
            else {
                $erroFormulario = "Falha ao enviar a mensagem, tente mais tarde ou através do email matheus.sbatista@outlook.com.";
            }
        }
        else {
            $erroFormulario = "Por favor verifique o preenchimento dos campos.";
        }
    }
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem commodi similique consectetur veritatis iusto se.</p>
            <form action="contato.php" class="formulario" method="post">

                <?php if ($erroFormulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>
                <?php if ($sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoFormulario ?>
                    </div>
                <?php endif; ?>

                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="txtnome">Nome</label><br>
                    <input class="formulario__campo" type="text" name = "txtname" id="txtname">
                </div>
                <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" type="email" name="email" id="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem"></label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br>
                </div>
                <input type="submit" class="formulario__botao" value="Enviar" name="submit">
            </form>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                Ut voluptatibus accusantium perferendis quos nisi quas sapiente commodi ad voluptatem!
            </p>
        </section>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1828.7364254774607!2d-46.889707185527854!3d-23.55145515952842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf01248ff95b69%3A0x9b9fb9ee64088103!2sResidencial%20Marselha!5e0!3m2!1spt-BR!2sbr!4v1688832123105!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
<?php include('assets/partes/rodape.php') ?>