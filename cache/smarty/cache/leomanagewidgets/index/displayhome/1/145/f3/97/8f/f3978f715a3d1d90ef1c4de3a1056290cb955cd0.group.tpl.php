<?php /*%%SmartyHeaderCode:1024557ab51a509a5e5-06170145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3978f715a3d1d90ef1c4de3a1056290cb955cd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\leomanagewidgets\\views\\widgets\\group.tpl',
      1 => 1470845278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1024557ab51a509a5e5-06170145',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52c0a305d3_12090872',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52c0a305d3_12090872')) {function content_57ab52c0a305d3_12090872($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-9 col-md-9 col-sm-9 col-xs-12 col-sp-12"
                            >
                                                                                                
  

    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">
                <div id="carousel-example-generic">
                    <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                
            </ol>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                              <div class="item active " data-slide-number="0">
                                                          <img src="/tienda/themes/ap_office/img/modules/leotempcp/image/slide3.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                           
                    </div>
                </div>
                              <div class="item  " data-slide-number="1">
                                                          <img src="/tienda/themes/ap_office/img/modules/leotempcp/image/slide4.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                           
                    </div>
                </div>
                              <div class="item  " data-slide-number="2">
                                                          <img src="/tienda/themes/ap_office/img/modules/leotempcp/image/slide1.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                          <h3>
                                                  Build your own bundle
                                              </h3>
                                        <p>Save up to $50</p>   
                    </div>
                </div>
                              <div class="item  " data-slide-number="3">
                                                          <img src="/tienda/themes/ap_office/img/modules/leotempcp/image/slide2.jpg" alt="" style="width:857px;height:450px" class="img-responsive">
                                       
                    <div class="carousel-caption">
                                          <h3>
                                                  Build your own bundle
                                              </h3>
                                        <p>Save up to $50</p>   
                    </div>
                </div>
                                      </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="fa fa-angle-right"></span>
            </a>
                    </div>
                </div>
          <!-- Controls -->

        </div>
   
    <!--/main slider carousel-->
</div>

  
<script type="text/javascript">

$('#myCarousel').carousel({
    interval: 6000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});

</script>                                                                                    </div>
                                                                                <div class="widget col-lg-3 col-md-3 col-sm-3 col-xs-12 col-sp-12 nopadding noborder custom_slide hidden-sp hidden-xs"
                            >
                                                                                                <div class="widget-html">
		<div class="block_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/tienda/themes/ap_office/img/modules/leomanagewidgets/img-banner-1.jpg" alt="" /></a></div>
<div class="effect"><a href="#"><img class="img-responsive" src="/tienda/themes/ap_office/img/modules/leomanagewidgets/img-banner-2.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<div class="products_block exclusive leomanagerwidgets" >
		<h4 class="page-subheading">
		<span>Mejor vendido</span>
	</h4>
		<div class="block_content">	
					<div class="carousel slide" id="leoproductcarousel9388">
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/blusas/2-blusa.html" data-link="http://localhost/tienda/blusas/2-blusa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/blusas/2-blusa.html" data-id-product="2" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/blusas/2-blusa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							31,32 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/blusas/2-blusa.html" title="Blusa" itemprop="url" >
					Blusa
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/blusas/2-blusa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" data-link="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" data-id-product="3" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							30,16 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" data-link="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
					Camiseta efecto desteñido de manga corta
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							35,38 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





			</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#leoproductcarousel9388').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: 0
        });
    });
});
</script>
                                                                                    </div>
                                                                                <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12 nopadding noborder nomargin"
                            >
                                                                                                <div class="widget-html">
		<div class="block_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/tienda/themes/ap_office/img/modules/leomanagewidgets/home1.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12 nopadding noborder nomargin"
                            >
                                                                                                <div class="widget-html">
		<div class="block_content">
		<div class="effect"><a href="#"><img class="img-responsive" src="/tienda/themes/ap_office/img/modules/leomanagewidgets/home2.jpg" alt="" /></a></div>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<!-- MODULE Block specials -->
<div id="leoproducttab3149" class="products_block exclusive">
		<div class="block_content">			            
			<ul id="productTabs" class="nav nav-pills">
			  	
              <li><a href="#leoproducttab3149special" data-toggle="tab">Especial</a></li>
			                 	
              <li><a href="#leoproducttab3149newproducts" data-toggle="tab"><span></span>Nuevas adquisiciones</a></li>
			  			  			  	
              <li><a href="#leoproducttab3149featured" data-toggle="tab"><span></span>Productos destacados</a></li>
			              </ul>
			
            <div id="product_tab_content"><div class="product_tab_content tab-content">
			   	
					<div class="tab-pane" id="leoproducttab3149special">
										<div class="carousel slide" id="leoproducttab3149-special">
		 
	 	<a class="carousel-control left" href="#leoproducttab3149-special"   data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#leoproducttab3149-special"  data-slide="next">&rsaquo;</a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="8"></div>
			<a class="product_img_link"	href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" title="Tarjeta Madre ASROCK FM2A58M-VG3+" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/24-home_default/tarjeta-madre-asrock-fm2a58m-vg3.jpg" alt="Tarjeta Madre ASROCK FM2A58M-VG3+" title="Tarjeta Madre ASROCK FM2A58M-VG3+" itemprop="image" />
				<span class="product-additional" data-idproduct="8"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" data-link="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" data-id-product="8" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							1 138,40 $						</span>
													
							<span class="old-price product-price">
								1 148,40 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" title="Tarjeta Madre ASROCK FM2A58M-VG3+" itemprop="url" >
					Tarjeta Madre ASROCK FM2A58M-VG3+
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Tarjeta Madre para microprocesador AMD FM2
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=8&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="8" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="9"></div>
			<a class="product_img_link"	href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html" title="Procesador AMD APU A8 7600 AD7600YBJABOX" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/25-home_default/procesador-amd-apu-a8-7600-ad7600ybjabox.jpg" alt="Procesador AMD APU A8 7600 AD7600YBJABOX" title="Procesador AMD APU A8 7600 AD7600YBJABOX" itemprop="image" />
				<span class="product-additional" data-idproduct="9"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html" data-link="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html" data-id-product="9" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							2 003,27 $						</span>
													
							<span class="old-price product-price">
								2 003,32 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html" title="Procesador AMD APU A8 7600 AD7600YBJABOX" itemprop="url" >
					Procesador AMD APU A8 7600 AD7600YBJABOX
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Procesador AMD APU A8 7600 AD7600YBJABOX
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=9&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="9" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/procesador/9-procesador-amd-apu-a8-7600-ad7600ybjabox.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
				<div class="item ">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="10"></div>
			<a class="product_img_link"	href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" title="Unidad de Disco Marca ASUS DRW-24F1ST" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/26-home_default/unidad-de-disco-marca-asus-drw-24f1st.jpg" alt="Unidad de Disco Marca ASUS DRW-24F1ST" title="Unidad de Disco Marca ASUS DRW-24F1ST" itemprop="image" />
				<span class="product-additional" data-idproduct="10"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" data-link="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" data-id-product="10" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							345,05 $						</span>
													
							<span class="old-price product-price">
								345,10 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" title="Unidad de Disco Marca ASUS DRW-24F1ST" itemprop="url" >
					Unidad de Disco Marca ASUS DRW-24F1ST
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Quemador DVD ASUS DRW-24F1ST
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=10&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="10" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="11"></div>
			<a class="product_img_link"	href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html" title="Gabinete para PC AKRON P501 ACTECK" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/27-home_default/gabinete-para-pc-akron-p501-acteck.jpg" alt="Gabinete para PC AKRON P501 ACTECK" title="Gabinete para PC AKRON P501 ACTECK" itemprop="image" />
				<span class="product-additional" data-idproduct="11"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html" data-link="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html" data-id-product="11" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							748,15 $						</span>
													
							<span class="old-price product-price">
								748,20 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html" title="Gabinete para PC AKRON P501 ACTECK" itemprop="url" >
					Gabinete para PC AKRON P501 ACTECK
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Gabinete para PC AKRON P501 ACTECK
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=11&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="11" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/gabinete/11-gabinete-para-pc-akron-p501-acteck.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="12"></div>
			<a class="product_img_link"	href="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html" title="Monitor LG de 18.5&quot; 1366 x 768" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/28-home_default/monitor-lg-de-185-1366-x-768.jpg" alt="Monitor LG de 18.5&quot; 1366 x 768" title="Monitor LG de 18.5&quot; 1366 x 768" itemprop="image" />
				<span class="product-additional" data-idproduct="12"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html" data-link="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html" data-id-product="12" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							1 734,15 $						</span>
													
							<span class="old-price product-price">
								1 734,20 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html" title="Monitor LG de 18.5&quot; 1366 x 768" itemprop="url" >
					Monitor LG de 18.5&quot; 1366 x 768
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Monitor LG de 18.5" 1366 x 768
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																			<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=12&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="12" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/monitor/12-monitor-lg-de-185-1366-x-768.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="13"></div>
			<a class="product_img_link"	href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html" title="Memoria RAM HYPER X FURY HX318C10F/8" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/29-home_default/memoria-ram-hyper-x-fury-hx318c10f8.jpg" alt="Memoria RAM HYPER X FURY HX318C10F/8" title="Memoria RAM HYPER X FURY HX318C10F/8" itemprop="image" />
				<span class="product-additional" data-idproduct="13"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html" data-link="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html" data-id-product="13" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							980,87 $						</span>
													
							<span class="old-price product-price">
								981,36 $
							</span>
							
															<span class="price-percent-reduction">-0.05%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html" title="Memoria RAM HYPER X FURY HX318C10F/8" itemprop="url" >
					Memoria RAM HYPER X FURY HX318C10F/8
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Memoria RAM HYPER X FURY HX318C10F/8
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								Última oportunidad							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=13&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="13" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/memoria-ram/13-memoria-ram-hyper-x-fury-hx318c10f8.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





	              </div>
			   			  		  
              <div class="tab-pane" id="leoproducttab3149newproducts">
					 					<div class="carousel slide" id="leoproducttab3149-newproducts">
		 
	 	<a class="carousel-control left" href="#leoproducttab3149-newproducts"   data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#leoproducttab3149-newproducts"  data-slide="next">&rsaquo;</a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" data-link="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
					Camiseta efecto desteñido de manga corta
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/blusas/2-blusa.html" data-link="http://localhost/tienda/blusas/2-blusa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/blusas/2-blusa.html" data-id-product="2" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/blusas/2-blusa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							31,32 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/blusas/2-blusa.html" title="Blusa" itemprop="url" >
					Blusa
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/blusas/2-blusa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" data-link="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" data-id-product="3" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							30,16 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/10-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" data-link="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" data-id-product="4" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							59,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=4&amp;ipa=16&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
				<div class="item ">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							35,38 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="8"></div>
			<a class="product_img_link"	href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" title="Tarjeta Madre ASROCK FM2A58M-VG3+" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/24-home_default/tarjeta-madre-asrock-fm2a58m-vg3.jpg" alt="Tarjeta Madre ASROCK FM2A58M-VG3+" title="Tarjeta Madre ASROCK FM2A58M-VG3+" itemprop="image" />
				<span class="product-additional" data-idproduct="8"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" data-link="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" data-id-product="8" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							1 138,40 $						</span>
													
							<span class="old-price product-price">
								1 148,40 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" title="Tarjeta Madre ASROCK FM2A58M-VG3+" itemprop="url" >
					Tarjeta Madre ASROCK FM2A58M-VG3+
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Tarjeta Madre para microprocesador AMD FM2
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=8&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="8" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/tarjeta/8-tarjeta-madre-asrock-fm2a58m-vg3.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





              </div>
			 	
			 	
			 		  
              <div class="tab-pane" id="leoproducttab3149featured">
					 					<div class="carousel slide" id="leoproducttab3149-featured">
		 
	 	<a class="carousel-control left" href="#leoproducttab3149-featured"   data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#leoproducttab3149-featured"  data-slide="next">&rsaquo;</a>
	
	<div class="carousel-inner">
							<div class="item active">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/1-home_default/camiseta-destenida-manga-corta.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" data-link="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" data-id-product="1" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
					Camiseta efecto desteñido de manga corta
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=1&amp;ipa=1&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/camisetas/1-camiseta-destenida-manga-corta.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda/blusas/2-blusa.html" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/7-home_default/blusa.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/blusas/2-blusa.html" data-link="http://localhost/tienda/blusas/2-blusa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/blusas/2-blusa.html" data-id-product="2" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/blusas/2-blusa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							31,32 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/blusas/2-blusa.html" title="Blusa" itemprop="url" >
					Blusa
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=2&amp;ipa=7&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/blusas/2-blusa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/8-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" data-link="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" data-id-product="3" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							30,16 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=3&amp;ipa=13&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-informales/3-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/10-home_default/vestido-estampado.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" data-link="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" data-id-product="4" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							59,15 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" title="Vestido estampado" itemprop="url" >
					Vestido estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=4&amp;ipa=16&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-noche/4-vestido-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
				<div class="item ">
				<div class="product_list grid">
																<div class="row">
											<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/12-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" data-id-product="5" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							33,62 $						</span>
													
							<span class="old-price product-price">
								35,39 $
							</span>
							
															<span class="price-percent-reduction">-5%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=5&amp;ipa=19&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/16-home_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" data-link="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" data-id-product="6" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							35,38 $						</span>
												
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Vestido de verano estampado" itemprop="url" >
					Vestido de verano estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</p>
			
						<div class="product-flags">
																				</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=6&amp;ipa=31&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/6-vestido-verano-estampado.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 ">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/20-home_default/vestido-estampado-gasa.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-link="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" data-id-product="7" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
								</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							19,03 $						</span>
													
							<span class="old-price product-price">
								23,78 $
							</span>
							
															<span class="price-percent-reduction">-20%</span>
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Vestido de gasa estampado" itemprop="url" >
					Vestido de gasa estampado
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</p>
			
						<div class="product-flags">
																							<span class="discount label label-danger">&iexcl;Precio rebajado!</span>
								</div>
		

												<span class="availability">
													<span class=" label-success">
								En stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=7&amp;ipa=34&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/vestidos-verano/7-vestido-estampado-gasa.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
						
																<div class=" ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 last_item">
							    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		   <div class="leo-more-info" data-idproduct="10"></div>
			<a class="product_img_link"	href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" title="Unidad de Disco Marca ASUS DRW-24F1ST" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/26-home_default/unidad-de-disco-marca-asus-drw-24f1st.jpg" alt="Unidad de Disco Marca ASUS DRW-24F1ST" title="Unidad de Disco Marca ASUS DRW-24F1ST" itemprop="image" />
				<span class="product-additional" data-idproduct="10"></span>
			</a>
			<div class="action">
										
									
					
									<a class="quick-view btn-default btn" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" data-link="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html">
						<span>Vista r&aacute;pida</span>
					</a>
														<a class="add_to_compare compare btn btn-outline-inverse" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" data-id-product="10" >
							<i class="fa fa-files-o"></i>
						</a>							
							</div>
							<a class="new-box" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html">
					<span class="new-label product-label">Nuevo</span>
				</a>
										<a class="sale-box" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html">
					<span class="sale-label product-label">Sale!</span>
				</a>
					</div>
				
	</div>
	<div class="right-block">
		<div class="product-meta">
							<div class="content_price">
											
						<span class="price product-price">
							345,05 $						</span>
													
							<span class="old-price product-price">
								345,10 $
							</span>
							
																			
						
						
									</div>
						<h5 itemprop="name" class="name">
								<a class="product-name" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" title="Unidad de Disco Marca ASUS DRW-24F1ST" itemprop="url" >
					Unidad de Disco Marca ASUS DRW-24F1ST
				</a>
			</h5>
																	<p class="product-desc" itemprop="description">
				Quemador DVD ASUS DRW-24F1ST
			</p>
			
						<div class="product-flags">
															<span class="online_only label label-warning">&iexcl;Solo por Internet</span>
																					</div>
		

												<span class="availability">
													<span class=" label-success">
								En Stock							</span>
											</span>
									</div>
		
				<div class="functional-buttons clearfix">				
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn btn-outline" href="http://localhost/tienda/carrito?add=1&amp;id_product=10&amp;token=cc873874fa8ca66d8d6ab58848191d04" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="0" data-id-product="10" data-minimal_quantity="1">
									<i class="fa fa-shopping-cart"></i> <span>A&ntilde;adir a la cesta</span>
								</a>
																		</div>
					<div class="view">
					<a itemprop="url" class="button btn btn-outline" href="http://localhost/tienda/quemador/10-unidad-de-disco-marca-asus-drw-24f1st.html" title="Ver">
							<span>M&aacute;s</span>
						</a>
					</div>
					
				</div>
	</div>
</div>
<!-- .product-container> -->


						</div>		
											</div>
						
									</div>
		</div>		
		</div>
</div>





              </div>   
			  	
			 
			</div></div>
        
		
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('#leoproducttab3149 .carousel').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: 0
        });
    });
 
	$("#leoproducttab3149 .nav-pills li", this).first().addClass("active");
	$("#leoproducttab3149 .tab-content .tab-pane", this).first().addClass("active");
 
});
</script>
                                                                                     </div>
                                                        </div>
    <?php }} ?>
