﻿<?php

use common\models\Noticias;

?>

<!DOCTYPE html>
<html>
<style>
html {
  scroll-behavior: smooth;
}

</style>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>SR Consultores</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<link rel="shortcut icon" href="img/icon_sr.png?v=1" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/icon_sr.png?v=1">

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		


		<link rel="stylesheet" href="css/skins/skin-corporate-3.css"> 

		<link rel="stylesheet" href="css/custom.css">

		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
				<div style="background:white; top:0;z-index: 100;  width: 100%;position: fixed"class="border-color-primary border-top-0 box-shadow-none">
					<div style="height: 65px;"class="header-container container z-index-2">
						<div class="header-row py-2">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php">
											<img alt="Porto" width="200" height="48" src="<?= Yii::$app->request->baseUrl ?>../../web/img/logo_sr.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-center">
										<li class="d-none d-sm-inline-flex">
											<img src="<?= Yii::$app->request->baseUrl ?>../../web/img/icone fb.png" a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class=""></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent;'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
						<div style="height:60px;"class="container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '0px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
											<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle active" href="index.php">
																Home
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="#quemsomos">
																Quem Somos
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="#servicos">
																Serviços
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="#destaques">
																Destaques
															</a>
														</li>
														<li class="dropdown dropdown-full-color dropdown-light">
															<a class="dropdown-item dropdown-toggle" href="#contactos">
																Contactos
															</a>
														</li>
													</ul>
												</nav>
											</div>
											<button class="btn header-btn-collapse-nav my-2" data-toggle="collapse" data-target=".header-nav-main nav">
												<i class="fas fa-bars"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
	<body>
		<div class="body">
			<div role="main" class="main">
                <div>
                    <img src="<?= Yii::$app->request->baseUrl ?>.../../web/img/SLIDER.jpg">
                    <div class="Inicio" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    text-shadow: rgb(33, 37, 41) 3px 3px 6px; visibility: inherit; transition: none 0s ease 0s; text-align: inherit;
                    line-height: 48px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 700; font-size: 60px;
                    white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; filter: blur(0px); opacity: 1;
                     transform-origin: 50% 50% 0px; color: #FFF !important;">Soluções Integradas de Gestão</div>
                </div>
				
				<section id="quemsomos"class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<h2 class="text-color-darkMain font-weight-normal text-6 mb-2">Quem <strong class="font-weight-extra-bold">Somos</strong></h2>
								<p class="pr-5 mr-5">A SR Consultores, foi fundada em 1997, com a designação Santos & Resende - Soluções Integradas de Gestão, Lda, tendo completado em 2017 vinte anos ao serviço dos nossos clientes.</p><p>

A nossa longevidade deve-se em primeiro lugar à confiança que muitas empresas e empresários têm depositado em nós. A seriedade e rigor com que desempenhamos as nossas funções de acompanhamento das necessidades dos nossos clientes são a nossa imagem de marca e o nosso principal activo.</p><p>

Privilegiamos a prestação do serviço ao cliente numa óptica de parceria e proximidade, sendo parte fundamental nas decisões de gestão das empresas e empresários nossos clientes.</p><p>

Dedicamo-nos à prestação de serviços de contabilidade, assessoria fiscal e gestão de recursos humanos.</p><p>

