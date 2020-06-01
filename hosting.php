
<?php include ("header.php");?>

	<section class="section-hero-page">
		<div class="container-fluid container-width-md">
			<div class="page-title title-block">
				<h3>Наши Услуги</h3>
				<h1>Виртуальный хостинг сайтов от Hosting.Energy</h1>
				<span class="title-line line-left"><span class="line-inner"></span></span>
			</div>
			<div class="row">
				<div class="col-lg-6 text">
					<p>– это удобный, качественный, надежный и недорогой хостинг. Мы работаем, чтобы сделать Hosting.Energy лучшим хостингом для своих клиентов предоставляя максимум услуг по доступным ценам. Наши решения подойдут для размещения любых сайтов – от визиток до интернет-магазинов и развлекательных порталов.</p>

					<p>Сервера виртуального хостинга расположены в Страсбурге и Рубе, в датацентре OVH. Сервера обеспечены высокоскоростными и надежными каналами связи и бесплатным AntiDDoS. На выбор клиента предоставляются одновременно до 8 shared IP в разных подсетях и разных странах: Нидерланды, Великобритания, Литва, Франция, Германия.</p>
				</div>
				<div class="col-lg-6 text">
					<p>Отличительная особенность нашего хостинга – гибкость и настраиваемость. Помимо базового пакета сервисов клиенты могут заказывать дополнительные IP-адреса, WWW-домены, базы данных, дисковое пространство, оперативную память, почтовые домены, настраивая тариф и конфигурацию хостинга под свои нужды.</p>

					<p>
						<strong>Чтобы купить хостинг, просто нажмите кнопку "Заказать".  <br>
						Простая регистрация, мгновенная оплата – и полный доступ в ваших руках!</strong></s>
					</p>
				</div>
			</div>

			<span class="block-spacer sp-sm" style="clear: both; display: block; height: 22px"></span>

			<div class="btn-wrap">
				<a href="#" class="btn-main">Заказать</a>
			</div>
		</div>
	</section>


	<section class="section-wave section-calc">
		<div class="container-fluid container-width-md">
			
			<div class="section-title title-block title-center">
				<h2>Калькулятор хостинга</h2>
				<span class="title-line"><span class="line-inner"></span></span>
			</div>

			<div class="block-style-base">
				<div class="row justify-content-center">
					<div class="col-lg">
						<div id="hosting-configurator" class="calcuator">
							<div class="row runner-set">
								<span class="preset btn-preset preset_basic preset_active">Базовый</span>
								<span class="preset btn-preset preset_normal">Норма</span>
								<span class="preset btn-preset preset_pro">Профи</span>
							</div>

							<div class="order-wrap">
								<span class="order-label">									
									<svg class="svg-ico ico-theme-1" data-name="ico-flash">
										<use xlink:href="#ico-flash"></use>
									</svg>
									Количество сайтов:
								</span>
								<div class="runner-wrap sliderbox">
									<div class="runner-bg param_slider" id="sites" data-addon="347"></div>
								</div>
								<input type="text" class="form-control" id="sites_amount" value="1">
							</div>

							<div class="order-wrap">
								<span class="order-label">
									<svg class="svg-ico ico-theme-1" data-name="ico-flash">
										<use xlink:href="#ico-flash"></use>
									</svg>
									Количество баз данных:
								</span>
								<div class="runner-wrap sliderbox">
									<div class="runner-bg param_slider" id="databases" data-addon="348"></div>
								</div>
								<input type="text" class="form-control" id="databases_amount" value="1">
							</div>

							<div class="order-wrap">
								<span class="order-label">									
									<svg class="svg-ico ico-theme-1" data-name="ico-flash">
										<use xlink:href="#ico-flash"></use>
									</svg>
									Размер диска, мб:
								</span>
								<div class="runner-wrap sliderbox">
									<div class="runner-bg param_slider" id="disk" data-addon="343"></div>
								</div>
								<input type="text" class="form-control" id="disk_amount" value="3000">
							</div>
							
							<div class="order-wrap">								
								<span class="order-label">
									<svg class="svg-ico ico-theme-1" data-name="ico-flash">
										<use xlink:href="#ico-flash"></use>
									</svg>
									RAM (на скрипт), мб: <br>
									<small>Количество памяти выделяемой на каждый скрипт</small>
								</span>
								<div class="runner-wrap sliderbox">
									<div class="runner-bg param_slider" id="ram" data-addon="350"></div>
								</div>
								<input type="text" class="form-control" id="ram_amount" value="160">
							</div>

							<div class="order-wrap">
								<span class="order-label">
									<svg class="svg-ico ico-theme-1" data-name="ico-flash">
										<use xlink:href="#ico-flash"></use>
									</svg>
									Почтовые ящики:
								</span>
								<div class="runner-wrap sliderbox">
									<div class="runner-bg param_slider" id="mailboxes" data-addon="349"></div>
								</div>
								<input type="text" class="form-control" id="mailboxes_amount" value="1">
							</div>

							<div class="order-wrap">
								<span class="order-label">
									<svg class="svg-ico ico-theme-1" data-name="ico-flash">
										<use xlink:href="#ico-flash"></use>
									</svg>
									Выделенные IP адреса:
								</span>
								<div class="runner-wrap sliderbox">
									<div class="runner-bg param_slider" id="ip" data-addon="345"></div>
								</div>
								<input type="text" class="form-control" id="ip_amount" value="0">
							</div>
						</div>

					</div>
					<div class="col-lg col-lg-right">
						<div class="order-block">
							<div class="currency-ico">
								<svg class="svg-ico">
									<use xlink:href="#ico-coins" />
								</svg>
							</div>
							<div class="currency-names">
								<span class="currency-name currency-name-active" data-currency="usd">usd</span>
								<span class="currency-name" data-currency="rur">руб</span>
								<span class="currency-name" data-currency="uah">грн</span>
							</div>
							<div class="currency-price">
								<span class="currency-price-title">Стоимость в месяц:</span>
								<div class="currency-price-wrap">
									<span id="total_price" class="currency-relative" data-usd-price="0.45">0.45</span>
									<span class="currency-symbol">usd</span>
								</div>
							</div>
							<a href="https://my.hosting.energy/billmgr?func=register&amp;redirect=startpage%3Dvhost%26startform%3Dvhost.order.param%26pricelist%3D342%26project%3D1%26period%3D1" class="btn-main">
								Заказать
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="section-additionally">
		<div class="container-fluid container-width">

			<div class="section-title title-block title-center">
				<h2>Дополнительные услуги</h2>
				<span class="title-line"><span class="line-inner"></span></span>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<table class="table_list table_list-1">
						<tbody>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Бесплатный тестовый период:</div>
								</th>
								<td><div class="td-wrap div_wrap">5 дней</div></td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Дополнительно 1 сайт:</div>
								</th>
								<td><div class="td-wrap div_wrap"><span class="currency-relative" data-usd-price="0.02">0.02</span> <span class="currency-symbol">usd</span>/мес</div></td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Дополнительно 1 БД:</div>
								</th>
								<td><div class="td-wrap div_wrap"><span class="currency-relative" data-usd-price="0.02">0.02</span> <span class="currency-symbol">usd</span>/мес</div></td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Дополнительно 1 ГБ диска:</div>
								</th>
								<td><div class="td-wrap div_wrap"><span class="currency-relative" data-usd-price="0.30">0.3</span> <span class="currency-symbol">usd</span>/мес</div></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6">
					<table class="table_list table_list-2">
						<tbody>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Дополнительно 64 МБ оперативной памяти:</div>
								</th>
								<td><div class="td-wrap div_wrap"><span class="currency-relative" data-usd-price="0.15">0.15</span> <span class="currency-symbol">usd</span>/мес</div></td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Дополнительно 1 почтовый ящик:</div>
								</th>
								<td><div class="td-wrap div_wrap"><span class="currency-relative" data-usd-price="0.006">0.01</span> <span class="currency-symbol">usd</span>/мес</div></td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Выделенный IP-адрес:</div>
								</th>
								<td><div class="td-wrap div_wrap"><span class="currency-relative" data-usd-price="1.50">1.5</span> <span class="currency-symbol">usd</span>/мес</div></td>
							</tr>

							<tr>
								<th>
									<svg class="svg-ico ico-theme-2" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<div class="th-wrap div_wrap">Восстановление сайта из нашей резервной копии:</div>
								</th>
								<td><div class="td-wrap div_wrap">бесплатно</div></td>
							</tr>	
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</section>


	<section class="section-buy invers-color invers-parent text-center">
		<div class="container-fluid container-width-sm">
			
			<div class="section-title title-block title-center">
				<h2>Купить хостинг</h2>
				<span class="title-line line-invers"><span class="line-inner"></span></span>
			</div>

			<p>Чтобы купить хостинг, просто нажмите кнопку "Заказать". <br>
			Простая регистрация, мгновенная оплата – и полный доступ в ваших руках!</p>
			
			<a href="#" class="btn-main">Заказать</a>

		</div>
	</section><!--//// Section Name -->

	<section class="section-advantages">
		<div class="container-fluid container-width">
			
			<div class="section-title title-block title-center">
				<h2>Преимущества</h2>
				<span class="title-line"><span class="line-inner"></span></span>
			</div>

			<div class="row slick-base">
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-backup"></use>
							</svg>
						</div>
						<h3>Ежедневный бекап</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-virus"></use>
							</svg>
						</div>
						<h3>Cканирование на вирусы</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-policy"></use>
							</svg>
						</div>
						<h3>Бесплатный SSL Let's Encrypt</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-dollar"></use>
							</svg>
						</div>
						<h3>Возврат средств</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-agile"></use>
							</svg>
						</div>
						<h3>Аптайм</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-ssh"></use>
							</svg>
						</div>
						<h3>SSH</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-php"></use>
							</svg>
						</div>
						<h3>Смена версии PHP</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xlg-3 item">
					<div class="advantages-block block-style-base">
						<div class="ico text-center">
							<svg class="svg-ico ico-theme-1">
								<use xlink:href="#ico-git"></use>
							</svg>
						</div>
						<h3>Git</h3>
						<div class="description bd-rad">
							Недорого и качественно? Да, так бывает! Наши цены и условия самые привлекательные.
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="section-include">
		<div class="container-fluid container-width-md">

			<div class="section-title title-block title-center">
				<h2>Хостинг включает</h2>
				<span class="title-line"><span class="line-inner"></span></span>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<table class="table_list table_list-1 block-style-base">
						<tbody>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									Панель управления ISPmanager Business
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									AntiDDoS
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									SSH
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									MariaDB, phpMyAdmin
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6">
					<table class="table_list table_list-2 block-style-base">
						<tbody>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									Панель управления ISPmanager Business
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									AntiDDoS
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									SSH
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
							<tr>
								<th>
									<svg class="svg-ico ico-theme-3" data-name="ico-flash"><use xlink:href="#ico-flash"></use></svg>
									MariaDB, phpMyAdmin
								</th>
								<td class="ico-td">
									<svg class="svg-ico ico-theme-4">
										<use xlink:href="#ico-confirmation" />
									</svg>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</section>



	<section class="section-services">
		<div class="container-fluid container-width">
			<div class="section-title title-block title-center">
				<h2>Часто задаваемые вопросы</h2>
				<span class="title-line"><span class="line-inner"></span></span>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-10 col-xlg-8">

					<div class="accordion block-style-base" id="accordion">
						<div class="card">
							<button id="heading-1" class="card-header collapsed" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								<strong>1.</strong> Текст вопроса должен быть здесь и может быть длинным								
								<svg class="svg-ico ico-theme-1" viewBox="0 0 640 640">
									<use class="use-collapse-1" xlink:href="#cls-collapse-1" />
									<use class="use-collapse-2" xlink:href="#cls-collapse-2" />
								</svg>

							</button>
							<div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
								<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
								</div>
							</div>
						</div>
						<div class="card">
							<button id="heading-2" class="card-header" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								<strong>2.</strong> Текст вопроса должен быть здесь и может быть длинным
								<svg class="svg-ico ico-theme-1" viewBox="0 0 640 640">
									<use class="use-collapse-1" xlink:href="#cls-collapse-1" />
									<use class="use-collapse-2" xlink:href="#cls-collapse-2" />
								</svg>
							</button>
							<div id="collapse-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
								</div>
							</div>
						</div>
						<div class="card">
							<button id="heading-3" class="card-header" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								<strong>3.</strong> Текст вопроса должен быть здесь и может быть длинным
								<svg class="svg-ico ico-theme-1" viewBox="0 0 640 640">
									<use class="use-collapse-1" xlink:href="#cls-collapse-1" />
									<use class="use-collapse-2" xlink:href="#cls-collapse-2" />
								</svg>
							</button>
							<div id="collapse-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>

					<style>
						.accordion .collapsing {
							position: relative;
							height: 0;
							overflow: hidden;
							transition: height .35s ease;
						}
					</style>
					
				</div>
			</div>

		</div>
	</section>


	<?php include ("footer.php");?>