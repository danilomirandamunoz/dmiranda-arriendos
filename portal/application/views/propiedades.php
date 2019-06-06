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
            <h1 class="page-header-title">Propiedades</h1>
            <ul class="breadcrumb">
                <li><a href="home">Home</a></li>
                <li class="active">Propiedades</li>
            </ul>
        </div>
    </section>
<section id="property-search-result" class="archive-property">
	<!-- Tabmenu Container / Default Bootstrap Structure -->
	<div class="search-tabmenu">
		<div class="tabmenu-header">
			<div class="container">
				<!-- Tabmenu Navigation -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i> Búsqueda</a></li>
				</ul>
			</div>
		</div>
		<!-- Tabmenu Body / Content -->
		<div class="tabmenu-body">
			<div class="container">
				<div class="tab-content">
					<!-- Tabmenu Content 1 / Property For SALE -->
					<div role="tabpanel" class="tab-pane active" id="for-sale">
						<form action="#">
							<div class="form-body">
								<!-- Property for Sale Content Row 1 -->
								<div class="row">
                                            <div class="col-md-3 form-group">
                                                <label for="sale-location">Operación</label>
                                                <select class="form-control" id="selOperacion">
                                                    <option>-</option>
                                                    <option>Todas</option>
                                                    <option>Arrendar</option>
                                                    <option>Comprar</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="sale-type">Tipo Propiedad</label>
                                                <select class="form-control" name="categoria">
                                                    <option>-</option>
                                                    <option value="0">Todos</option>
                                                    <option value="16">Casas</option>
                                                    <option value="4">Locales Comerciales</option>
                                                    <option value="3">Oficinas</option>
                                                    <option value="25">Parcelas</option>
                                                    <option value="33">Terrenos Comerciales</option>

                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="sale-bedroom">Región</label>
                                                <select class="form-control" id="sale-bedroom">
                                                    <option>-</option>
                                                    <option>Todas</option>
                                                    <option>
                                                    Metropolitana
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="sale-bathroom">Comuna</label>
                                                <select class="form-control" id="sale-bathroom">
                                                    <option>-</option>
                                                    <option>Todas</option>
                                                    <option>
                                                    Buin
												<option>
                                                    Paine
												<option>
                                                    Santiago Centro
                                                </select>
                                            </div>
                                        </div>
								<div class="submit-box">
									<button class="btn btn-primary pull-right btn-submit" type="submit"><i class="fa fa-search"></i> Búsqueda</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ====== PAGE CONTENT ====== -->
	<div class="page-section" style="padding: 25px 0 !important;">
		<div class="container">
			
			<div class="panel filter-panel">
				<div class="panel-body">
					<h4 class="filter-title pull-left">60 Propiedades Encontradas</h4>
					<form action="#" class="form-inline pull-right">
						<div class="form-group">
							<label>Sort By:</label>
							<select class="form-control">
								<option value="1">Menor Precio
								<option value="2">Mayor Precio
							</select>
						</div>
					</form>
				</div>
			</div>

			<div class="property-list archive-flex archive-with-footer">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
						<!-- Property Item -->
						<div class="property-item">
							<div class="property-heading">
								<span class="item-price">$ 550.000.000</span>
								<a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalle <i class="fi flaticon-detail"></i></a>
							</div>
							<div class="img-box">
								<div class="property-label">
									<a href="#" class="property-label__type">En Venta</a>
								</div>
								<a href="propiedad/detalle/Propiedad_1" class="img-box__image"><img src="<?php echo $this->config->item('base_url');?>portal/assets\images\index_5_property_1.png" alt="Property" class="img-responsive"></a>
							</div>
							<div class="property-content">
								<a href="single-property.htm" class="property-title">Eos laudantium dicta</a>
								<div class="property-address">
									dirección
								</div>
								<div class="property-footer">
									<div class="item-wide"><span class="fi flaticon-wide"></span> 530</div>
									<div class="item-room"><span class="fi flaticon-room"></span> 4</div>
									<div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
									<div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="pagination">
				<a href="#" class="prev"></a>
				<span class="current">1</span>
				<a href="#" class="page">2</a>
				<a href="#" class="page">3</a>
				<a href="#" class="page">4</a>
				<a href="#" class="page">5</a>
				<a href="#" class="next"></a>
			</div>

		</div>
	</div>

</section>

 <?php include 'footer.php' ?>
    <?php include 'foot.php' ?>
</body>
</html>
