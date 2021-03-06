
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>IT Hub - коворкинг</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?=url('/public/v2/').'/libs/bootstrap/css/bootstrap-grid.min.css';?>">
	<link rel="stylesheet" href="<?=url('/public/v2/').'/libs/animate/animate.css';?>">

	<link rel="stylesheet" href="<?=url('/public/v2/').'/css/fonts.css';?>">
	<link rel="stylesheet" href="<?=url('/public/v2/').'/css/main.css';?>">
	<link rel="stylesheet" href="<?=url('/public/v2/').'/css/media.css';?>">

	<link rel="stylesheet" href="<?=url('/public/v2/').'/css/superslides.css';?>">


	<link rel="stylesheet" href="<?=url('/public/v2/').'/css/full-slider.css';?>">



</head>

<body>

	<!-- Здесь пишем код -->

	<div class="container-fluid">
		<div class="row">
				<div class="head">
					<a href="/auth/signin" class="auth_link">авторизация</a>
				</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
				<div class="head-menu">
					<div class="head-bg"></div>
					<div class="logo-hub"></div>
					<ul class="main-menu">
							<li><a href="#top1" class="scrollto">О НАС</a></li>
							<li><a>&nbsp;|&nbsp;</a></li>
							<li><a href="#top2" class="scrollto">ЦЕНЫ</a></li>
							<li><a>&nbsp;|&nbsp;</a></li>
							<li><a href="#top3" class="scrollto">ГАЛЕРЕЯ</a></li>
							<li><a>&nbsp;|&nbsp;</a></li>
							<li><a href="#top4" class="scrollto">КОНТАКТЫ</a></li>
					</ul>

				</div>
				<div class="icon-one"></div>
				<div class="container-fluid" id="top1">
					<div class="row">
						<div class="description" >
							<div class="col-md-12">
								<p class="title">Любимое место фрилансера</p>
								<!--<p class="desc">Это оборудованное всем необходимым пространство для занятия бизнесом или определенной работой которое любой желающий может взять в аренду</p>-->
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="features">
							<div class="col-md-8 col-md-offset-3" id="feature1">
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="place">удобная транспортная развязка </p>
					            </div>
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="network">нетворкинг зона </p>
					            </div>
					        </div>

					        <div class="col-md-8 col-md-offset-3" >
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="comfort">комфортные условия работы</p>
					            </div>
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="learning">возможность обучения и развития </p>
					            </div>
					        </div>

					        <div class="col-md-8 col-md-offset-3">
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="wifi">высокоскоростной интернет </p>
					            </div>
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="coffe">минибар и бесплатный кофе </p>
					            </div>
					        </div>

					        <div class="col-md-8 col-md-offset-3">
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="m2">аудитории для проведения мероприятий </p>
					            </div>
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="shower">душ </p>
					            </div>
					        </div>

					        <div class="col-md-8 col-md-offset-3">
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="event-place">500 кв. рабочего пространства </p>
					            </div>
					            <div class="col-md-4 portfolio-item">
					                <p class="feature" id="security">безопасность </p>
					            </div>
					        </div>
						</div>
					</div>
				</div>

				<div class="price-block"  id="top2">
						<!--<div class="price-description">
								<p class="price-title">ЦЕНЫ АРЕНДЫ</p>
								<p class="price-desc">рабочего места в <span id="coworking_text">коворкинге</span></p>
						</div>-->

					<div class="container-fluid">
						<div class="row">
<!--

							<div class="price_card bravo">
								<div class="header">
									<span class="name">День</span>
									<span class="name">120</span>
									<span class="name">грн</span>
								</div>
								<ul class="price-features">
									<li>с 9:00 до 21:00</li>
									<li>при необхлдимости перебывания в коворкинге до 9:00 сообщить заранее</li>
									<li>бесплатное кофе</li>
								</ul>
							</div>

