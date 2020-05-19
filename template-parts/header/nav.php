<div class="col-lg-9 col-m-lg-8 collapse navbar-collapse" id="navbarsNav">
	
	<ul class="navbar-nav navbar-top">
		<li class="nav-lang">
			<div class="lang">
				<a class="active" href="#">Ru</a>
				<a href="#">Eng</a>
			</div>
		</li>
		<li class="nav-currency">
			<div class="currency">
				<span class="active">Usd</span>

				<span>Грн</span>

				<span>Руб</span>
			</div>
		</li>
		<li class="nav-mailto">
			<a href="mailto:">support@hosting.energy</a>
		</li>
		<li class="nav-phone">
			<a href="phone:+380 99 316-44-89">+380 99 316-44-89</a>
			<a href="phone:+7 960 107-44-94">+7 960 107-44-94</a>
		</li>
		<li class="nav-login">
			<div class="login">
				<a href="#">личный Кабинет</a>
				<div class="ico">
					<svg class="svg-ico">
						<use xlink:href="#ico-user" />
					</svg>
				</div>
			</div>
		</li>
	</ul><!--// .navbar-top - Top Navigation -->

	<ul class="navbar-nav navbar-main">
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Hosting") {?>active<?php }?>" href="/hosting.php">Хостинг</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">VIP-хостинг</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">VDS</a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="#">Сервера</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Хостинг бекапов</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Новости</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Акции</a>
		</li>
		 <li class="nav-item">
			<a class="nav-link" href="#">База знаний</a>
		</li>

		<!-- <li class="nav-item dropdown" style="display: none;">
			<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Саб меню
			</a>
			<div class="dropdown-menu" aria-labelledby="dropdown01">
				<a href="#" class="dropdown-item">Новости 1</a>
				<a href="#" class="dropdown-item">Новости 2</a>
				<a href="#" class="dropdown-item">Новости 3</a>
				<a href="#" class="dropdown-item">Новости 4</a>
			</div>
		</li> --><!--// dropdown sample -->

	</ul><!--// .navbar-main - Main Navigation -->

</div><!--///////////// Navigation -->

<button 
class="navbar-toggler collapsed" 
type="button" data-toggle="collapse" 
data-target="#navbarsNav" aria-controls="navbarsNav" 
aria-expanded="false" 
aria-label="Toggle navigation"></button>