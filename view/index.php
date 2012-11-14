<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le styles -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
        /* Override some defaults */
            html, body {
                background-color: #eee;
            }
            body {
                padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
            }
            .container > footer p {
                text-align: center; /* center align it with the container */
            }
            .container {
                width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
            }
            /* The white background content wrapper */
            .container > .content {
                background-color: #fff;
                padding: 20px;
                margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
                -webkit-border-radius: 0 0 6px 6px;
                -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
            }
            /* Page header tweaks */
            .page-header {
                background-color: #f5f5f5;
                padding: 20px 20px 10px;
                margin: -20px -20px 20px;
            }
            /* Styles you shouldn't keep as they are for displaying this base example only */
            .content .span10,
            .content .span4 {
                min-height: 500px;
            }
            /* Give a quick and non-cross-browser friendly divider */
            .content .span4 {
                margin-left: 0;
                padding-left: 19px;
                border-left: 1px solid #eee;
            }
            .topbar .btn {
                border: 0;
            }
        </style>
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    </head>

    <body>
        <div class="topbar">
            <div class="fill">
                <div class="container">
                    <a class="brand" href="#">Project name</a>
                    <ul class="nav">
                        <li><a href="#modalAbout" data-toggle="modal">About</a></li>
                        <li><a href="#modalContact" data-toggle="modal">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <div class="page-header">
                    <h1>Page name <small>Supporting text or tagline</small></h1>
                </div>
                <div class="row">
                    <div class="span10">
                        <h2>Main content</h2>
                    </div>
                    <div class="span4">
                        <h3>Secondary content</h3>
                    </div>
                </div>
            </div>
        <div id="modalAbout" class="modal fade">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3 id="modalAboutHeader">Sobre</h3>
            </div>
            <div class="modal-body">
                <form class="modal-form form-horizontal" id="about">
                    <fieldset>
                        <div class="modal-body">
                            <div id="aboutText">
                                    <p><span>Timuork é um projeto feito com o 
                                        objetivo de tentar solucionar um problema 
                                        frequente para quem é estudante: a falta de um 
                                        ambiente/ferramenta adequada para a realização 
                                        dos já costumeiros trabalhos em grupo que
                                        vivem nos propondo ao longo de nossa vida
                                        estudantil/acadêmica.
                                    </span></p>
                                    <p><span>Como este é o primeiro desenvolvimento web
                                        feito pelo autor e o mesmo encontra-se em fase de
                                        testes/beta, espera-se que hajam erros, bugs e
                                        afins, afinal este recém começou a aventurar nesta
                                        área. Por isso, quaisquer críticas (Desde que coerentes e
                                        bem-educadas), sugestões e elogios serão aceitos de bom
                                        grado e ajudarão a melhorar no que eu vier a produzir
                                        no futuro.
                                    </span></p>
                                    <hr /> 
                                    <p><span>
                                    </span></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input data-dismiss="modal" type="submit" class="btn btn-primary" value="Fechar" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div id="modalContact" class="modal fade">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3 id="modalContactHeader">Contato</h3>
            </div>
            <div class="modal-body">
                <form class="modal-form form-horizontal" id="contact">
                    <fieldset>
                        <div class="modal-body">
                            <div id="aboutText">
                                <h2><a href="mailto:edipoterra@gmail.com">edipoterra@gmail.com</a></h2>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input data-dismiss="modal" type="submit" class="btn btn-primary" value="Fechar" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div> 
        <footer>
            <p>&copy; Company 2012</p>
        </footer>

    </div> <!-- /container -->

    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-tooltip.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-popover.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="../assets/js/timuork-general.js" type="text/javascript"></script>
    <script src="../assets/js/timuork-popoverHandler.js" type="text/javascript"></script>
    <script src="../assets/js/timuork-home.js" type="text/javascript"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-30009537-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">
        var home = new Home();
    </script>
    </body>
</html>
