<html>
    <head>
        <meta charset="UTF-8">
        <title>Portal de Notícias do Odorico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
            .sr-only 
            {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect( 0, 0, 0, 0 );
                border: 0;
            }
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
            $.getJSON( 'https://api.rss2json.com/v1/api.json?rss_url=http%3A%2F%2Fpox.globo.com%2Frss%2Fg1%2Fpolitica',
                function( data ) {
                    for ( var i = 0; i < 5; i++ )
                    {                        
                        var content = data.items[ i ].content;
                        content = content.replace( /\s*<img.*>/g, '' );
                        content = content.trim();
                        if ( i > 0 )
                        {
                            $( '#newslist' ).append( '<hr>' );
                        }
                        $( '#newslist' ).append( 
                                '<div class="w3-container">' + 
                                '<a href="' + data.items[ i ].link + '" target="_blank"><h5 class="w3-opacity"><b>' + data.items[ i ].title + '</b><span class="sr-only">Abrir em uma nova janela</span><i aria-hidden="true" class="fa fa-edit fa-external-link"></i></h5></a>' +
                                '<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>' + data.items[ i ].pubDate + '</h6>' +
                                '<p>' + content + '</p>' );
                    }
                });
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
                    <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>NOTÍCIAS</a> 
                    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE MIM</a> 
                    <a href="#deeds" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>PROJETOS_SOCIAIS</a>
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
                            <a href="#news" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw w3-margin-right"></i>NOTÍCIAS</a>
                            <a href="#about" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE MIM</a>
                            <a href="#deeds" class="w3-bar-item w3-button w3-padding"><i class="fa fa-heart fa-fw w3-margin-right"></i>PROJETOS SOCIAIS</a>
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
                <div class="w3-main" style="margin-left: 34.5%;" id="news">
                    <!-- Header -->
                    <header>
                        <a href="#"><img src="/portal/images/odorico_avatar.jpg" alt="Voltar para o topo da página" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
                        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
                        <div class="w3-container w3-margin-bottom">
                            <h1><b>Odorico Paraguaçú</b></h1>
                            <p>Bem-vindo ao meu portal de notícias</p>
                        </div>
                    </header>                    
                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-newspaper-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Notícias</h2>
                        <div id="newslist"></div>
                    </div>
                    <div class="w3-container w3-card-2 w3-white w3-margin-bottom" id="about">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Sobre Mim</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Minha História</b></h5>
                            <p>
                                Dono de uma fazenda de azeite de dendê, sou neto de Firmino Paraguaçú, e filho do coronel 
                                Eleutério Paraguaçu. Fui prefeito de Sucupira, cidade localizada na Bahia, a qual governei
                                com muita sabedoria e inteligência. Minha principal proposta do governo na cidade foi a
                                inauguração do cemitério, pois a cidade não dispunha de um.
                            </p>
                            <p>
                                Dotado de uma habilidade incrível com as palavras (fruto de meu curso na Universidade de 
                                Sourbone, França do Sul), eu cativava as massas numa época em que os comícios não tinham nem 
                                fanfarra, quanto mais bandas completas.
                            </p>
                            <p>
                                Homem de visão, fui o criador do Orçamento Político, documento que informa o que se ia fazer 
                                para o próximo ano porque não se fez o prometido no ano anterior. É um documento tão importante 
                                que existe até hoje em todos os níveis políticos do Brasil.                                
                            </p>
                            <p>
                                Sempre preocupado com o bem do povo, mandei instalar uma Bica de Água na minha cidade do coração 
                                e inaugurei-a repetidas vezes, a cada reforma que fazia, para que o povo entendesse que aqui era 
                                água. O sucesso foi tamanho que até hoje os políticos brasileiros reinauguram tudo que existe.
                            </p>
                            <p>
                                Provando ter uma mentalidade séculos à frente de todos os políticos brasileiros, criei algo 
                                absolutamente fenomenal: estando na impossibilidade de inaugurar um cemitério em Sucupira por falta 
                                de defuntos, criei a inauguração futura. Como sempre, fui copiado por todos os políticos do Brasil, 
                                que inauguram obras que ainda não estão completas, só para o povo ver que eles têm boa vontade.                                
                            </p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Sucupira</b></h5>
                            <p>
                                Sucupira (pronuncia-se Esse-u-su;ce-u-cu;p-i-pi;erre-a-rá: Sucupira!) é uma aprazível cidade baiana 
                                cercada de um lado pelo mar e do outro pelo sertão, e teve a honra de ser palco do mais 
                                brilhante e hábil político brasileiro. Seu clima ameno atrai muitos visitantes todo ano, muitos deles 
                                políticos.
                            </p>
                            <p>
                                Tem muita tradição política, não sendo à toa que ACM fez seu primeiro estágio como político, olhando 
                                a lista dos votos de cabresta dos vereadores nesta cidade.
                            </p>
                            <p>
                                Sucipira hoje vive do turismo que políticos fazem. Corre uma lenda no local que, quem depositar alguma 
                                verba no túmulo do ex-prefeito, meu pai, terá suas verbas públicas multiplicadas. É muito comum no dia 
                                17 de janeiro (17-1, também conhecido por Dia do Um-Sete-Um) filas de políticos se formarem no cemitério, 
                                todos vestidos a caráter, com cuecas grandes recheadas de dólares, prestando homenagem ao seu padrinho.                                
                            </p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Amazonas</b></h5>
                            <p>
                                Chego agora, a este bonito Estado do Amazonas, com uma bagagem política de realizações públicas
                                invejável, com desejo de fazer o bem para este estado carente de bons políticos. O eleitor poderá
                                contar com a minha vasta experiência na administração pública. Também já estou participando
                                de vários programas sociais aqui no estado voltado para pessoas com necessidades especiais. Não
                                deixe de conferir na sessão <a href="#deeds">Projetos Sociais</a>!
                            </p><br>
                        </div>
                    </div>
                    <div class="w3-container w3-card-2 w3-white" id="deeds">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projetos Sociais</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Programa Cidadania</b></h5>
                            <p>
                                Graças a Odorico Paraguaçú, o Programa Cidadania, programa que tem levado cidadania e
                                qualificação para pessoas com deficiência, tem elevado a autoestima dos usuários,
                                aproximando-os da socialização.
                            </p>
                            <p>
                                O programa atende pessoas com deficiência física, visual, auditiva e intelectual leve,
                                com idade entre 18 e 50 anos que estejam em vulnerabilidade social e aptas para ingressar
                                no mercado de trabalho.
                            </p>
                            <p>
                                Segundo Maria Oliveira, diretora do programa, Odorico foi peça chave na criação e
                                manutenção do programa, garantindo as verbas necessárias para a sua instalação.
                            </p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>AAPNE</b></h5>
                            <p>
                                A AAPNE - Associação de Apoio às Pessoas com Necessidades Especiais tem a missão de proporcionar
                                melhor qualidade de vida às pessoas com deficiências, através de orientação em busca de tratamento,
                                de prevenção, educação, reabilitação e inclusão.
                            </p>
                            <p>
                                Pelos valiosos serviços prestados à esta instituição, Odorico recebeu a 'Ordem do Mérito 
                                Legislativo', que é concedida a Chefes de Estado e de Governo, políticos, magistrados, diplomatas, 
                                professores, cientistas, escritores, desportistas e outras personalidades pelos serviços 
                                vinculados ao cumprimento do interesse público.
                            </p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Natal na AAPNE</b></h5>
                            <p>
                                <img src="/portal/images/aapne.jpg" alt="Imagem do Odorico Paraguaçú Vestido de Papai Noel" class="w3-left w3-margin-right" style="width: 200px"/>
                                <p>
                                    Apesar das dificuldades do ano de 2016, acreditar que tudo vai dar certo é a melhor solução.
                                    Partindo deste pensamento positivo Odorico Paraguaçu decidiu criar a Campanha do Papai Noel.
                                    Segundo Ana Maria, coordenadora da campanha, a associação recebeu mais de 80 cartinhas com
                                    diversos pedidos, entre eles patinete, bichos de pelúcia e, principalmente, material escolar.
                                    "Temos que realizar mais eventos desta natureza, as pessoas estão carentes de afeto e solidariedade.
                                </p>
                                <p>
                                    Odorico vestiu-se de Papai Noel, e distribuiu os presentes, abrilhantando o evento. Segundo
                                    Odorico, "É gratificante participar de ações como essas, ainda mais se tratando de pessoas
                                    com deficiência. A idéia é realizarmos outros eventos como este no final do ano de 2017."
                            <p><br>
                        </div>
                    </div>
                    <!-- fim do container da direita -->
                </div>
            </div>
        </div>
    </body>
</html>
