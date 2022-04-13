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
    </div>
</body>
</html>