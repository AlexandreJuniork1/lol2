<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c4b7e6276f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>League of Legends</title>
</head>
<body>
    {{--HEADER--}}
    <header>
        <div class='tudo-header'>
            {{--INCIO--}}
                <div class='inicio-header'>
                    <div class="icone-mao">
                        <img id="icon-mao"src="{{asset('/assets/imgs/icon-mao2.png')}}" alt="mao-lol">
                    </div>
                    <div class="pl-riot">
                        <h4>RIOT <br>GAMES<h4>
                    </div>
                    <div class="setinha"> 
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                {{--MEIO--}}
                <div class="meio-header">
                    <div class="icon-header">
                        <img id="icon-logo-league"src="{{asset('/assets/imgs/league-lol.png')}}" alt="league-lol">
                    </div>
                    <div class="navegacao-meio-header">
                        <div class="pl">
                            <p>O JOGO</p>
                        </div>  
                        <div class="pl">
                            <p>CAMPEÕES</p>
                        </div>  
                        <div class="pl">
                            <p>NOTÍCIAS<i id="setinha2"class="fa-solid fa-angle-down"></i></p>
                        </div>  
                        <div class="pl">
                            <p>NOTAS DAS ATUALIZAÇÕES</p>
                        </div>  
                        <div class="pl">
                            <p>COMUNIDADE <i id="setinha3" class="fa-solid fa-angle-down"></i></p>
                        </div>  
                        <div class="pl">
                            <p>MAIS<i id="setinha4" class="fa-solid fa-angle-down"></i></p>
                        </div>  
                    </div>
                </div>
                {{--FINAL--}}
                <div class="final-header">
                    <div class="icon-mundo">
                        <i id="globo" class="fa-solid fa-globe"></i>
                    </div>
                    <div class="botoes">
                        <div class="botao1">
                            <input type="submit" name="botao1" value="INICIAR SESSÃO">
                        </div>
                        <div class="botao2">
                            <input type="submit" name="botao2" value="JOGUE AGORA">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{---CORPO DO SITE--}}
        {{---CORPO CIMA--}}
        <div class="corpo-inteiro">
            <div class=corpo-cima>
                <div class="corpo-cima-cima">
                    <img id="borrado-cima" src="{{asset('/assets/imgs/fundo_de_cima.jpg')}}" alt="homepage">
                    
                    <img id="borrado-fundo" src="{{asset('/assets/imgs/borrado-fundo.jpg')}}" alt="borrado">
                    
                    <img id="logo-league"src="{{asset('/assets/imgs/Logo_league_of_legends.png')}}" alt="">

                    <input type="submit" value="JOGUE DE GRAÇA" name="jogar" id="jogar">
                </div>
            </div>
            {{---CORPO NOTICIAS--}}
            <div class="corpo-noticias">
                <div class="pl-noticias">
                    NOTÍCIAS EM DESTAQUE ---
                </div>
                <div class="imagem1-noticias">
                    <div class="imagem-NED1">
                        <img id="NED1"src="{{asset('/assets/imgs/NED_1.jpg')}}" alt="trailer">
                    </div>
                    <div class="pl-NED1">
                        <div id="pl-at1">
                            <span>Atualizações do jogo</span>
                        </div>
                        <div id="pl-trailer">
                            <span>Trailer do Evento <br> Esquadrão Anima</span>
                        </div>
                        <div id="pl-vista">
                            <span>Vista o seu traje e se jogue</span>
                        </div>
                    </div>  
                </div>      
                <div class="imagem2-noticias">
                        <div class="imagem-NED2">
                            <img id="NED2" src="{{asset('/assets/imgs/NED_2.jpg')}}" alt="torneio">
                        </div> 
                        <div class="pl-NED2">   
                            <div class="pl-comu">
                                <span>Comunidade</span>
                            </div>
                            <div class="pl-torne">
                                <span>Torneios de <br>Comunidade - League<br> of Legends - 12/04 a</span>
                            </div>
                        </div>
                </div>
                <div class="imagem3-noticias">
                        <div class="imagem-NED3">
                            <img id="NED3" src="{{asset('/assets/imgs/NED_3.jpg')}}" alt="dev">
                        </div>
                        <div class="pl-NED3">
                            <div class="pl-dev">
                                <span>DEV</span>
                            </div>
                            <div class="pl-vis">
                                <span>Visões de<br> Balanceamento 08/04: <br> os Desafios vêm por ai</span>
                            </div>
                        </div>
                </div>
                <div class="exibir">
                    <a href="">Exibir Tudo -> </a>
                </div>
            </div>
            {{---CORPO-IMAGEM-MEIO--}}
            <div class="img-meio">
                <div class="img-meio-meio">
                    <img id="img-runeterra"src="{{asset('/assets/imgs/home_page_centro.jpg')}}" alt="">
                </div>
            </div>
            {{---CAMPEOES--}}
            <div class="campeoes">
                <span id="pl-campeoes">CAMPEÕES ----</span>
            </div>
            {{---CORPO-ESCOLHA-SEU-CAMPEAO--}}
            <div class="escolha">
                <div class="pl-escolha">
                    <font face="Comic Sans"> ESCOLHA SEU</font> 
                </div>
                <div class="pl-campeao">
                    <strong>CAMPEÃO</strong>
                </div>
                <div class="pl-rift">
                    <span>Quer você goste de se jogar na batalha, ajudar seus aliados ou os dois, existe um </span>
                </div>
                <div class="pl-rift2">
                    <span>lugar para você no Rift</span>
                </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/BOTAO1----------------------------}}
                <div class="btn-1">
                    <input type="submit" name="btn1" id="btn1" value="Descubra mais Campeões">
                </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/BOTAO2----------------------------}}
                <div class="btn-2">
                    <input type="submit" name="btn2" id="btn2" value="JOGAR AGORA">
                </div>    
    {{-------------------ESCOLHA-SEU-CAMPEAO/IMAGEM-LEONA----------------------------}}            
                <div class="img-leona">
                    <img id="img-leona" src="{{asset('/assets/imgs/leona_sem_animacao.png')}}" alt="">
                    <div class="pl-leona-protetora">
                        <span id="pl-leona">Leona</span>
                        <span id="pl-protetora">A Protetora do Sol</span>
                    </div>
                </div> 
                <nav class="nav-class">
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAVEGAR----------------------------}}
                    <div class="navegar-classes">
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAV-ASSASINOS----------------------------}}
                        <div class="nav-assassinos">
                            <div>
                                <img id="img-assassinos" src="{{asset('/assets/imgs/icon-assasin-class.png')}}" alt=""> 
                            </div>
                            <div class="pl-assassinos">    
                                <span>assassinos</span>
                            </div>
                            <div id="bola1">

                            </div>
                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAV-LUTADORES----------------------------}}
                        <div class="nav-lutadores">
                            <div>
                                <img id="img-lutadores" src="{{asset('/assets/imgs/class-lutadores-icon.png')}}" alt=""> 
                            </div>
                            <div class="pl-lutadores">    
                                <span>lutadores</span>
                            </div>
                            <div id="bola2">

                            </div>
                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAV-MAGOS----------------------------}}
                        <div class="nav-magos">
                            <div>
                                <img id="img-magos" src="{{asset('/assets/imgs/class-magos-icon.png')}}" alt=""> 
                            </div>
                            <div class="pl-magos">    
                                <span>magos</span>
                            </div>
                            <div id="bola3">

                            </div>
                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAV-ATIRADORES----------------------------}}
                        <div class="nav-atiradores">
                            <div>
                                <img id="img-atiradores" src="{{asset('/assets/imgs/class-atirador-icon.png')}}" alt=""> 
                            </div>
                            <div class="pl-atiradores">    
                                <span>atiradores</span>
                            </div>
                            <div id="bola4">

                            </div>
                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAV-SUPORTES----------------------------}}
                        <div class="nav-suportes">
                            <div>
                                <img id="img-suportes" src="{{asset('/assets/imgs/class-suporte-icon.png')}}" alt=""> 
                            </div>
                            <div class="pl-suportes">    
                                <span>suportes</span>
                            </div>
                            <div id="bola5">

                            </div>
                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/NAV-TANQUES----------------------------}}
                        <div class="nav-tanques">
                            <div>
                                <img id="img-tanques" src="{{asset('/assets/imgs/class-tanque-icon.png')}}" alt=""> 
                            </div>
                            <div class="pl-tanques">    
                                <span>tanques</span>
                            </div>
                            <div id="bola6">

                            </div>
                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/LINHA----------------------------}}
                        <div id="linha">

                        </div>
    {{-------------------ESCOLHA-SEU-CAMPEAO/IMAGENS----------------------------}}
                        <div class="imgs-campeao">
                            <iframe  width="451" height="254" src="https://www.youtube.com/embed/eovBRox_8u0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </nav>
            </div>
    {{-----------------------------------------------}}
    {{-----------------------------------------------}}
    {{-----------------------------------------------}}
    {{-------------------PARTE-BAIXO-PRETO---------------------------}}
            <div class="modos">
                <div class="parte-skin">
                    <div class="pl-skin-de-campeao">
                        <span>skins de campeao ---</span>
                    </div>
                    <div class="imagens-arvores">
                        <div>
                            <img id="imagem-arvore1" src="{{asset('/assets/imgs/fundo-skin.png')}}" alt="">
                        </div>
                    </div>
                    <div class="imagens-arvores2">
                        <div>
                            <img id="imagem-arvore2" src="{{asset('/assets/imgs/fundo-skin2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="img-akali-animada">
                        <img id="imagem-akali" src="{{asset('/assets/imgs/akali_animada.png')}}" alt="">
                    </div>
                    <div class="pl-modos">
                        <div id="arrase">
                            <span>ARRASE COM</span>
                        </div>
                        <div id="estilo">
                            <span>ESTILO</span>
                        </div>
                        <div id="personalize">
                            <span>Personalize o jogo mudando o visual dos seus</span>
                        </div>
                        <div id="pl-campeoes">
                            <span>Campeões favoritos com skins.</span>
                        </div>
                    </div>
                    <div class="btn-modos">
                        <input type="submit" name="btn-modos" id="btn-modos" value="JOGAR AGORA">
                    </div>
                </div> 
                <div class="parte-modo-jogo">
                    <div class="modo-de-jogo">
                        <div class="fundos">
                            <div>
                                <img id="fundo-rift" src="{{asset('/assets/imgs/fundo-rift.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="pl-varias">
                            <div id="pl-summonner">
                                <span>SUMMONNER</span>
                            </div>
                            <div id="pl-aram">
                                <span>ARAM</span>
                            </div>
                            <div id="pl-tft">
                                <span>TFT</span>
                            </div>
                            <div id="varias">
                                <span>VÁRIAS MANEIRAS DE</span>
                            </div>
                            <div id="jogar">
                                <span>JOGAR</span>
                            </div>
                        </div>
                        <div class="btn-jogar5">
                             <input type="submit" name="btn-jogar5" value="JOGUE AGORA">
                        </div>
                        <div class="pl-modos-lado">
                            <p id="pl-modos">MODOS DE JOGO ----</p>
                        </div>
                        <div class="imgs-pequenas">
                            <img id="img-lobby" src="{{asset('/assets/imgs/fundo-rift.jpg')}}" alt="">
                            <img id="aram" src="{{asset('/assets/imgs/aram.jpg')}}" alt="">
                            <img id="tft" src="{{asset('/assets/imgs/tft.jpg')}}" alt="">
                        </div>
                        <div class="frases">
                            <span id="guerra">UMA GUERRA TODOS CONTRA TODOS EM BUSCA DA SUPREMACIA</span>
                            <span id="montar">Monte uma equipe de Campeões para batalhar em seu nome. Derrote os sete</span>
                            <span id="oponentes">oponentes e sobreviva por mais tempo.</span>
                        </div>
                    </div>
                </div>
                <div class="como-jogar">
                    <div>
                        <img id="arena" src="{{asset('/assets/imgs/arena.png')}}" alt="">
                    </div>
                    <span id="pl-como-jogar">COMO JOGAR ----</span>
                    <span id="comece">COMECE SUA</span>
                    <span id="lenda">LENDA</span>
                    <span id="acabou">Acabou de chegar ao LoL? Temos um resumo do básico do modo</span>
                    <span id="jogo-jogado">de jogo mais jogado.</span>
                    <input type="submit" id="pl-comecar" value="COMEÇAR">
                    <input type="submit" id="pl-jogar-agora" value="JOGAR AGORA">
                </div>
            </div>
            <div class="em-destaque">
                <div class="palavras-destaque">
                    <span id="pl-destaque">EM DESTAQUE ------</span>
                    <span id="pl-descubra">DESCUBRA</span>
                    <span id="pl-mais">MAIS</span>
                </div>
                <div class="imagens-destaque">
                    <img id="img-tft-camp" src="{{asset('/assets/imgs/tft-camp.jpg')}}" alt="">
                    <img id="img-renata-class" src="{{asset('/assets/imgs/renata-class.jpg')}}" alt="">
                </div>
                <div class="palavras-destaque">
                    <span id="pl-campeonato">CAMPEONATO <br> BUGIGANGAS E <br> <p id="engenhocas">ENGENHOCAS DO TFT</p></span>
                    <span id="pl-renata">RENATA GLASC NO <br> <p id="universo">UNIVERSO</p></span>
                </div>
            </div>
            <div class="fim-video">
                <video  loop autoplay muted id="video-kaisa">
                    <source src="https://assets.contentstack.io/v3/assets/blt731acb42bb3d1659/blte5d5ac96b514d502/5f495971a21dbd47faf26c0b/ss2020_kaisa_1920x1080.mp4" type="video/mp4">
                </video>
                <input type="submit" id="btn-jogar-agora3" value="JOGUE DE GRAÇA">
            </div>
            <div class="portatil">
                <div class="palavras-footer">
                    <span id="leve">LEVE O LEAGUE COM VOCÊ</span>
                    <span id="baixe">Baixe o aplicativo do League para sempre estar conectado aos seus amigos e ter acesso às partidas<br><p id="recentes">e notícias mais recentes dos Esports.</p></span>
                </div>
                <div class="imagens-icons">
                    <img id="app-store" src="{{asset('/assets/imgs/icon-app-store.svg')}}" alt="">
                    <img id="play-store" src="{{asset('/assets/imgs/icon-play-store.svg')}}" alt="">
                </div>
            </div>
            <div class="pl-finais">
                <div class="palavras-finais">
                    <span id="sobre-lg">SOBRE LEAGUE OF LEGENDS</span>
                    <span id="ajude-lg">AJUDE-NOS A MELHORAR</span>
                    <span id="status-lg">STATUS DE SERVIÇO</span>
                    <span id="suporte-lg">SUPORTE</span>
                    <span id="torneios-lg">TORNEIOS INDEPENDENTES</span>
                    <span id="baixe-lg">BAIXE O APLICATIVO DE CELULAR RIOT MOBILE</span>
                </div>
            </div>
            <div class="final-body">
                <div class="icons">
                    <i class="fa fa-youtube-play" id="icon-youtube"></i>
                    <i class="fa" id="icon-twitter">&#xf099;</i>
                    <i class="fa" id="icon-facebook">&#xf09a;</i>
                    <i class="fa" id="icon-instagram">&#xf16d;</i>
                    <i class="fa" id="icon-reddit">&#xf1a1;</i>
                </div>
                <div class="icone-mao2">
                    <img id="icon-mao2"src="{{asset('/assets/imgs/icon-mao2.png')}}" alt="mao-lol">
                    <h4>RIOT <br>GAMES<h4>
                </div>
                <div class="termos">
                    <span>™ & © 2022 Riot Games, Inc. Todos os direitos reservados. Riot games, League of Legends e PvP.net são marcas <br> <p id="registradas">registradas e marcas de serviços da Riot Games, Inc </p></span>
                </div>  
                <div class="palavras-pl">
                    <span id="eula">EULA</span>
                    <span id="aviso">AVISO DE PRIVAVIDADE</span>
                    <span id="termos">TERMOS DE USO</span>
                    <span id="preferen">PREFERÊNCIAS DE COOKIES</span>
                </div> 
                <div class="doze-anos">
                    <img id="img-doze" src="{{asset('/assets/imgs/12_idade_baixo.png')}}" alt="">
                    <span>Violência</span>
                    <span>Conteúdo Sexual</span>
                    <span>Linguagem Imprópria</span>
                    <span>Compras On-line</span>
                    <span>Interação de Usuários</span>
                </div> 
            </div>
        </div>
</body>
</html>