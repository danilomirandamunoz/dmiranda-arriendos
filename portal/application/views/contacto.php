<?php

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body class="header-1 page-header-1  brand-orange">
    <!-- ====== BEGIN HEADER ====== -->
    <?php include 'header.php' ?>


    <section class="page-header">
	<div class="container">
		<h1 class="page-header-title">Contacto</h1>
		<ul class="breadcrumb">
			<li><a href="home">Home</a></li>
			<li class="active">Contacto</li>
		</ul>
	</div>
</section>

<!-- ====== CONTACT PAGE CONTENT ====== -->
<section class="page-section">
	<div class="container">
		<div id="content">

			<!-- Contact Panel Icon Section -->
			<section class="section-row col-merge">
				<div class="row">
					<div class="col-md-4">
						<!-- Panel Box Icon -->
						<div class="panel-box icon-box">
							<span class="icon-item"><i class="fa fa-home"></i></span>
							<h3 class="icon-title">Dirección</h3>
							<p class="icon-description">direccion n° 34 <br /> comuna, región</p>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Panel Box Icon -->
						<div class="panel-box icon-box">
							<span class="icon-item"><i class="fa fa-phone"></i></span>
							<h3 class="icon-title">Teléfono</h3>
							<p class="icon-description">+5698574589<br>+5695054875</p>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Panel Box Icon -->
						<div class="panel-box icon-box">
						<span class="icon-item"><i class="fa fa-paper-plane"></i></span>
							<h3 class="icon-title">Email</h3>
							<p class="icon-description">prueba@prueba.cl<br>prueba@prueba.cl</p>
						</div>
					</div>
				</div>
			</section>	

			<!-- Google Maps Location Section -->
			<section class="section-row">
				<div class="panel-box">
					<div class="panel-header">
						<h3 class="panel-title">Google Maps</h3>
					</div>
					<div class="panel-body">
						<div id="map"></div>
					</div>
				</div>
			</section>

			<!-- Messages Form Section -->
			<section class="section-row">
				<div class="panel-box">
					<div class="panel-header">
						<h3 class="panel-title">Déjenos un Mensaje</h3>
					</div>
					<div class="panel-body">
						<form action="#">
							<div class="row">
							<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<textarea name="message" id="messages" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn-submit btn-primary btn" value="Enviar">
							</div>
						</form>
					</div>
				</div>
			</section>
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
