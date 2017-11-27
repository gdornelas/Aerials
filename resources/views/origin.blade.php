<html>
<head>
    <meta charset="utf-8">
    <title>Aerials: Origem</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../public/css/animate.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../public/css/templatemo-style.css">
    <script src="../public/js/jquery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.singlePageNav.min.js"></script>
    <script src="../public/js/typed.js"></script>
    <script src="../public/js/wow.min.js"></script>
    <script src="../public/js/custom.js"></script>
</head>
<body id="top">

<!-- start preloader -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- end preloader -->

<!-- start header -->
<header>
</header>
<!-- end header -->

<!-- start navigation -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="{{ url('home') }}" class="navbar-brand">Aerials</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('home') }}">INÍCIO</a></li>
                <li><a href="{{ url('origin') }}">SOBRE</a></li>
                <li><a href="{{ url('analitics') }}">ANÁLISES</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->
<!-- start service -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">O PROJETO <span>AERIALS</span></h2>
            </div>
            <div class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                <p>Aerials utiliza uma base de dados utilizada é aberta, que é oferecida pelo Departamento de Transportes
                    dos Estados Unidos através do RITA, a biblioteca nacional de transportes.

                    Os dados de vôos, assim como os aviões, aeroportos, com exceção dos dados de passageiros, foram
                    todos obtidos do conjunto de dados presente no site
                    do departamento. Os passageiros foram gerados a partir de um script, para atender as necessidades de buscas.
                </p>
                <p>
                    A base em questão apresenta dados que vão desde
                    o ano de 1987 até 2008. Isso representa um volume de dados com mais de 10 milhões de
                    registros.
                    No momento, a plataforma utiliza apenas uma parcela dos vôos
                    dos anos de 2007 e 2008. Ao todo,
                    estamos trabalhando com cerca de 15000 registros de vôos, efetuados por mais de 4000
                    aeronaves, entre mais de 3000 aeroportos do território americano.
                </p>
                <p>Para ter acessos direto aos dados pelo site do Dpartamento de Transportes americano, <a href="http://stat-computing.org/dataexpo/2009/the-data.html">clique neste link</a>.</p>
            </div>
        </div>
    </div>
</section>
<!-- end service -->
<!-- start service -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">O BANCO <span>AERIALS</span></h2>
            </div>
            <div class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                <p>A modelagem foi organizada de maneira a atender os requisitos do trabalho, assim
                    como fornecer uma base que possibilitasse consultas úteis, com facilidade. O conjunto
                    de dados de voos apresentava, originalmente, muito mais dados do que os que optamos
                    por utilizar na modelagem, já que não havia necessidade dos mesmos, e estes fariam o
                    tamanho do banco crescer consideravelmente. A modelagem, no formato de diagrama
                    ER, apresenta-se abaixo:
                </p>
                <br>
                <img src="Images/aeroporto.png" class="img-responsive wow bounceIn" alt="team img 1">
            </div>
        </div>
    </div>
</section>
<!-- end service -->
<!-- start copyright -->
<footer id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                    Copyright &copy; 2017 Aerials by Amazing Analytics</p>
            </div>
        </div>
    </div>
</footer>
<!-- end copyright -->
</body>
</html>