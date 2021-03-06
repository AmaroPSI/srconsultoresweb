<?php

use common\models\Noticias;
use yii\helpers\Html;

?>
<!DOCTYPE html>
<html>
	<head>

        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>SR Consultores</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<link rel="shortcut icon" href="img/icon_sr.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/icon_sr.png">

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
											<img alt="Porto" width="200" height="48" src="img/logo_sr.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-center">
										<li class="d-none d-sm-inline-flex">
											<img src="img/icone fb.png" a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class=""></i></a>
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
<br><br><br><br><br>
		<div class="body">
							
			<div role="main" class="main">


				<div class="container py-4">

                    <?php
                    for ($i = 0; $i < count($model); $i++)
                    {?>

					<div class="row">
						<div class="col">
							<div class="blog-posts single-post">
							
								<article class="post post-large blog-single-post border-0 m-0 p-0">
									<div class="post-image ml-0">
										<a>
											<img src="<?= 'http://localhost/srconsultoresweb/frontend/web/noticias'. '/' . $model[$i]->imagem ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
										</a>
									</div>
							
									<div class="post-date ml-0">
										<span class="day"><?= $model[$i]->dia ?></span>
										<span class="month"><?= $model[$i]->mes ?></span>
									</div>
							
									<div class="post-content ml-0">
							
										<h2 class="font-weight-bold"><a><?= $model[$i]->titulo ?></a></h2>

										<p><?=$model[$i]->texto; ?></p>
									</div>
								</article>
							
							</div>
						</div>
					</div>

                        <?= Html::endForm(); } ?>

				</div>

			</div>

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
		
		<script src="js/theme.js"></script>
		
		<script src="js/custom.js"></script>
		
		<script src="js/theme.init.js"></script>

	</body>
</html>

