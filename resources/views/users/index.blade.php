@extends('users.template')
@section('content')


    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>


    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url('{{asset('images/slider/1.jpg')}}')">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Bem-vindo ao SGC <span>Gestão dos Clientes</span></h1>

                        <p class="animated fadeInRightBig">SGC - Sistema para Gestão dos Clientes </p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Vamos ao trabalho</a>
                    </div>
                </div>
                <div class="item" style="background-image: url('{{asset('images/slider/2.jpg')}}')">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Diga Ola ao SGC <span>SGC</span></h1>

                        <p class="animated fadeInRightBig">SGC - Sistema para Gestão dos Clientes </p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Vamos ao trabalho</a>
                    </div>
                </div>
                <div class="item" style="background-image: url('{{asset('images/slider/3.jpg')}}')">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">SGC <span>Vem solucionar seus problemas</span></h1>

                        <p class="animated fadeInRightBig">SGC - Sistema para Gestão dos Clientes</p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Vamos iniciar</a>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

            <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

        </div><!--/#home-slider-->
        <div class="main-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
                        <h1><img class="img-responsive" src="{{asset('images/logo.png')}}" alt="logo"></h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home">Pagina Inicial</a></li>
                        <li class="scroll"><a href="#services">Funcionalidades do Sistema</a></li>
                        <li class="scroll"><a href="#about-us">Sobre-nós</a></li>
                        <li class="scroll"><a href="#contact">Contacte-nos</a></li>

                    </ul>
                </div>
            </div>
        </div><!--/#main-nav-->
    </header><!--/#home-->

    <section id="services">
        <div class="container">
            <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2>O que o sistema faz</h2>

                        <p>O sistema permite que se tenha os clientes cadastrados e as facturas associadas a ele.</p>
                    </div>
                </div>
            </div>
            <div class="text-center our-services">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="service-icon">
                            <i class="fa fa-save"></i>
                        </div>
                        <div class="service-info">
                            <h3><a href="{{route('cliente.create')}}">Cadastrar Clientes</a></h3>

                            <p>Permite colocar informações do Usuário no sistema.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                        <div class="service-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="service-info">
                            <h3><a href="{{route('cliente.create')}}">Pesquisar Clientes</a></h3>

                            <p>Permite encontrar informações de um determinado usuário no sistema.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                        <div class="service-icon">
                            <i class="fa fa-remove"></i>
                        </div>
                        <div class="service-info">
                            <h3><a href="{{route('cliente.create')}}">Remover Clientes</a></h3>

                            <p>LPermite remover toda informação de um determinado usuário no sistema</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                        <div class="service-icon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="service-info">
                            <h3><a href="{{route('cliente.create')}}">Actualizar informações</a></h3>

                            <p>Permite editar informações de um determinado cliente no sistema.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                        <div class="service-icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="service-info">
                            <h3><a href="{{route('cliente.create')}}">Ver o livro da Factura do Cliente</a></h3>

                            <p>Permite saber o livro da factura do cliente.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                        <div class="service-icon">
                            <i class="fa fa-connectdevelop"></i>
                        </div>
                        <div class="service-info">
                            <h3><a href="#contact">Contactar-nos</a></h3>

                            <p>Fala sobre os desenvolvedores do sistema e seus serviços.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#services-->
    <section id="about-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>Sobre nos</h2>

                        <p>Somos profissionais da área de Informática que fazemos todo o tipo de serviços de
                            informática.</p>

                        <p>Fazemos reparação de computadores. Consultório de sistemas informáticos.</p>

                        <p>Desenvolvemos sistemas para gestão do seu negócio.</p>

                        <p>Resolvemos vários problemas ligados a área de informática.</p>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p class="lead">Experiência em trabalhar com Clientes</p>

                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     aria-valuetransitiongoal="95">95%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <p class="lead">Reparação de Computadores</p>

                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     aria-valuetransitiongoal="75">75%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <p class="lead">Desenvolver Sistemas</p>

                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     aria-valuetransitiongoal="60">90%
                                </div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <p class="lead">Experiência em resolver vários problemas </p>

                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"
                                     aria-valuetransitiongoal="85">85%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#about-us-->

    <section id="contact">
        <div id="contact-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                         data-wow-delay="300ms">
                        <h2>Contact Us</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p>Abaixo encontra-se toda informação para que possa entrar em contacto connosco.</p>
                                <ul class="address">
                                    <li><i class="fa fa-map-marker"></i> <span> Endereço:</span> Machava</li>
                                    <li><i class="fa fa-phone"></i> <span> Telefone:</span> 84 463 8520|</li>
                                    <li><i class="fa fa-envelope"></i> <span> Email:</span>pedropeterdev@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#contact-->
@stop

