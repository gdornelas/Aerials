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
<!-- start about -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                <div class="media">
                    <div class="media-heading-wrapper">
                        <div class="media-object pull-left">
                            <a href="https://docs.google.com/spreadsheets/d/1tCq07FcVqP0-cfkAvmcFcejRjUuFxa8E0RntkX-MaLo/edit?usp=sharing"><i class="fa fa-html5"></i></a>
                        </div>
                        <h3 class="media-heading">1ª Consulta</h3>
                    </div>
                    <div class="media-body">
                        <p>Lista o Codigo e Nome de todos os aeroportos do banco em ordem alfabetica dos nomes:</p>
                        <b class="blueshsh">select Iata, Nome from Aeroporto where 1 order by Nome;</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
                <div class="media">
                    <div class="media-heading-wrapper">
                        <div class="media-object pull-left">
                            <a href="https://docs.google.com/spreadsheets/d/1zPF5eIcr1fZVGHSMaXkodHUWs-xmxjDjVnHVjkk-YiM/edit?usp=sharing"><i class="fa fa-html5"></i></a>
                        </div>
                        <h3 class="media-heading">2ª Consulta</h3>
                    </div>
                    <div class="media-body">
                        <p>Lista o Codigo e Nome das Companhias que realizaram Voos com mais
                            de 5 horas de duração:</p>
                        <b class="blueshsh">select C.Codigo, C.Nome from Companhia as C join Voo V on C.Codigo = V
                            .CompanhiaAerea where V.TempoVoo > 300;</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                <div class="media">
                    <div class="media-heading-wrapper">
                        <div class="media-object pull-left">
                            <a href="https://docs.google.com/spreadsheets/d/18e8LN938SlPOQHwdGmxj0d9Li0OqSXVe6ofmcHeCgNs/edit?usp=sharing"><i class="fa fa-html5"></i></a>
                        </div>
                        <h3 class="media-heading">3ª Consulta</h3>
                    </div>
                    <div class="media-body">
                        <p>Lista o Iata e Nome dos aeroportos nos quais houve viagens de partida
                            de avioes que foram fabricados antes de 2004:</p>
                        <b class="blueshsh">select Ae.Iata, Ae.Nome from Aeroporto as Ae join Aviao as Av join Voo as V
                            on Ae.Iata = V.AeroportoOrigem and Av.NumeroDeCauda = V.
                            NumeroAviao where Av.AnoFabricacao < 2004;</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- start about -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                <div class="media">
                    <div class="media-heading-wrapper">
                        <div class="media-object pull-left">
                            <a href="https://docs.google.com/spreadsheets/d/10DP1IEBBFqTOhSXGZS5ZMkwkAFosdbCdJ8aHn14RJ4E/edit?usp=sharing"><i class="fa fa-html5"></i></a>
                        </div>
                        <h3 class="media-heading">4ª Consulta</h3>
                    </div>
                    <div class="media-body">
                        <p>Lista a maior distancia que um Voo fez, alem do número do Voo, para
                            cada mes de 2007:</p>
                        <b class="blueshsh">select max(V.Distancia), V.NumeroVoo from Voo as V where year(V.
                            HorarioPartida) = 2007 group by month(HorarioPartida);</b>
                    </div>
                </div>
                <!-- start stuff -->
                <section id="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                                <canvas id="myChart"></canvas>
                                <script>
                                    var myChart = document.getElementById('myChart').getContext('2d');

                                    var chart1 = new Chart(myChart, {
                                        type: 'pie',
                                        data: {
                                            labels:["1", "1", "3", "2", "4", "1", "1", "1", "10", "3", "1", "6"],
                                            datasets:[{
                                                data:[
                                                    2762,
                                                    2611,
                                                    4502,
                                                    2704,
                                                    3972,
                                                    2704,
                                                    4243,
                                                    4243,
                                                    4502,
                                                    4213,
                                                    2704,
                                                    3784
                                                ],
                                                backgroundColor:[
                                                    '#28a7e9',
                                                    '#ffffff',
                                                    '#28a7e9',
                                                    '#ffffff',
                                                    '#28a7e9',
                                                    '#ffffff',
                                                    '#28a7e9',
                                                    '#ffffff',
                                                    '#28a7e9',
                                                    '#ffffff',
                                                    '#28a7e9',
                                                    '#ffffff',
                                                ],
                                                borderColor: '#000000'
                                            }]
                                        },
                                        options:{
                                            legend:{
                                                display: false
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end stuff -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
                <div class="media">
                    <div class="media-heading-wrapper">
                        <div class="media-object pull-left">
                            <a href="https://docs.google.com/spreadsheets/d/1EwNhhBBzKa_Mt3U4tsQSaX9vELLBhf7huFhjRQPp_tk/edit?usp=sharing"><i class="fa fa-html5"></i></a>
                        </div>
                        <h3 class="media-heading">5ª Consulta</h3>
                    </div>
                    <div class="media-body">
                        <p>Lista, para cada cidade registrada, o tempo total dos voos que a tiveram
                            como ponto de destino em 2008:</p>
                        <b class="blueshsh">select A.Cidade, sum(V.TempoVoo) from Aeroporto as A join Voo as V on A.
                            Iata = V.AeroporoDestino where year(V.HorarioPartida) = 2008 group
                            by A.cidade;</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                <div class="media">
                    <div class="media-heading-wrapper">
                        <div class="media-object pull-left">
                            <a href="https://docs.google.com/spreadsheets/d/1u0e0kHbSs1GhC0AphezsN5CVla9-oEdU62e6JhX1u2I/edit?usp=sharing"><i class="fa fa-html5"></i></a>
                        </div>
                        <h3 class="media-heading">6ª Consulta</h3>
                    </div>
                    <div class="media-body">
                        <p>Lista o Nome das companhias que fizeram mais de 100 voos em 2007:</p>
                        <b class="blueshsh">select C.Nome from Companhia as C join Voo as V on C.Codigo = V.
                            CompanhiaAerea where year(V.HorarioPartida) = 2007 group by C.
                            Codigo having count(∗) > 100;</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

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
                        type: 'pie',
                        data: {
                            labels:["1", "1", "3", "2", "4", "1", "1", "1", "10", "3", "1", "6"],
                            datasets:[{
                                data:[
                                    2762,
                                    2611,
                                    4502,
                                    2704,
                                    3972,
                                    2704,
                                    4243,
                                    4243,
                                    4502,
                                    4213,
                                    2704,
                                    3784
                                ],
                                backgroundColor:[
                                    '#28a7e9',
                                    '#ffffff',
                                    '#28a7e9',
                                    '#ffffff',
                                    '#28a7e9',
                                    '#ffffff',
                                    '#28a7e9',
                                    '#ffffff',
                                    '#28a7e9',
                                    '#ffffff',
                                    '#28a7e9',
                                    '#ffffff',
                                ],
                                borderColor: '#000000'
                            }]
                        },
                        options:{
                            legend:{
                                display: false
                            }
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