@extends('users.template')
@section('content')

    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url('{{asset('/images/slider/1.jpg')}}')">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig"><span>Cadastre seus clientes e faça pesquisa de informação dos seus clientes</span>
                        </h1>

                        <p class="animated fadeInRightBig"><span>Gestão dos Clientes </span></p>
                        <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Vamos ao trabalho</a>
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
                        <li class="scroll"><a href="#contact">Cadastrar</a></li>
                        <li class="scroll"><a href="#contact1">Pesquisar</a></li>
                        <li class="scroll"><a href="#contact2">Actualizar</a></li>
                        <li class="scroll"><a href="#contact3">Remover</a></li>

                    </ul>
                </div>
            </div>
        </div><!--/#main-nav-->
    </header><!--/#home-->
    <section id="contact">
        <div id="contact-us" class="parallax">
            <div class="container">

                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp"
                         data-wow-duration="1000ms"
                         data-wow-delay="600ms">
                        <div class="col-sm-6">
                            {!! Form::open(['class'=>'contact_form','id'=>'main-contact-form', 'name'=>'contact-form','route'=>'cliente.store'])!!}
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-14">
                                    <div class="form-group">
                                        <input type="text" id="nome" name="nome" class="form-control"
                                               placeholder="Nome Completo do Cliente" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="contracto" id="contracto" class="form-control"
                                           placeholder="Número do Contracto" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="factura" id="factura" class="form-control"
                                           placeholder="Número do livro da factura" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="celular" id="celular" class="form-control"
                                           placeholder="Número de celular" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit">Cadastrar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/#services-->
    <section id="contact1">
        <div id="contact-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-16 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms"
                         data-wow-delay="600ms">
                        <div class="col-sm-14">
                            {!! Form::open(['class'=>'contact_form','id'=>'main-contact-form', 'name'=>'contact-form','route'=>'cliente.store'])!!}
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" id="pesquisa" name="pesquisa" class="form-control"
                                               placeholder="Introduza o nome do Cliente" onkeydown="down()"
                                               onkeyup="up()">
                                    </div>
                                    <div class="form-group" id="search">
                                    </div>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/#services-->
    <section id="contact2">
        <div id="contact-us" class="parallax">
            <div class="container">

                <div class="row">
                    <div class="heading text-center col-sm-16 col-sm-offset-2 wow fadeInUp"
                         data-wow-duration="1000ms"
                         data-wow-delay="600ms">
                        <div class="col-sm-14">
                            {!! Form::open(['class'=>'contact_form','id'=>'actualizar', 'name'=>'contact-form','route'=>'cliente.store'])!!}
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" id="pesquisa2" name="pesquisa" class="form-control"
                                               placeholder="Introduza o nome do Cliente" onkeydown="down()"
                                               onkeyup="up2()">
                                    </div>
                                    <div class="form-group" id="search2">

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn-submit">Actualizar</button>
                                    </div>
                                </div>

                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#services-->
    <section id="contact3">
        <div id="contact-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-16 col-sm-offset-2 wow fadeInUp"
                         data-wow-duration="1000ms"
                         data-wow-delay="600ms">
                        <div class="col-sm-14">
                            {!! Form::open(['class'=>'contact_form','id'=>'actualizar', 'name'=>'contact-form','route'=>'cliente.store'])!!}
                            <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" id="pesquisa3" name="pesquisa" class="form-control"
                                               placeholder="Introduza o nome do Cliente" onkeydown="down()"
                                               onkeyup="up3()">
                                    </div>
                                    <div class="form-group" id="search3">

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn-submit">Apagar</button>
                                    </div>
                                </div>

                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#services-->
@stop
@section('scripts')
    <script type="text/javascript">
        var form = $('#main-contact-form');
        form.submit(function (event) {
            event.preventDefault();
            var form_status = $('<div class="form_status"></div>');
            $.ajax({
                beforeSend: function () {
                    form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Cliente sendo  cadastrado...</p>').fadeIn());
                },
                type: "POST",
                url: '{{route('cliente.store')}}',
                data: {
                    nome: form.find('#nome').val(),
                    factura: form.find('#factura').val(),
                    contracto: form.find('#contracto').val(),
                    celular: form.find('#celular').val(),
                    _token: '{{Session::token()}}'
                }
            }).done(function (data) {
                form_status.html(data).delay(2000).fadeOut();
                form.find('#nome').val('');
                form.find('#factura').val('');
                form.find('#contracto').val('');
                form.find('#celular').val('');
            });
        });
        var formA = $('#actualizar');
        formA.submit(function (event) {
            event.preventDefault();
            var form_status = $('<div class="form_status"></div>');
            $.ajax({
                beforeSend: function () {
                    formA.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Dados do cliente sendo  actualizados...</p>').fadeIn());
                },
                type: "POST",
                url: '{{route('cliente.update')}}',
                data: {
                    nome: formA.find('#nome').val(),
                    factura: formA.find('#factura').val(),
                    contracto: formA.find('#contracto').val(),
                    celular: formA.find('#celular').val(),
                    id: formA.find('#hidden').val(),
                    _token: '{{Session::token()}}'
                }
            }).done(function (data) {
                form_status.html(data).delay(2000).fadeOut();
                formA.find('#nome').val('');
                formA.find('#factura').val('');
                formA.find('#contracto').val('');
                formA.find('#celular').val('');
            });
        });
        var formR = $('#remover');
        formR.submit(function (event) {
            event.preventDefault();
            var form_status = $('<div class="form_status"></div>');
            $.ajax({
                beforeSend: function () {
                    formA.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Cliente sendo  removido...</p>').fadeIn());
                },
                type: "POST",
                url: '{{route('cliente.remover')}}',
                data: {
                    id: formA.find('#hidden').val(),
                    _token: '{{Session::token()}}'
                }
            }).done(function (data) {
                form_status.html(data).delay(2000).fadeOut();
                formR.find('#nome').val('');
                formR.find('#factura').val('');
                formR.find('#contracto').val('');
                formR.find('#celular').val('');
            });
        });

        var timer;
        function up() {
            timer = setTimeout(function () {
                var keywords = $('#pesquisa').val();
                if (keywords.length > 0) {
                    $.post('{{route('search')}}', {
                        keywords: keywords,
                        _token: '{{Session::token()}}'
                    }, function (markup) {
                        $('#search').html(markup);
                    });
                }

            }, 500);
        }
        function down() {
            clearTimeout(timer);
        }
        function up2() {
            timer = setTimeout(function () {
                var keywords = $('#pesquisa2').val();
                if (keywords.length > 0) {
                    $.post('{{route('search')}}', {
                        keywords: keywords,
                        _token: '{{Session::token()}}'
                    }, function (markup) {
                        $('#search2').html(markup);
                    });
                }

            }, 500);
        }

        function up3() {
            timer = setTimeout(function () {
                var keywords = $('#pesquisa3').val();
                if (keywords.length > 0) {
                    $.post('{{route('search')}}', {
                        keywords: keywords,
                        _token: '{{Session::token()}}'
                    }, function (markup) {
                        $('#search3').html(markup);
                    });
                }

            }, 500);
        }
    </script>
@stop

