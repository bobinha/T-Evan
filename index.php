<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="evandromarinho.css">
		<link type="text/css" rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<script src="https://kit.fontawesome.com/26e3d9dcc9.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" href="img/favicon.png">
		<title>T-Evan</title>
	</head>
	<body>
		<header id="navbar">
			<div class="logo">
				T-<b>Evan</b>
			</div>
			<nav role='navigation'>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#esl-material">ESL Material</a></li>
					<li><a href="#about-me">About</a></li>
					<li><a href="#contact-me">Contact</a></li>
				</ul>
			</nav>
		</header>
		<section id="home">
			<img src="img/banner.jpg" class="zeppelin">
			<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
		</section>

		<section id="esl-material" class="container">
			<h2>ESL Material</h2><hr>
			<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-6 esl-material-card-holder">
					<div class="esl-material-card">
						<img src="https://wordpress.mediatel.co.uk/wp-content/uploads/2019/08/podcast.jpg" alt="esl-material" class="img-responsive esl-material-img">
						<div class="esl-material-img-desc"><a href="https://open.spotify.com/show/4Ib5bG93ZxJhUxmX7KVxoB" target="_blank">
							<p>Podcast</p></a>
						</div>			
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6 esl-material-card-holder">
					<div class="esl-material-card">
						<img src="https://www.noblecopy.com/wp-content/uploads/2018/09/grammar-389907_960_720.jpg" alt="esl-material" class="img-responsive esl-material-img">
						<div class="esl-material-img-desc">
							<p><a href="https://2qdocg2za8g336a8w21fo83z-wpengine.netdna-ssl.com/wp-content/uploads/2014/06/Free-English-Grammar-Book-Level-1.pdf" target="_blank">Grammar 1</a> | <a href="https://2qdocg2za8g336a8w21fo83z-wpengine.netdna-ssl.com/wp-content/uploads/2014/06/Free-English-Grammar-Book-Level-2.pdf" target="_blank">Grammar 2</p>
						</div>			
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6 esl-material-card-holder">
					<div class="esl-material-card">
						<img src="https://www.albengacorsara.it/wp-content/uploads/2016/10/Note-musicali-colorate-678x381.jpg" alt="esl-material" class="img-responsive esl-material-img">
						<div class="esl-material-img-desc"><a href="https://www.letras.mus.br/blog/musicas-para-aprender-ingles/" target="_blank">
							<p>Songs</p></a>
						</div>			
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6 esl-material-card-holder">
					<div class="esl-material-card">
						<img src="https://imgs.classicfm.com/images/106128?width=6000&crop=16_9&signature=VfJeSnw8tEetODPBnZzZVhE3lIU=" alt="esl-material" class="img-responsive esl-material-img">
						<div class="esl-material-img-desc"><a href="https://www.elcivics.com/esl-ebook-worksheets.pdf" target="_blank">
							<p>Reading</p></a>
						</div>			
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6 esl-material-card-holder">
					<div class="esl-material-card">
						<img src="https://www.elcivics.com/esl/charts-graphs/charts-graphs-lesson.jpg" alt="esl-material" class="img-responsive esl-material-img">
						<div class="esl-material-img-desc"><a href="https://br.pinterest.com/pin/17451517291154350/?nic_v1=1aEZcYGh4nblCaK2Y%2B1tGFjEp5H7SQQErHkbhxjJuHNSzobbEXeRxct9esbaX2ABeV" target="_blank">
							<p>Charts</p></a>
						</div>			
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-6 esl-material-card-holder">
					<div class="esl-material-card">
						<img src="https://hbr.org/resources/images/article_assets/2018/05/may18_2_941753452.jpg" alt="esl-material" class="img-responsive esl-material-img">
						<div class="esl-material-img-desc"><a href="https://www.historyplace.com/speeches/previous.htm" target="_blank">
							<p>Speeches</p></a>
						</div>			
					</div>
				</div>
			</div>
		</section>
		<section id="about-me">
			<h2>About Me</h2><hr>
			<img src="img/aboutmeimg.jpg" class="about-me-image">				
			<p>Olá, me chamo Evandro, uma pessoa comum que gosta de inglês tanto quanto você!<br>Se estiver procurando um espaço para aprimoramento no idioma inglês, bem-vindo, veio ao lugar certo!<br>Espero que você consiga sair daqui com uma bagagem maior de aprendizado no idioma!<br><b>Peace out!</b></p>
		</section>
		
			<br />
			<br />
		<section>
			<h1 id="contact-me">Contact Me</h1><hr>
			<center>
	    		<div class="contact-form-widget">
	      			<div class="form">
	        			<form name="contact-form" action="#" id="form_contato">
	          				<div class="nama">
		            			<br>
		            			<br>
					            <i class="fa fa-user-alt"></i> Name:
					        </div>
				          	<input class="contact-form-name" id="ContactForm1_contact-form-name" name="name" size="30" type="text" value="" />
				          	<br>
				          	<br>
	         				<div class="email">
					            <i class="fa fa-envelope-o"></i> E-mail:
					        </div>
				          	<input class="contact-form-email" action="form.php" id="ContactForm1_contact-form-email" name="email" size="30" type="text" value="" />
				         	<br>
				        	<br>
	          				<div class="pesan">
					            <i class="fa fa-pencil-square-o"></i> Message:
					        </div>
				        	<textarea class="contact-form-email-message" cols="30" id="ContactForm1_contact-form-email-message" name="msg" rows="10"></textarea>
          					<br>
          					<button class="contact-form-button contact-form-button-submit" id="btn_submit" type="button">Send</button>
          					<br>
	          				<div class="alert alert-danger d-none" id="ContactForm1_contact-form-error-message">Formulário não enviado!</div>
	          				<div class="alert alert-success d-none" id="ContactForm1_contact-form-success-message">Formulário enviado com sucesso!</div>
		        		</form>
		      		</div>
		    	</div>
		  	</center>
		</section>
		<footer>
			<div class="container footer-container">
				<div class="row footer-row">
					<div class="col-xs-12 col-sm-6 col-md-6 text-center">
						<h4 class="text-center">Encontre-me aqui:</h4>
						<address>
							<strong><i class="fas fa-map-marker-alt"></i> Wizard Santa Cruz</strong><br>Rua Paulo José de Morais, 910.<br> Santa Cruz do Capibaribe - PE<br><i class="fa fa-envelope-o"></i> evanforgotlastone@hotmail.com<br>
							<a class="tel" href="tel:81973324941" type="tel"><i class="fa fa-mobile"></i><span> +55 (81) 9 7332-4941</span></a>
						</address>
					</div>
					<div class="col-xs-12 col-md-6 col-sm-6 social-section">
						<div class="text-center">
							<h4 class="text-center">Também, pode me encontrar aqui:</h4>
							<div class="text-center social-buttons">
								<a target="_blank" href="https://www.facebook.com/bobinhaa" class="btn btn-default btn-lg social-button link-facebook"><i class="fab fa-facebook"></i></a>
								<a target="_blank" href="https://instagram.com/evandromarinh0" class="btn btn-default btn-lg social-button link-instagram"><i class="fab fa-instagram"></i></a>
							</div>
							<hr class="footer-hr" id="hr-footer">
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="lib/jQuery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>