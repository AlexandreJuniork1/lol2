<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c4b7e6276f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
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
                            <iframe width="451" height="254" src="https://www.youtube.com/embed/eovBRox_8u0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        
                    </div>
                </div>
                <div class="parte-como-jogar">

                </div>
            </div>
        </div>
</body>
</html>