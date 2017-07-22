<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Portal de Notícias do Odorico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        </style>
        <script type="text/javascript">
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
                            <img src="/portal/images/odorico.jpg" alt="Imagem do Odorico Paraguaçú" style="width:100%">
                        </div>
                        <div class="w3-container">
                            <h4><b>Odorico Paraguaçú</b></h4>
                        </div>
                        <div class="w3-bar-block">
                            <a href="/portal/#news" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw w3-margin-right"></i>NOTÍCIAS</a>
                            <a href="/portal/#about" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE MIM</a>
                            <a href="/portal/#deeds" class="w3-bar-item w3-button w3-padding"><i class="fa fa-heart fa-fw w3-margin-right"></i>OBRAS SOCIAIS</a>
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
                    <!-- Header -->
                    <header class="w3-hide-large">
                        <a href="portal/index/#"><img src="/portal/images/odorico_avatar.jpg" alt="Voltar para a página inicial" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
                        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
                        <div class="w3-container w3-margin-bottom"></div>
                    </header>                    
                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-search fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Consulta de Inelegibilidade</h2>                            
                        <a href="/portal/inelegibilidade/consulta" class="w3-button w3-light-grey w3-padding-large">
                            <i class="fa fa-search"></i> NOVA CONSULTA
                        </a>
                        
                        <div class="w3-container w3-padding-16">
                            <?php
                            $SituacaoDesc = array (
                                'Situação inválida',
                                'Cadastrado', 'Aguardando julgamento', 'Inapto', 'Cancelado',
                                'Cassado', 'Falecido', 'Indeferido', 'Pedido não reconhecido',
                                'Renúncia', 'Apto', 'Deferido', 'Deferido com recurso',
                                'Pendente de julgamento', 'Indeferido com recurso', 'Cassado com recurso' );

                            if ( empty( $Candidates ) )
                            {        
                                echo '<p>Nehum candidato encontrado</p>';
                            }
                            else
                            {
                                echo '<p>Candidatos encontrados:</p>';
                                foreach( $Candidates as $c )
                                {
                                    echo '<img src="/portal/images/' . $c[ 'Portrait' ] . '" alt=" Imagem de ' . $c[ 'NickName'] . '" class="w3-left w3-margin-right"/>';
                                    echo '<h1>' . $c[ 'NickName' ] . '</h1>';
                                    echo '<p>CPF: ' . $c[ 'CPF' ] . '</p>';
                                    echo '<p>' . $c[ 'PoliticalParty'] . '</p>';
                                    echo '<p>Número do processo: ' . $c[ 'ProcessNumber' ] . '</p>';
                                    echo '<p> Situação da candidatura: ' . $SituacaoDesc[ $c[ 'Status' ] ] . '</p>';
                                    echo '<br>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- fim do container da direita -->
                </div>
            </div>
        </div>
    </body>
</html>
