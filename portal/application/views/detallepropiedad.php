<?php

?>

<?php

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body class="header-1 page-header-1 brand-orange">
    <!-- ====== BEGIN HEADER ====== -->
    <?php include 'header.php' ?>


    <section class="page-header">
	<div class="container">
		<h1 class="page-header-title">Propiedad</h1>
		<ul class="breadcrumb">
			<li><a href="home">Home</a></li>
			<li><a href="propiedades">Propiedad</a></li>
			<li class="active">Propiedad detalle</li>
		</ul>
	</div>
</section>

<!-- ====== CONTACT PAGE CONTENT ====== -->

    <section class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Content -->
				<div id="content">
					<!-- Property Single Detail / Description -->
					<article class="post property-item">
						<div class="post-property-header">
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<h3 class="post-title"><a href="#">Eos laudantium dicta</a></h3>
								</div>
								<div class="col-md-4 col-sm-4 text-right">
									<span class="property-price">$ 17.969</span>
								</div>
							</div>
							<div class="property-address">
								Dirección
							</div>
							<div class="property-label">
								<a href="#" class="property-label__type">En venta</a>
							</div>
						</div>
						
						<!-- Property Gallery Slider -->
						<div class="property-image">
							<div id="property-slider" class="property-slider">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_1.jpg" alt="Property Photo 1">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_2.jpg" alt="Property Photo 2">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_4.jpg" alt="Property Photo 4">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_5.jpg" alt="Property Photo 5">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_3.jpg" alt="Property Photo 6">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_2.jpg" alt="Property Photo 7">
							</div>
							<!-- Property Gallery Slider Navigation -->
							<div id="property-slider-nav" class="property-slider-nav">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_1.jpg" alt="Property Photo 1">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_2.jpg" alt="Property Photo 2">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_4.jpg" alt="Property Photo 4">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_5.jpg" alt="Property Photo 5">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_3.jpg" alt="Property Photo 6">
								<img src="<?php echo $this->config->item('base_url');?>portal/assets\images\img_slider_2.jpg" alt="Property Photo 7">
							</div>
						</div>
						<!-- Property facility Detail -->
						<div class="property-footer">
							<div class="item-wide"><span class="fi flaticon-wide"></span> 223 m2</div>
							<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
							<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
							<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
							<div class="item-comment"><span class="fa fa-comments-o"></span> No Comments</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget erat nec mi tempor elementum. Morbi enim orci, pharetra sed sem eu, imperdiet molestie libero. Donec pretium eros id tellus lobortis, sed maximus odio pulvinar. Nunc tristique nunc sit amet lectus ultrices, in blandit dolor placerat. In efficitur maximus rutrum. Proin porta purus ante, nec eleifend odio consectetur at. Nulla commodo nisi magna, ut feugiat nunc efficitur at. Mauris dignissim imperdiet velit, id laoreet orci tempus eget. Vivamus id ligula fermentum, imperdiet enim a, consectetur sapien. Duis efficitur dapibus congue.</p>
						<p>Etiam et magna cursus, semper leo ullamcorper, congue felis. Nullam bibendum massa ut sem aliquam dignissim. magna, ut feugiat nunc efficitur at. Mauris dignissim imperdiet velit, id laoreet orci tempus eget. VivamNullam nisi urna, congue suscipit faucibus sed, congue vitae nibh. Donec est mauris, commodo vel risus ut, euismod efficitur arcu. Nam turpis lacus, rhoncus ut congue sit amet, tincidunt quis velit. Nam nec augue facilisis, fermentum leo quis, elementum tellus. Curabitur sagittis erat nec mauris pharetra, nec tempus ligula blandit. Cras efficitur vel nibh sed accumsan.</p>
						<!-- The Space Section -->
						<hr>
						<div class="row">
							<div class="col-md-3 col-sm-3"><h3 class="heading-title">Espacio</h3></div>
							<div class="col-md-9 col-sm-9">
								<ul class="feature-list">
									<li>Habitantes: <strong>2</strong></li>
									<li>Baños: <strong>1</strong></li>
									<li>Habitaciones: <strong>1</strong></li>
								</ul>
							</div>
						</div>
						<!-- Facilities Section -->
						<hr>
						<div class="row">
							<div class="col-md-3 col-sm-3"><h3 class="heading-title">Caracteristicas</h3></div>
							<div class="col-md-9 col-sm-9">
								<ul class="feature-list">
									<li><i class="fa fa-cutlery"></i> Cocina Amoblada</li>
									<li><i class="fa fa-wifi"></i> Conexion Internet</li>
									<li><i class="fa fa-tv"></i> conexion a Cable TV</li>
									<li><i class="fa fa-product-hunt"></i> Estacionamiento</li>
								</ul>
							</div>
						</div>
						
					</article>
					
					<!-- Property Location / Map -->
					<div class="property-location widget panel-box">
						<div class="panel-header">
							<h3 class="panel-title">Ubicación propiedad</h3>
						</div>
						<div class="panel-body">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">

				<!-- Sidebar -->
				<div id="sidebar">
					<!-- widget section Contact Our Agent -->
					<div class="widget">
						<!-- Panel Box -->
						<div class="panel-box">
							<!-- Panel Header / Title -->
							<div class="panel-header">
								<h3 class="panel-title">Contacte Nuestro Agente</h3>
							</div>
							<!-- Panel Body -->
							<div class="panel-body">
								<div class="profile-box">
									<div class="profile-header">
										<div class="profile-img"><img src="assets\images\img_author_1.jpg" alt="Nombre"></div>
										<h5 class="profile-title">Nombre</h5>
									</div>
									<ul class="profile-contact">
										<li><i class="fa fa-envelope"></i> <a href="#">hola@hola.com</a></li>
										<li><i class="fa fa-phone"></i> <a href="#">1300 123 123</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- widget section Message -->
					<div class="widget">
						<div class="panel-box">
							<!-- Panel Header / Title -->
							<div class="panel-header">
								<h3 class="panel-title">Déjenos un mensaje</h3>
							</div>
							<!-- Panel Body -->
							<div class="panel-body">
								<form action="#">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nombre">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<textarea name="message" id="messages" cols="30" rows="3" class="form-control" placeholder="Mensaje"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn-submit btn-primary btn" value="Enviar">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





    <?php include 'footer.php' ?>


    <?php include 'foot.php' ?>
      
        <script>
            function initMap()
            {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    scrollwheel: false,
                    center: new google.maps.LatLng(-33.440616, -70.6514212),
                });

                var iconBase = 'assets/images/';
                var icons = {
                    property: {
                        icon: iconBase + 'icon_marker.png'
                    },
                };

                function addMarker(feature)
                {
                    var marker = new google.maps.Marker({
                        position: feature.position,
                        icon: icons[feature.type].icon,
                        map: map
                    });
                }

                //var features = [
                //    {
                //        position: new google.maps.LatLng(-33.440616, -70.6514212),
                //        type: 'property'
                //    }
                //];

                var feature = {
                    position: new google.maps.LatLng(-33.440616, -70.6514212),
                    type: 'property'
                };

                addMarker(feature);

                //for (var i = 0, feature; feature = features[i]; i++)
                //{
                //    addMarker(feature);
                //}
            }

            // Lightbox for Floor Plans
            $(document).ready(function ()
            {
                $('.popup-gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function (item)
                        {
                            return item.el.attr('title');
                        }
                    }
                });
            });
	</script>
      <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0DaKGlV-AAL09UAREeyUD_DOgEEyLwnU&callback=initMap"></script>
</body>
</html>


