
<?php
$mostrar=false;?>
<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">
    <script type="text/javascript" src="/js/instafeed.min.js"></script>

    <title>Vou casar magra</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
    <!--[if IE 9]>
    <script src="js/PIE_IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/PIE_IE678.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src="js/jquery.countdown.min.js"></script>
    <link href="css/media.css" rel="stylesheet" type="text/css" />
    <script>
        $(function(){
            $(".digits").countdown({
                image: "img/digits.png",
                format: "dd:hh:mm:ss",
                endTime: new Date(2017, 08, 17)
            });
        });
    </script>
</head>

<body id="home">

<div id="instafeed"></div
        <!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- FullScreen -->
<div class="intro-header">
    <div class="col-xs-12 text-center abcen1">
        <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s" >
            <?php if(!$mostrar):?>
                <div class="digits" style=""></div>
            <?php endif;?>
            {{--<img src="/img/logo.png" style="width: 400px;"/>--}}
        </h1>

    </div>
    <!-- /.container -->
    <div class="col-xs-12 text-center abcen wow fadeIn">
        <div class="button_down ">
            {{--    <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>--}}
        </div>
    </div>

</div>

    <?php if($mostrar):?>
<!-- NavBar-->
<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home">Vou casar magra</a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="menuItem"><a href="#useit">Posts</a></li>
                <li class="menuItem"><a href="#whatis">Dicas e inspirações</a></li>
                <li class="menuItem"><a href="#downloadlink">Anuncie aqui</a></li>
                <li class="menuItem"><a href="#credits">O início</a></li>
                <li class="menuItem"><a href="#contact">Contato</a></li>
            </ul>
        </div>

    </div>
</nav>



<!-- Use it -->
<div id ="useit" class="content-section-a">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 pull-right wow fadeInRightBig">
                <img class="img-responsive " src="img/ipad.png" alt="">
            </div>

            <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                <h3 class="section-heading">Full Responsive</h3>
                <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                <p class="lead">
                    In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
                    Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
                    uam non erat mirum sapientiae lorem cupido
                    patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                </p>

                <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                    <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>

<div class="content-section-b">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInLeftBig">
                <div id="owl-demo-1" class="owl-carousel">
                    <a href="img/iphone.png" class="image-link">
                        <div class="item">
                            <img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
                        </div>
                    </a>
                    <a href="img/iphone.png" class="image-link">
                        <div class="item">
                            <img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
                        </div>
                    </a>
                    <a href="img/iphone.png" class="image-link">
                        <div class="item">
                            <img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">
                <h3 class="section-heading">Drag Gallery</h3>
                <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                <p class="lead">
                    In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
                    Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
                    uam non erat mirum sapientiae lorem cupido
                    patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                </p>

                <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                    <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
            </div>
        </div>
    </div>
</div>

<div class="content-section-a">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 pull-right wow fadeInRightBig">
                <img class="img-responsive " src="img/doge.png" alt="">
            </div>

            <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                <p class="lead">A special thanks to Death to the Stock Photo for
                    providing the photographs that you see in this template.
                </p>

                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
                    <li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
                    <li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- What is -->
<div id="whatis" class="content-section-b" style="border-top: 0">
    <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Dicas e inspirações</h2>
            <p class="lead" style="margin-top:0"> Esteja sempre por dentro e em forma para seu casamento.</p>

        </div>

        <div class="row">

            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="img/icon/tweet.png" alt="Generic placeholder image">
                <h3>Noivado</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>

                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/picture.png" alt="Generic placeholder image">
                <h3>Chá dos noivos</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/retina.png" alt="Generic placeholder image">
                <h3>Casamento</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row tworow">

            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate" src="img/icon/laptop.png" alt="Generic placeholder image">
                <h3>Lua de mel</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/map.png" alt="Generic placeholder image">
                <h3>DIY</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/browser.png" alt="Generic placeholder image">
                <h3>Receitas</h3>
                <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div>
