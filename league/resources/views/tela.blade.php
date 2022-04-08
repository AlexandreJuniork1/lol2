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
    <div class="corpo-inteiro">
        <div class=corpo-cima>
            <div class="corpo-cima-cima">
                <img id="borrado-cima" src="{{asset('/assets/imgs/fundo_de_cima.jpg')}}" alt="homepage">
                <img id="borrado-fundo" src="{{asset('/assets/imgs/borrado-fundo.jpg')}}" alt="borrado">
                <img id="logo-league"src="{{asset('/assets/imgs/Logo_league_of_legends.png')}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>