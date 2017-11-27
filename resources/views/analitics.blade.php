<html>
<head>
    <meta charset="utf-8">
    <title>Aerials: Análise</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../public/css/animate.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../public/css/templatemo-style.css">
    <script src="../public/js/jquery-3.2.1.js"></script>
    <script src="../public/js/jquery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.singlePageNav.min.js"></script>
    <script src="../public/js/typed.js"></script>
    <script src="../public/js/wow.min.js"></script>
    <script src="../public/js/custom.js"></script>
    <script src="../public/js/Chart.min.js"></script>
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
                <li><a href="{{ url('understanding') }}">O BANCO</a></li>
                <li><a href="{{ url('analitics') }}">ANÁLISES</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<!-- end navigation -->
<!-- start service -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">AS ANÁLISES <span>AERIALS</span></h2>
            </div>
            <div class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                <p>
                    Abaixo, temos alguns exemplos de consultas utilizando a plataforma Aerials, mostrando o seus resultados
                    e suas possíveis interpretações, permitindo a obtenção de informações importantes a serem analisadas sobre a situação de vôo:
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end service -->
<!-- start stuff -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                <canvas id="myChart"></canvas>
                <script>
                    var myChart = document.getElementById('myChart').getContext('2d');

                    var chart1 = new Chart(myChart, {
                        type: 'bar',
                        data: {
                            labels:['Bahia', 'Jaime', 'Poderosa'],
                            datasets:[{
                                label:'Coisas',
                                data:[
                                    100,
                                    50,
                                    75
                                ],
                                backgroundColor:'green'
                            }]
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</section>
<!-- end stuff -->
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