</div>
<div id="downloadlink" class="banner content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center wrap_title" style="color:rgb(0,128,128);">
                <h2>Anuncie</h2>
                <p class="lead" style="margin-top:0; color:rgb(0,58,58);">Divulgue seu negócio aqui</p>
                <p><a class="btn btn-embossed btn-primary view" role="button">Conheça nossos planos</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Screenshot -->
{{--<div id="screen" class="content-section-b">
    <div class="container">
        <div class="row" >
            <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
                <h2>Screen App</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
            </div>
        </div>
        <div class="row wow bounceInUp" >
            <div id="owl-demo" class="owl-carousel">

                <a href="img/slide/1.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/2.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/3.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/1.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/2.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/3.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>--}}


<!-- Credits -->
<div id="credits" class="content-section-a">

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>O início</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
            </div>

            <div class="col-sm-6  block wow bounceIn">
                <div class="row">
                    <div class="col-md-4 box-icon rotate">
                        <i class="fa fa-desktop fa-4x "> </i>
                    </div>
                    <div class="col-md-8 box-ct">
                        <h3> Bootstrap </h3>
                        <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 block wow bounceIn">
                <div class="row">
                    <div class="col-md-4 box-icon rotate">
                        <i class="fa fa-picture-o fa-4x "> </i>
                    </div>
                    <div class="col-md-8 box-ct">
                        <h3> Owl-Carousel </h3>
                        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row tworow">
            <div class="col-sm-6  block wow bounceIn">
                <div class="row">
                    <div class="col-md-4 box-icon rotate">
                        <i class="fa fa-magic fa-4x "> </i>
                    </div>
                    <div class="col-md-8 box-ct">
                        <h3> Codrops </h3>
                        <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 block wow bounceIn">
                <div class="row">
                    <div class="col-md-4 box-icon rotate">
                        <i class="fa fa-heart fa-4x "> </i>
                    </div>
                    <div class="col-md-8 box-ct">
                        <h3> Lorem Ipsum</h3>
                        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="content-section-c ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center white">
                <h2>Newsletter</h2>
                <p class="lead" style="margin-top:0">Fique por dentro das novidades.</p>
            </div>

            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="mockup-content">
                    <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                        <button type="button "><span>Cadastre-se em nossa Newsletter</span></button>
                        <div class="morph-content">
                            <div>
                                <div class="content-style-form content-style-form-4 ">
                                    <h2 class="morph-clone">Cadastre-se em nossa Newsletter</h2>
                                    <form>
                                        <p><label>Nome</label><input type="text"/></p>
                                        <p><label>Email</label><input type="text"/></p>
                                        <p><button>Inscrever</button></p>
                                        <p><button class="btn btn-block btn-social btn-facebook" ><span class="fa fa-facebook"></span> Cadastre-se com o facebook</button></p>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>>
    </div>
</div>
<?php endif;?>
<?php if (!$mostrar):?>
<div id="sobre" class="content-section-a">
    <div class="container">

        <div class="row">

            <div class="col-sm-10 pull-right wow fadeInRightBig">
                <h3 class="section-heading">Saiba mais</h3>
                <p class="lead">A special thanks to Death to the Stock Photo for
                    providing the photographs that you see in this template.
                </p>

                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
                    <li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
                    <li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
                </ul>
            </div>

            <div class="col-sm-2 wow fadeInLeftBig"  data-animation-delay="200">
                <img class="img-responsive " src="img/espera_kids.png" alt="">
            </div>

        </div>

    </div>

</div>
<?php endif;?>
<!-- LightWidget WIDGET -->
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 pull-right wow fadeInRightBig">
                <h3 class="section-heading">Fique por dentro de nossas redes sociais</h3>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1480596578621950";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <script src="//lightwidget.com/widgets/lightwidget.js"></script>
                <iframe src="//lightwidget.com/widgets/fc6d50e7ef235194aaf1b545ae3f570e.html" id="lightwidget_fc6d50e7ef" name="lightwidget_fc6d50e7ef"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                <p class="lead">
                <li class="social">
                    <a href="https://www.facebook.com/euvoucasarmagra" target="_blank"><i class="fa fa-facebook-square fa-size"> </i></a>
                    <a href="https://www.instagram.com/euvoucasarmagra/" target="_blank"><i class="fa fa fa-instagram fa-size"> </i></a>
                </li>

                </p>
            </div>
        </div>
    </div>
</div>
<?php if($mostrar):?>


<!-- Contact -->
<div id="contact" class="content-section-a">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Contato</h2>
                <p class="lead" style="margin-top:0">Alguma duvida ou sujestão? Contate-nos.</p>
            </div>

            <form role="form" action="" method="post" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputName">Nome</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Escreva seu nome" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail">E-mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Escreva seu E-mail" required  >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputMessage">Messagem</label>
                        <div class="input-group">
                            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" value="Enviar" class="btn wow tada btn-embossed btn-primary pull-right">
                </div>
            </form>

            <hr class="featurette-divider hidden-lg">
            <div class="col-md-5 col-md-push-1 address">
                {{--<address>
                    <h3>Contatos</h3>
                    <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
                            Washington, DC 20301</a><br>
                        Phone: XXX-XXX-XXXX<br>
                        Fax: XXX-XXX-YYYY</p>
                </address>--}}


            </div>
        </div>
    </div>
</div>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h3 class="footer-title">Follow Me!</h3>
                <p>Vuoi ricevere news su altri template?<br/>
                    Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br/>
                    Go to: <a  href="http://andreagalanti.it" target="_blank">andreagalanti.it</a>
                </p>

                <!-- LICENSE -->
                <a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
                   property="dc:title">Flatfy Theme </a> by
                <a rel="dc:creator" href="http://www.andreagalanti.it"
                   property="cc:attributionName">Andrea Galanti</a>
                is licensed to the public under
                <BR>the <a rel="license"
                           href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
                    Commons Attribution 3.0 License - NOT COMMERCIAL</a>.


            </div> <!-- /col-xs-7 -->

            <div class="col-md-5">
                <div class="footer-banner">
                    <h3 class="footer-title">Flatfy Theme</h3>
                    <ul>
                        <li>12 Column Grid Bootstrap</li>
                        <li>Form Contact</li>
                        <li>Drag Gallery</li>
                        <li>Full Responsive</li>
                        <li>Lorem Ipsum</li>
                    </ul>
                    Go to: <a href="http://andreagalanti.it/flatfy" target="_blank">andreagalanti.it/flatfy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endif;?>
<!-- JavaScript -->

<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/script.js"></script>
<!-- StikyMenu -->
<script src="js/stickUp.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).ready( function() {
            $('.navbar-default').stickUp();

        });
    });

</script>
<!-- Smoothscroll -->
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/classie.js"></script>
<script src="js/uiMorphingButton_inflow.js"></script>
<!-- Magnific Popup core JS file -->
<script src="js/jquery.magnific-popup.js"></script>




{{--
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1480596578621950',
            xfbml      : true,
            version    : 'v2.8'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<div
        class="fb-like"
        data-share="true"
        data-width="450"
        data-show-faces="true">
</div>--}}
</body>

</html>
