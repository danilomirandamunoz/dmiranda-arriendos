<?php






?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body class="header-1 page-header-1 brand-orange">
    <!-- ====== BEGIN HEADER ====== -->
    <?php include 'header.php' ?>
    <!-- ====== END HEADER ====== -->

    <!-- ====== PAGE BUILDER TEMPLATE ====== -->
    <section id="page-builder" class="page-section">
        <!-- HERO IMAGE WITH SEARCH FORM -->
        <div class="row tpb-row" style="background-image: url(assets/images/home_hero_image_1.jpg); padding-top: 144px; padding-bottom: 168px; margin: 0; background-size: cover; background-position: center;">
            <div class="tpb tpb-property_simple_search col-md-12">
                <div class="container">
                    <!-- Tabmenu Container / Default Bootstrap Structure -->
                    <div class="search-tabmenu">
                        <!-- Tabmenu Navigation -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i>Búsqueda</a></li>
                        </ul>
                        <!-- Tabmenu Body / Content -->
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


                                    </div>
                                    <!-- Property for Sale Submit Button -->
                                    <a href="propiedades" class="btn btn-primary pull-right btn-submit" type="button"><i class="fa fa-search"></i>Buscar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="best-offer" class="page-section">
        <div class="container">

            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <h2 class="section-title">Ofertas Destacadas</h2>
                <!-- Slider Control -->
                <div class="slide-control">
                    <button id="slide-left" class="slide-left"><i class="fa fa-angle-left"></i></button>
                    <button id="slide-right" class="slide-right"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <div id="product-slider" class="row product-slider">
                <div class="col-md-4 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">$ 545.000</span>
                            <a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalles <i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <!--		<a href="#" class="property-label__type">House For Sale</a>
							<a href="#" class="property-label__status">Available</a>-->
                            </div>
                            <!--<a href="#" class="btn-compare" title="Compare Property"><i class="fa fa-exchange"></i></a>-->
                            <a href="single-property.htm" class="img-box__image">
                                <img src="assets\images\post_1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.htm" class="property-title">Propiedad 1</a>
                            <div class="property-address">
                                dirección propiedad
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span>120 m2</div>
                                <div class="item-room"><span class="fi flaticon-room"></span>4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span>3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span>1</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">$ 545.000</span>
                            <a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalles <i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <!--		<a href="#" class="property-label__type">House For Sale</a>
							<a href="#" class="property-label__status">Available</a>-->
                            </div>
                            <!--<a href="#" class="btn-compare" title="Compare Property"><i class="fa fa-exchange"></i></a>-->
                            <a href="single-property.htm" class="img-box__image">
                                <img src="assets\images\post_1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.htm" class="property-title">Propiedad 1</a>
                            <div class="property-address">
                                dirección propiedad
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span>120 m2</div>
                                <div class="item-room"><span class="fi flaticon-room"></span>4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span>3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span>1</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">$ 545.000</span>
                            <a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalles <i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <!--		<a href="#" class="property-label__type">House For Sale</a>
							<a href="#" class="property-label__status">Available</a>-->
                            </div>
                            <!--<a href="#" class="btn-compare" title="Compare Property"><i class="fa fa-exchange"></i></a>-->
                            <a href="single-property.htm" class="img-box__image">
                                <img src="assets\images\post_1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.htm" class="property-title">Propiedad 1</a>
                            <div class="property-address">
                                dirección propiedad
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span>120 m2</div>
                                <div class="item-room"><span class="fi flaticon-room"></span>4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span>3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span>1</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">$ 545.000</span>
                            <a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalles <i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <!--		<a href="#" class="property-label__type">House For Sale</a>
							<a href="#" class="property-label__status">Available</a>-->
                            </div>
                            <!--<a href="#" class="btn-compare" title="Compare Property"><i class="fa fa-exchange"></i></a>-->
                            <a href="single-property.htm" class="img-box__image">
                                <img src="assets\images\post_1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.htm" class="property-title">Propiedad 1</a>
                            <div class="property-address">
                                dirección propiedad
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span>120 m2</div>
                                <div class="item-room"><span class="fi flaticon-room"></span>4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span>3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span>1</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">$ 545.000</span>
                            <a href="propiedad/detalle/Propiedad_1" class="item-detail btn">Detalles <i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <!--		<a href="#" class="property-label__type">House For Sale</a>
							<a href="#" class="property-label__status">Available</a>-->
                            </div>
                            <!--<a href="#" class="btn-compare" title="Compare Property"><i class="fa fa-exchange"></i></a>-->
                            <a href="single-property.htm" class="img-box__image">
                                <img src="assets\images\post_1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.htm" class="property-title">Propiedad 1</a>
                            <div class="property-address">
                                dirección propiedad
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span>120 m2</div>
                                <div class="item-room"><span class="fi flaticon-room"></span>4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span>3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span>1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="page-section" style="padding: 0 0!important;">
        <div class="container">
            <!-- Section Title -->
            <div class="section-header header-column">
                <h2 class="section-title">Titulo</h2>
                <!-- Slider Control -->

            </div>
            <div class="row">
                <!-- Services Content -->
                <div class="col-md-12">
                    <div class="services-content">
                        <ul class="services-item row">
                            <!-- Services Item -->
                            <li class="col-md-3 col-sm-6">
                                <div class="services-icon"><i class="fa fa-legal"></i></div>
                                <div class="services-description">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at aliquam justo. Proin pharetra enim a commodo suscipit.</p>
                                </div>
                            </li>
                            <!-- Services Item -->
                            <li class="col-md-3 col-sm-6">
                                <div class="services-icon"><i class="fa fa-shield"></i></div>
                                <div class="services-description">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at aliquam justo. Proin pharetra enim a commodo suscipit.</p>
                                </div>
                            </li>
                            <!-- Services Item -->
                            <li class="col-md-3 col-sm-6">
                                <div class="services-icon"><i class="fa fa-support"></i></div>
                                <div class="services-description">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at aliquam justo. Proin pharetra enim a commodo suscipit.</p>
                                </div>
                            </li>
                            <!-- Services Item -->
                            <li class="col-md-3 col-sm-6">
                                <div class="services-icon"><i class="fa fa-star"></i></div>
                                <div class="services-description">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at aliquam justo. Proin pharetra enim a commodo suscipit.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>
    <?php include 'foot.php' ?>
</body>
</html>
