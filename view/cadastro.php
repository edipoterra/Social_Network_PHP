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
        <link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/friendface.css" rel="stylesheet">
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
                    <a class="brand" href="#">Friend Face</a>
                    <ul class="nav">
                        <li><a href="#modalAbout" data-toggle="modal">About</a></li>
                        <li><a href="#modalContact" data-toggle="modal">Contact</a></li>
                    </ul>
					<form class="pull-right" id="login" action="login" method="post">
                        	<input class="input-small" id="loginUser" name="loginUser" type="text" placeholder="Username" maxlength="25">
                        	<input class="input-small" id="loginPassword" name="loginPassword" type="password" placeholder="Password">
                        	<button class="btn" type="submit">Login</button>
                	</form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <div class="page-header">
                    <h1>Friend Face <small>Esta é a sua rede social! Só que não</small></h1>
                </div>
                <div class="row">
                    <div class="span10">
						<p><h4><span>
							Esta é uma simples rede social que permite o compartilhamento de informação em texto
							ou imagens para os seus amigos. <br>
						<span></h4></p>
						<p><h4><span>
							Junte-se à nossa rede social e inicie novas amizades,
							encontre pessoas que não vê a tempos, faça networks profissionais ou o que a sua 
							imaginação for capaz de fazer.
						<span></h4></p>
                    </div>
                    <div class="span4">
                        <h3>Cadastre-se</h3>
                        <form id="addUser" method="post" class="center70" action="/user/add">
                            <div id="nameDiv" class="control-group">
                                <div class="controls">
                                    <input id="nome" name="nome" type="text" placeholder="Nome" maxlength="50"><br><br>
                                </div>
                            </div>
                            <div id="userDiv" class="control-group">
                                <div class="controls">
                                    <input id="usuario" name="usuario" type="text" placeholder="Usuario" maxlength="25"><br><br>
                                </div>
                            </div>
                            <div id="nameDiv" class="control-group">
                                <div class="controls">
                                    <input id="password" name="password" type="password" placeholder="Senha"><br><br>
                                </div>
                            </div>
                            <div id="nameDiv" class="control-group">
                                <div class="controls">
                                    <input type="email" placeholder="Email"><br><br>
                                </div>
                            </div>
                            <div>
                                <button id="registerButtonDiv" class="btn" type="submit">Cadastrar</button>
                            </div>
                        </form>

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

    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-popover.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="assets/js/timuork-general.js" type="text/javascript"></script>
    <script src="assets/js/timuork-popoverHandler.js" type="text/javascript"></script>
    <script src="assets/js/timuork-home.js" type="text/javascript"></script>
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
