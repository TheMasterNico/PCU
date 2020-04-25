            <nav class="navbar navbar-inverse" role="navigation" id="mainnav"> <!-- navbar-fixed-top -->
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Ocultar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="http://localhost.com/">Blod Gamer's</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li id="inicio" class="active"><a href="http://localhost.com/">Inicio</a></li>
                    <!--<li id="anuncios" ><a href="http://localhost.com/Anuncios.php">Anuncios</a></li>-->
                    <li id="foro" ><a href="http://localhost.com/foro/">Foro</a></li>
                    <p class="navbar-text navbar-right">Nuestra IP: <?php echo '<a href="samp://'.$IP.'" class="navbar-link">'.$IP.'</a></p>'; ?>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li id="about" ><a href="https://www.facebook.com/BlodGamer" target="_blank">Contacto</a></li>
                    <li id="about" ><a href="http://localhost.com/about.php">Sobre nosotros</a></li>
                    <!--<li id="faq" ><a href="http://localhost.com/faq.php">F.A.Q</a></li>-->
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <script type="text/javascript">$(document).ready(function() {var navpos = $('#mainnav').offset();/*console.log(navpos.top);*/$(window).bind('scroll', function() {if ($(window).scrollTop() > navpos.top) {$('#mainnav').addClass('navbar-fixed-top');}else {$('#mainnav').removeClass('navbar-fixed-top');}});});$(document).ready(function() {var currenturl = window.location.pathname;/*console.log(currenturl);*/if(currenturl == "/Anuncios.php"){$('#anuncios').addClass('active');$('#inicio').removeClass('active');$('#about').removeClass('active');$('#faq').removeClass('active');}else if(currenturl == "/"){$('#anuncios').removeClass('active');$('#inicio').addClass('active');$('#about').removeClass('active');$('#faq').removeClass('active');}else if(currenturl == "/about.php"){$('#anuncios').removeClass('active');$('#inicio').removeClass('active');$('#about').addClass('active');$('#faq').removeClass('active');}else if(currenturl == "/faq.php"){$('#anuncios').removeClass('active');$('#inicio').removeClass('active');$('#about').removeClass('active');$('#faq').addClass('active');}else if(currenturl == "/cuenta.php"){$('#anuncios').removeClass('active');$('#inicio').removeClass('active');$('#about').removeClass('active');$('#faq').removeClass('active');}});</script>