<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Portal de Notícias do Odorico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/portal/scripts/jquery.maskedinput.min.js"></script>
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        </style>
        <script type="text/javascript">
            $( function() {
                $( '#cpf' ).mask( '999.999.999-99', {autoclear: false} );
            });
            $( 'document' ).ready( function() {
                $( '#name' ).focus();
            });
            // Script para abrir e fechar o menu lateral
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>
    </head>
    <body class="w3-light-grey">
        <!-- Menu deslisante (somente em telas menores) -->
        <div class="w3-hide-large">
            <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
                <div class="w3-container">
                    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                        <i class="fa fa-remove"></i>
                    </a>
                    <img src="/portal/images/odorico.jpg" alt="Imagem do Odorico Paraguaçú" style="width:45%;" class="w3-round"><br><br>
                    <h4><b>Odorico Paraguaçú</b></h4>
                </div>
                <div class="w3-bar-block">
                    <a href="/portal/#news" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>NOTÍCIAS</a> 
                    <a href="/portal/#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE MIM</a> 
                    <a href="/portal/#deeds" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>PROJETOS_SOCIAIS</a>
                    <a href="/portal/inelegibilidade/consulta" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONSULTA DE INELEGIBILIDADE</a>
                </div>
                <div class="w3-panel w3-large">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                </div>
                <div class="w3-panel">
                    <p class="w3-text-grey">Powered by W3.CSS</p>
                </div>
            </nav>
            <!-- Efeito "Overlay" ao abrir o menu em telas menores -->
            <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
        </div>
        <!-- Conteúdo da página -->
        <div class="w3-content w3-margin-top" style="max-width:1400px;">
            <div class="w3-row-padding">
                <!-- Container lateral, que será mostrado somente em telas maiores -->
                <div class="w3-third w3-hide-medium w3-hide-small w3-sidebar w3-light-grey">
                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="/portal/images/odorico.jpg" alt="Imagem do Odorico Paraguaçú" style="width:100%" alt="Avatar">
                        </div>
                        <div class="w3-container">
                            <h4><b>Odorico Paraguaçú</b></h4>
                        </div>
                        <div class="w3-bar-block">
                            <a href="/portal/#news" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw w3-margin-right"></i>NOTÍCIAS</a>
                            <a href="/portal/#about" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE MIM</a>
                            <a href="/portal/#deeds" class="w3-bar-item w3-button w3-padding"><i class="fa fa-heart fa-fw w3-margin-right"></i>PROJETOS SOCIAIS</a>
                            <a href="/portal/inelegibilidade/consulta" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search fa-fw w3-margin-right"></i>CONSULTA DE INELEGIBILIDADE</a>
                        </div>
                        <div class="w3-panel w3-large">
                            <i class="fa fa-facebook-official w3-hover-opacity"></i>
                            <i class="fa fa-instagram w3-hover-opacity"></i>
                            <i class="fa fa-snapchat w3-hover-opacity"></i>
                            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                            <i class="fa fa-twitter w3-hover-opacity"></i>
                            <i class="fa fa-linkedin w3-hover-opacity"></i>
                        </div>                        
                        <div class="w3-panel">
                            <p class="w3-text-grey">Powered by W3.CSS</p>
                        </div>
                    </div><br>
                <!-- Fim do container lateral -->
                </div>                
                <!-- Container da direita -->
                <div class="w3-main" style="margin-left: 34.5%;">
                    <header class="w3-hide-large">
                        <a href="/portal/index/#"><img src="/portal/images/odorico_avatar.jpg" alt="Voltar para a página inicial" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
                        <span class="w3-button w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
                        <div class="w3-container w3-margin-bottom"></div>
                    </header>                    
                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-search fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Consulta de Inegibilidade</h2>
                        <div class="w3-container">
                            <p>Aqui você poderá consultar a situação dos demais candidatos a governador. 
                               Informe o nome ou o CPF do candidado e clique em "PESQUISAR".</p>
                            
                            <?php echo form_open( 'inelegibilidade/consulta' ) ?>
                                <p><label for="name">Nome do candidato:</label><br>
                                    <input class="w3-input w3-padding-16" type="text" name="name" id="name" tabindex="1"/></p>
                                <p><label for="CPF">CPF do candidato:</label><br>
                                    <input class="w3-input w3-padding-16" id="cpf" type="text" name="cpf" tabindex="2"/></p>
                                <p>
                                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                                        <i class="fa fa-search"></i> PESQUISAR
                                    </button>
                                </p>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
