<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SGC - Sistema para Gestão dos Clientes</title>
    {{ Html::style('css/bootstrap.min.css')}}
    {{ Html::style('css/animate.min.css')}}
    {{ Html::style('css/font-awesome.min.css')}}
    {{ Html::style('css/lightbox.css')}}
    {{ Html::style('css/main.css')}}
    <link id="css-preset" href="{{asset('css/presets/preset1.css')}}" rel="stylesheet">
    {{ Html::style('css/responsive.css')}}

    {{--
      <script src="{{ URL::Html::style('js/html5shiv.js')}}" type="text/javascript"></script>
      <script src="{{ URL::Html::style('js/respond.min.js')}}" type="text/javascript"></script>
  --}}

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
</head><!--/head-->

<body>
@yield('content')
<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
            <div class="footer-logo">
                <a href=""><img class="img-responsive" src="{{asset('images/logo.png')}}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2018 Pedro Peter.</p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right">Criado por <a href="http://designscrazed.org/">Pedro Peter</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
{{ Html::script('js/jquery.js')}}

{{ Html::script('js/bootstrap.min.js')}}
{{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>--}}
{{ Html::script('js/jquery.inview.min.js')}}
{{ Html::script('js/wow.min.js')}}
{{ Html::script('js/mousescroll.js')}}
{{ Html::script('js/smoothscroll.js')}}
{{ Html::script('js/jquery.countTo.js')}}
{{ Html::script('js/lightbox.min.js')}}
{{ Html::script('js/main.js')}}

@yield('scripts')

</body>
</html>