Procuramos sempre o melhor planeamento fiscal para cada cliente, feito à medida das suas necessidades e sempre em cumprimento das normas fiscais em vigor   Temos ainda um departamento de prestação de serviços a particulares.
								</p>
							</div>
							<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 18rem;">
								<img src="<?= Yii::$app->request->baseUrl ?>.../../web/img/about1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
								<img src="<?= Yii::$app->request->baseUrl ?>.../../web/img/about2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
								<img src="<?= Yii::$app->request->baseUrl ?>.../../web/img/about3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
							</div>
						</div>
					</div>
				</section>

				<div id="servicos" class="container-fluid">

				<div class="row align-items-center bg-color-grey">
						<div class="col-lg-6 p-0">
							<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/SERVIÇO1.jpg" style="min-height: 439.2px;">
							</section>
						</div>
						<div class="col-lg-6 p-0">
							<section class="section section-no-border h-100 m-0">
								<div class="row m-0">
									<div class="col-half-section col-half-section-left">
										<div class="overflow-hidden">
											<h4 class="text-color-darkMain mb-0 appear-animation" data-appear-animation="maskUp"><a class="text-4 font-weight-bold pt-2 d-block text-decoration-none pb-1">Contabilidade e Assessoria Fiscal</a></h4>
										</div>
										<div class="overflow-hidden mb-2">
											<p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"><br>Executamos a contabilidade em todos os regimes definidos do Sistema de Normalização Contabilística:
											</p>
											<ul>
												<li class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Regime Geral e das Pequenas Empresas</li>
												<li class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Regime das Micro-Entidades</li>
												<li class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Regime Simplificados (IRS)</li>
											</ul>
											<p class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
											Nesta vertente, o nosso objectivo fornecer informação de apoio à gestão, de forma a que os nossos clientes possam tomar as melhores decisões, sempre com base no mais rigoroso cumprimento das normas em vigor. 
											No sentido da adequar a nossa oferta de serviços à dimensão das necessidades de cada cliente, criámos 2 Planos de Serviços
											</p>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div class="row align-items-center bg-color-grey">
					<div style="background:#393285;"class="col-lg-6 order-1 order-lg-1">
						<section class="section-color1">
							<div class="row justify-content-end m-0">
								<div class="col-half-section col-half-section-right custom-text-align-right">
									<div class="overflow-hidden">
										<h4 style="text-align: center;"><a  class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Plano Profissional</a></h4>
									</div>
									<p style="color:white; text-align: center;"class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Pensado para as empresas de menor dimensão, cujas necessidades passam básicamente pelo adequado e atempado cumprimento das suas obrigações contabilísticas e ﬁscais.</p>
									<div class="col-half-section-right" style=" display : block; margin : auto;">
										<br>
										<br>
									<a href="<?= Yii::$app->request->baseUrl ?>.pdf/plano-profissional.pdf" download="Plano Profissional" target="_blank">                                        <img style="display: block; margin-left: auto; margin-right: auto;width:50px;height: 50px;" src="<?= Yii::$app->request->baseUrl ?>.../../web/img/iconepdf1.png">                                    </a>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div style="background:#4c4794;"class="col-lg-6 order-1 order-lg-1">
						<section class="section-color2">
							<div class="row m-0">
								<div class="col-half-section col-half-section-left">
									<div class="overflow-hidden">
										<h4 style="text-align: center;" class="mb-0appear-animation" data-appear-animation="maskUp"><a  class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Plano Excelência</a></h4>
									</div>
									<div class="overflow-hidden mb-2">
										<p style="color:white; text-align: center;"class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Este serviço é vocacionado para os empresários que consideram que a informação contabilística é imprescindível para a sua gestão e tomada de decisão.</p>
									</div>
									<div style=" display : block; margin : auto;">
										<br>
										<br>
										<br>
										<a href="pdf/plano-excelencia.pdf" download="Plano Excelência" target="_blank">
                                        <img style="display: block; margin-left: auto; margin-right: auto;width:50px;height: 50px;" src="<?= Yii::$app->request->baseUrl ?>.../../web/img/iconepdf2.png"> </a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="row align-items-center bg-color-grey">
							<div class="col-lg-6 order-2 order-lg-1 p-0">
								<section class="section section-no-border h-100 m-0">
									<div class="row justify-content-end m-0">
										<div class="col-half-section col-half-section-right custom-text-align-right">
											<div class="overflow-hidden">
												<h4 class="text-color-darkMain mb-0appear-animation" data-appear-animation="maskUp"><a class="text-4 font-weight-bold pt-2 d-block text-decoration-none pb-1">Serviços a Particulares</a></h4>
											</div>
											<p style="color: black;"class="text-2 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Com o intuito de poupar tempo gasto em Serviços Públicos e facilitar a vida a particulares, prestamos os seguintes serviços:</p>
										</div>
									</div>
									<div data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
										<br>
										<br>
										<a href="<?= Yii::$app->request->baseUrl ?>.pdf/particulares.pdf" download="Particulares" target="_blank"><img style="display: block; margin-left: auto; margin-right: auto;width:50px;height: 50px;" src="<?= Yii::$app->request->baseUrl ?>.../../web/img/iconepdf3.png">                                    </a>
									</div>
								</section>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 p-0">
								<section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/SERVIÇO2.jpg" style="min-height: 315px;">
								</section>
							</div>
						</div>

					</div>

				<section id="destaques" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light text-6 mb-4">Destaques</h2>
							</div>
						</div>
