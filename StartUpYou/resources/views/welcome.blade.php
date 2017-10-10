<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ window.scrollTo(0,1); } </script>

        <title>Start Up You</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
        <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}" media="screen" />

        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.fancybox-1.2.1.js') }}"></script>

        <script>
        $(function() {
            var pull        = $('#pull');
                menu        = $('nav ul');
                menuHeight  = menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ url('/login') }}">Inicio de sesión</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif
        </div>




        <div class="header_bg" id="home"><!-- start header -->
<div class="container">
    <div class="row header text-center specials">
        <!-- <div class="h_logo">
            <p style="color: white;">Ayudando a emprender</p>
        </div> -->
        <nav class="top-nav">
            <ul class="top-nav nav_list">
                <li><a href="sesion.html">Regístrate o inicia sesión</a></li>
                <li class="page-scroll"><a href="index.html">Proyectos</a></li>
                <li class="logo page-scroll"><a title="hexa" href="index.html">Ayudando a emprender</a></li>
               <!--  <li class="page-scroll"><a href="blog.html">blog</a></li>
                <li class="page-scroll"><a href="#contact">get in touch</a></li> -->
            </ul>
            <a href="#" id="pull"><p class="encabezado">Ayudando a emprender</p><img src="images/nav-icon.png" title="menu" /></a>
        </nav>
        <!-- <div class="clearfix"></div> -->
    </div>
</div>
</div>
<div class="container"><!-- start main -->
    <div class="main row">
        <h2 class="style">Proyectos</h2>
         <div class="grids_of_4 row">
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic1.jpg"><img src="images/pic1.jpg" alt="" class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">Lorem Ipsum is simply</a></h3>
                     <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                     <h4><a href="blog.html">Conocer más</a> </h4>
                     <div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar"
       aria-valuenow="40" aria-valuemin="0" aria-valuemax="50"
       style="width: 70%">
    <span class="sr-only">40% completado (éxito)</span>
  </div>
</div>
                </div>
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic2.jpg"><img src="images/pic2.jpg" alt=""class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">long established fact</a></h3>
                     <p class="para">Our website design and development provides quality web solutions,</p>
                     <h4><a href="blog.html">Conocer más</a></h4>
                </div>
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic3.jpg"><img src="images/pic3.jpg" alt=""class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">Contrary to popular</a></h3>
                     <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do EIUSMOD tempor,</p>
                     <h4><a href="blog.html">Conocer más</a></h4>
                </div>
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic4.jpg"><img src="images/pic4.jpg" alt=""class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">Lorem Ipsum available</a></h3>
                     <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                     <h4><a href="blog.html">Conocer más</a></h4>
                </div>
                <div class="clear"></div>
            </div>
         <div class="grids_of_4 row">
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic5.jpg"><img src="images/pic5.jpg" alt=""class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">long established fact</a></h3>
                     <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                     <h4><a href="blog.html">Conocer más</a> </h4>
                </div>
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic6.jpg"><img src="images/pic6.jpg" alt=""class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">Lorem Ipsum is simply</a></h3>
                     <p class="para">Our website design and development provides quality web solutions,</p>
                     <h4><a href="blog.html">Conocer más</a></h4>
                </div>
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic7.jpg"><img src="images/pic7.jpg" alt=""class="img-responsive"/></a>
                    </div>
                     <h3><a href="blog.html">Lorem Ipsum available</a></h3>
                     <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do EIUSMOD tempor,</p>
                     <h4><a href="blog.html">Conocer más</a></h4>
                </div>
                <div class="col-md-3 images_1_of_4">
                    <div class="fancyDemo">
                        <a rel="group" title="" href="images/pic8.jpg"><img src="images/pic8.jpg" alt=""class="img-responsive"/></a>
                    </div>
                      <h3><a href="blog.html">Contrary to popular</a></h3>
                     <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
                     <h4><a href="blog.html">Conocer más</a></h4>
                </div>
                <div class="clear"></div>
            </div>
    </div>
</div><!-- end main -->




    </body>
</html>