-->
							<div id="pricing">
								<div class="col-md-9">
									<div class="col-md-2 col-xs-2 col-md-offset-4">
										<div class="price_card bravo" id="first-card">
											<div class="header">
												<span class="name">День</span>
												<span class="name" id="price-card">120</span>
												<span class="name">грн</span>
											</div>
											<ul class="price-features">
												<li style="font-size:20px;color:#FFCC33;">с 9:00 до 21:00</li>
												<li style="font-size:12px;"><h4>при необхлдимости перебывания в коворкинге до 9:00 сообщить заранее</h4></li>
												<li>бесплатное кофе</li>
											</ul>
										</div>
									</div>
									<div class=" col-md-2  col-xs-2">
										<div class="price_card bravo" id="second-card">
											<div class="header">
												<span class="name">Неделя</span>
												<span class="name" id="price-card">700</span>
												<span class="name">грн</span>
											</div>
											<ul class="price-features">
												<li style="font-size:20px;color:#FFCC33;">7 дней</li>
												<li style="font-size:12px;"><h3>без выходных стоимость 500 грн</h3></li>
												<li>бесплатное кофе</li>
											</ul>
										</div>
									</div>
									<div class=" col-md-2  col-xs-2">
										<div class="price_card alpha" id="third-card">
											<div class="header">
												<span class="name">Месяц</span>
												<span class="name" id="price-card">1500</span>
												<span class="name">грн</span>
											</div>
											<ul class="price-features">
												<li style="font-size:20px;color:#FFCC33;">Безлимит</li>
												<li style="font-size:12px;"><h1>30 суток</h1></li>
												<li>бесплатное кофе</li>
											</ul>
										</div>
									</div>

									<div class=" col-md-2  col-xs-2">
										<div class="price_card bravo" id="fourth-card">
											<div class="header">
												<span class="name">Ночь</span>
												<span class="name" id="price-card">80</span>
												<span class="name">грн</span>
											</div>
											<ul class="price-features">
												<li style="font-size:20px;color:#FFCC33;">с 21:00 до 9:00</li>
												<li style="font-size:12px;"><h3>Бесплатное кофе</h3></li>
												<li>обязательна предварительная бронь</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>


				<div class="container-fluid">
					<div class="row">
						<div class="description2">
							<div class="col-md-12">
								<p class="title-desc-2 col-md-offset-4">Мы предлагаем всю необходимую инфраструктуру для развития проектов, проведения тренингов, meet up'ов, семинаров и мастер классов.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="icon-two"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="rent-space">
							<div class="auth-btn col-xs-2 col-md-2">
								<a class="btn green">&nbsp;&nbsp;цены аренды помещений&nbsp;&nbsp;</a>
							</div>
							<!--
							<div class="rent-card">
								<div class="rent-logo" id="skype-logo"></div>
								<div class="rent-desc">

								</div>
							</div>
							-->
				<div id="rent">
					<div class="col-md-9">
						<div class="col-md-2  col-xs-2 col-md-offset-4">
							<div class="rent-card">

								<div class="rent-logo" id="skype-logo"></div>
								<div class="rent-desc">
									<span>120 грн</span>
									<hr>
									<span id="day">день</span>
								</div>
							</div>
						</div>
						<div class=" col-md-2  col-xs-2">
							<div class="rent-card">
								<p class="rent-room">аудитория на</p>
								<div class="rent-logo" id="rentlogo2"></div>

									<div class="rent-desc">
									<span>80 грн</span>
									<hr>
									<span id="day">час</span>
								</div>

							</div>
						</div>
						<div class=" col-md-2  col-xs-2">
							<div class="rent-card">
								<p class="rent-room">аудитория на</p>
								<div class="rent-logo" id="rentlogo3"></div>

									<div class="rent-desc">
									<span>100 грн</span>
									<hr>
									<span id="day">час</span>
								</div>

							</div>
						</div>

						<div class=" col-md-2  col-xs-2">
							<div class="rent-card">
								<p class="rent-room">аудитория на</p>
								<div class="rent-logo" id="rentlogo4"></div>

									<div class="rent-desc">
									<span>100 грн</span>
									<hr>
									<span id="day">час</span>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


				<div id="slides">
				    <div class="slides-container"   id="top3">
				      <img src="<?=url('/public/v2/').'/img/src/1.jpg';?>" alt="Cinelli">
				      <img src="<?=url('/public/v2/').'/img/src/2.jpg';?>" width="800" height="553" alt="Surly">
				      <img src="<?=url('/public/v2/').'/img/src/3.jpg';?> width="800" height="553" alt="Cinelli">
				    <!--  <img src="img/src/4.jpg" width="1024" height="685" alt="Affinity">-->
				    </div>

				    <nav class="slides-navigation">
				      <a href="#" class="next"></a>
				      <a href="#" class="prev"></a>
				    </nav>
				</div>

				<div class="container-fluid" id="top4">
					<div class="row">
						<div class="contacts" ></div>
						<div class="contact-card">
								<div class="contact-header">
									<p class="contact-title" id="contact-title-1">КАК НАС НАЙТИ:</p>
									<p class="contact-title" id="contact-title-2">Запорожье</p>
									<p class="contact-title" id="contact-title-3"> Проспект Соборный 24</p>
								</div>
								<ul class="social-contacts">
									<li><a href="https://www.facebook.com/ithubcoworking/">facebook/ithub</a></li>
									<li><a href="http://vk.com/ithub_zp">vk/ithub</a></li>
									<li><a href="http://www.coworking.com.ua/#!it-hub-coworking-place/h1n2m">about us</a></li>
								</ul>
								<p class="contact-telephone">380 95-20-686-21</p>
							</div>
						</div>

					</div>
				</div>


					<div class="container-fluid">
						<div class="row">
						<div class="partners col-xs-12 col-md-12">
								<ul>
									<li class="col-xs-3 col-md-3"><img src="<?=url('/public/v2/').'/img/partners/1.png';?>" width="91" height="45"></li>
									<li class="col-xs-3 col-md-3"><img src="<?=url('/public/v2/').'/img/partners/2.png';?>" width="55" height="45"></li>
									<li class="col-xs-3 col-md-3"><img src="<?=url('/public/v2/').'/img/partners/3.png';?>" width="55" height="45"></li>
									<li class="col-xs-3 col-md-3"><img src="<?=url('/public/v2/').'/img/partners/4.png';?>" width="141" height="45"></li>
								</ul>
						</div>
					</div>
						<p class="col-md-3 col-md-offset-5 " id="it-group">IT Group Internet Projects</p>

					</div>
				</div>




	<div class="hidden"></div>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="libs/modernizr/modernizr.js"></script>
	<script src="libs/jquery/jquery-1.11.2.min.js"></script>
	<script src="libs/waypoints/waypoints.min.js"></script>
	<script src="libs/animate/animate-css.js"></script>
	<script src="libs/plugins-scroll/plugins-scroll.js"></script>
	<script src="libs/plugins-scroll/jquery.superslides.js"></script>
	<script src="js/common.js"></script>
	<script>
	    $(function() {
	      $('#slides').superslides({
	        hashchange: true
	      });
	    });
	</script>
</body>
</html>