<<<<<<< HEAD

						<div class="col pl-1">
							<h4 class="line-height-3 text-4"><a href="destaques.html#destaque3" class="text-light"><?= $Noticias[$i]->titulo; ?></a></h4>
							<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1"><?= $Noticias[$i]->texto; ?></p>
							<a href="destaques.html#destaque3" class="read-more text-color-light font-weight-semibold text-2">Ler Mais <i class="fas fa-chevron-right text-1 ml-1"></i>
								
=======
						<div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col">
											<a href="destaques.html#destaque1" class="text-decoration-none">
												<img src="../../web/img/blog/blog-corporate-3-1.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-black font-weight-extra-bold">30</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">ABR</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="destaques.html#destaque1" class="text-light"><?php ?></a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="destaques.html#destaque1" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<article>
									<div class="row">
										<div class="col">
											<a href="destaques.html#destaque2" class="text-decoration-none">
												<img src="../../web/img/blog/blog-corporate-3-2.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-black font-weight-extra-bold">30</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">ABR</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="destaques.html#destaque2" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="destaques.html#destaque2" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
								<article>
									<div class="row">
										<div class="col">
											<a href="destaques.html#destaque3" class="text-decoration-none">
												<img src="../../web/img/blog/blog-corporate-3-3.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-black font-weight-extra-bold">30</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">ABR</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="destaques.html#destaque3" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="destaques.html#destaque3" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-6 col-lg-3">
								<article>
									<div class="row">
										<div class="col">
											<a href="destaques.html#destaque4" class="text-decoration-none">
												<img src="../../web/img/blog/blog-corporate-3-4.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-auto pr-0">
											<div class="date">
												<span class="day bg-color-light text-color-black font-weight-extra-bold">30</span>
												<span class="month bg-color-light font-weight-semibold text-color-primary text-1">ABR</span>
											</div>
										</div>
										<div class="col pl-1">
											<h4 class="line-height-3 text-4"><a href="destaques.html#destaque4" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<a href="destaques.html#destaque4" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
										</div>
									</div>
								</article>
							</div>
>>>>>>> parent of 4c9a60b... aasd
						</div>
					</div>
				</section>

				<div id=contactos  class="container py-4">

				<div class="row mb-5">
							<div class="col-lg-4">
								
								<div class="overflow-hidden mb-3">
									<img style="width: 40%;" src="<?= Yii::$app->request->baseUrl ?>.../../web/img/logo_sr.png">
								</div>
								<div class="overflow-hidden mb-3">
									<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600" data-plugin-options="{'accY': -200}">Prestação de Serviços de Contabilidade, Assessoria Fiscal, Gestão de Recursos Humanos e Serviços a Particulares</p>
								</div>
								<div class="overflow-hidden">
									<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600" data-plugin-options="{'accY': -200}">P.IVA 503900702 <br>N.C.: 503900702</p>
								</div>

							</div>
							<div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

								<h4 class="pt-5">Contactos</h4>
								<ul class="list list-icons list-icons-style-3 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> Av. Eng. Duarte Pacheco, 5A 2640-476 Mafra | Portugal</li>
									<li><i class="fas fa-phone top-6"></i> T.(+351) 261 812 640 | F.(+351) 261 813 796</li>
									<li><i class="fas fa-envelope top-6"></i><a href="mailto:geral@srconsultores.pt">geral@srconsultores.pt</a></li>
								</ul>
								
							</div>
							<div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

								<h4 class="pt-5">Horário</h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> 2ª a 6ª feira -9am > 18pm</li>
								</ul>

							</div>
						</div>

					</div>

			<div style="width:100%;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.6490460533416!2d-9.329787177931294!3d38.940017890746006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ed7d16e487a15%3A0x3795d65a3d43801a!2sAv.+Eng.+Duarte+Pacheco+5%2C+2640-476+Mafra!5e0!3m2!1spt-PT!2spt!4v1554279428781!5m2!1spt-PT!2spt" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</section>
			<footer id="footer">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>SR Consultores © Todos os direitos reservados.</strong> </p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>

