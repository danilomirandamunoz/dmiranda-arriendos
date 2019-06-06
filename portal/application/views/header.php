<?php
?>

<header id="header">

		<!-- Topbar Header Varian 1 -->
		<div class="topbar-1">
			<!-- Topbar Header Varian 1 for Desktop View-->
			<nav class="topbar topbar-varian-1 desktop-topbar">
				<div class="container">
					<div class="topbar-item">
						<span class="item-icon fi flaticon-address"></span>
						<p class="item-text">Dirección Oficina</p>
					</div>
					<div class="topbar-item">
						<span class="item-icon fi flaticon-clock"></span>
						<p class="item-text">Lunes-Viernes : 9:00 AM a 7:00 PM <br>Sabado, Domingo : Cerrado</p>
					</div>
					<div class="topbar-item">
						<span class="item-icon fi flaticon-phone"></span>
						<p class="item-text">(+569) 6098 3654 <br>prueba@prueba.cl</p>
					</div>
				</div>
			</nav>

			<!-- Topbar Header Varian 1 for Mobile View-->
			<nav class="topbar topbar-varian-1 mobile-topbar">
				<div class="slider slide-topbar">
					<div>
						<div class="topbar-item">
							<span class="item-icon fi flaticon-address"></span>
							<p class="item-text">Dirección Oficina</p>
						</div>
					</div>
					<div>
						<div class="topbar-item">
							<span class="item-icon fi flaticon-clock"></span>
							<p class="item-text">Lunes-Viernes : 9:00 AM a 7:00 PM <br>Sabado, Domingo : Cerrado</p>
						</div>
					</div>
					<div>
						<div class="topbar-item">
							<span class="item-icon fi flaticon-phone"></span>
							<p class="item-text">(+569) 6098 3654 <br>prueba@prueba.cl</p>
						</div>
					</div>
				</div>
			</nav>
		</div>


		<!-- Main Menu Header -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Navbar Brand -->
				<div class="navbar-header">
					<a href="<?php echo $this->config->item('base_url');?>portal/home" id="navbar-brand" class="navbar-brand"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\logo_corredora_1.png"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Navbar Menu -->
				<nav id="navbar" class="navbar navbar-right navbar-collapse collapse">
					<ul class="nav navbar-nav">

						<!-- Dropdown Menu -->
						<li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/home">Home</a>
						</li>
                        <li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/propiedades">Propiedades</a>
						</li>
                        <li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/quienessomos">Quienes Somos</a>
						</li>
                        <li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/contacto">Contacto</a>
						</li>
						
						<!-- Dropdown Menu -->
						<!--<li class="dropdown">
							<a>Properties</a>
							<ul class="dropdown-menu">
								<li><a href="archive-property.htm">Archive Properties</a></li>
								<li><a href="single-property.htm">Single Properties</a></li>
								<li><a href="property-search-result.htm">Property Search Results 1</a></li>
								<li><a href="property-search-result-2.htm">Property Search Results 2</a></li>
								<li><a href="compare.htm">Property Compare</a></li>
								<li><a href="new-booking.htm">Property Booking</a></li>
							</ul>
						</li>

		
						<li class="dropdown">
							<a>Agent</a>
							<ul class="dropdown-menu">
								<li><a href="archive-agent.htm">Archive Agent</a></li>
								<li><a href="single-agent.htm">Single Agent</a></li>
							</ul>
						</li>

		
						<li class="dropdown">
							<a>Blog</a>
							<ul class="dropdown-menu">
								<li><a href="archive-blog.htm">Archive Blog</a></li>
								<li><a href="single-blog.htm">Single Blog</a></li>
							</ul>
						</li>

		
						<li class="dropdown">
							<a>Other Pages</a>
							<ul class="dropdown-menu">
								<li><a href="typography.htm">Typography</a></li>
								<li><a href="404.htm">Error 404</a></li>
								<li><a href="countdown.htm">Countdown Event</a></li>
								<li><a href="contact.htm">Contact</a></li>
								<li><a href="about.htm">About Us</a></li>
							</ul>
						</li>

	
						<li class="dropdown multi-column">
			
							<a>All Pages</a>

							<ul class="dropdown-menu">
								<li class="col-lg-3">
									<a>Homepage</a>
									<ul class="submenu">
										<li><a href="index-property-1.htm">Homepage Property 1</a></li>
										<li><a href="index-property-2.htm">Homepage Property 2</a></li>
										<li><a href="index-property-3.htm">Homepage Property 3</a></li>
										<li><a href="index-booking-1.htm">Homepage Booking 1</a></li>
										<li><a href="index-booking-2.htm">Homepage Booking 2</a></li>
										<li><a href="index-booking-3.htm">Homepage Booking 3</a></li>
									</ul>
								</li>
								<li class="col-lg-3">
									<a>Property Pages</a>
									<ul class="submenu">
										<li><a href="archive-property.htm">Archive Properties</a></li>
										<li><a href="single-property.htm">Single Properties</a></li>
										<li><a href="property-search-result.htm">Property Search Results 1</a></li>
										<li><a href="property-search-result-2.htm">Property Search Results 2</a></li>
										<li><a href="compare.htm">Property Compare</a></li>
										<li><a href="new-booking.htm">Property Booking</a></li>
										<li><a href="archive-agent.htm">Archive Agent</a></li>
										<li><a href="single-agent.htm">Single Agent</a></li>
									</ul>
								</li>
								<li class="col-lg-3">
									<a>Blog Pages</a>
									<ul class="submenu">
										<li><a href="archive-blog.htm">Archive Blog</a></li>
										<li><a href="single-blog.htm">Single Blog</a></li>
									</ul>
								</li>
								<li class="col-lg-3">
									<a>Other Pages</a>
									<ul class="submenu">
										<li><a href="typography.htm">Typography</a></li>
										<li><a href="404.htm">Error 404</a></li>
										<li><a href="countdown.htm">Countdown Event</a></li>
										<li><a href="contact.htm">Contact</a></li>
										<li><a href="about.htm">About Us</a></li>
									</ul>
								</li>
							</ul>
						</li>-->
					</ul>

					<div class="topbar-2">
		
						<div class="topbar-varian-2 mobile-topbar">
							<ul>
								<li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/home">Home</a>
						</li>
                        <li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/propiedades">Propiedades</a>
						</li>
                        <li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/quienessomos">Quienes Somos</a>
						</li>
                        <li class="">
							<a href="<?php echo $this->config->item('base_url');?>portal/contacto">Contacto</a>
						</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</nav>
	</header>