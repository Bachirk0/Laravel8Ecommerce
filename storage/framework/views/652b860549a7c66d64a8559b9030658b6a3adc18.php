<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Accueil</a></li>
					<li class="item-link"><span>Vetements et sacs</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="<?php echo e(('assets/images/shop-banner.jpg')); ?>" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">
						<h1 class="shop-title">Vetements et sacs</h1>
						<div class="wrap-right">
							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting">
									<option value="default" selected="selected">Trie par defaut</option>
									
									<option value="date">Plus recent </option>
									<option value="price">Moins cher au plus cher</option>
									<option value="price-desc">Plus cher au moins cher</option>
								</select>
							</div>
							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model="pagesize">
									<option value="12" selected="selected">12 par page</option>
									<option value="16">16 par page</option>
									<option value="18">18 par page</option>
									<option value="21">21 par page</option>
									<option value="24">24 par page</option>
									<option value="30">30 par page</option>
									<option value="32">32 par page</option>
								</select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grille</a>
								<a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>Liste</a>
							</div>

						</div>

					</div><!--end wrap shop control-->
                        
					<style>
						.product-wish{
							position:absolute;
							top:10px;
							left:0;
							z-index: 99;
							right: 30px;
							text-align:right;
							padding-top: 0;
						}

						.product-wish .fa
						{
                           color: #cbcbcb;
						   font-size:32px;
						}
						.product-wish .fa:hover{
							color:#ff7007;
						}
						.fill-heart
						{
							color:#ff7007 !important;
						}					
					</style>

					<div class="row">

						<ul class="product-list grid-products equal-container">
							<?php
								$witems = Cart::instance('wishlist')->content()->pluck('id');
							?>
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="<?php echo e(route('product.details', ['slug'=> $product->slug])); ?>" title="<?php echo e($product->name); ?>">
											<figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="<?php echo e(route('product.details', ['slug'=> $product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
										<div class="wrap-price"><span class="product-price">$<?php echo e($product->regular_price); ?></span></div>
										<a href="#" class="btn add-to-cart" wire:click.prevent="store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)">Ajouter au panier</a>
										<div class="product-wish">
											<?php if($witems->contains($product->id)): ?>
											<a href="#" wire:click.pevent="removeFromWishlist(<?php echo e($product->id); ?>)" ><i class="fa fa-heart fill-heart"></i></a>
											<?php else: ?>
											<a href="#" wire:click.pevent="addToWishlist(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)"><i class="fa fa-heart"></i></a>
											<?php endif; ?>
										</div>

									</div>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>  
					</div>
					<div class="wrap-pagination-info">
						<?php echo e($products->links()); ?>

						
					</div>
				</div><!--end main products area-->
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Categories</h2>
						<div class="widget-content">
							<ul class="list-category">
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
						  	<li class="category-item"> 
								  <a href="<?php echo e(route('product.category',['category_slug'=>$category->slug])); ?>" class="cate-link"> <?php echo e($category->name); ?></a>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								
					</div><!-- Categories widget-->

					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Marques</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="6">
								<li class="list-item"><a class="filter-link active" href="#">Vetements de mode</a></li>
								<li class="list-item"><a class="filter-link " href="#">Sacs</a></li>
								<li class="list-item"><a class="filter-link " href="#">Chaussures</a></li>
								<li class="list-item"><a class="filter-link " href="#">Parfums</a></li>
								<li class="list-item"><a class="filter-link " href="#">Montres</a></li>
								<li class="list-item"><a class="filter-link " href="#">Accessoires</a></li>
								
								<li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Montrer plus<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div><!-- brand widget-->

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Prix<span class="text-info">$<?php echo e($min_price); ?> - $<?php echo e($max_price); ?></span></h2>
						<div class="widget-content">
							<div id="slider" wire:ignore></div>
						</div>
					</div><!-- Price-->

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Couleur</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list has-count-index">
								<li class="list-item"><a class="filter-link " href="#">Rouge <span>(217)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Jaune <span>(179)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Noir <span>(79)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Bleu <span>(283)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Gris <span>(116)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Rose <span>(29)</span></a></li>
							</ul>
						</div>
					</div><!-- Color -->

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Tailles</h2>
						<div class="widget-content">
							<ul class="list-style inline-round ">
								<li class="list-item"><a class="filter-link active" href="#">s</a></li>
								<li class="list-item"><a class="filter-link " href="#">M</a></li>
								<li class="list-item"><a class="filter-link " href="#">l</a></li>
								<li class="list-item"><a class="filter-link " href="#">xl</a></li>
							</ul>
							<div class="widget-banner">
								<figure><img src="<?php echo e(('assets/images/size-banner-widget.jpg')); ?>" width="270" height="331" alt=""></figure>
							</div>
						</div>
					</div><!-- Size -->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Produits populaire</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="<?php echo e(('assets/images/products/digital_01.jpg')); ?>" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Jean Levis</span></a>
											<div class="wrap-price"><span class="product-price">8500 fcfa</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="<?php echo e(('assets/images/products/digital_17.jpg')); ?>" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Aire force 1</span></a>
											<div class="wrap-price"><span class="product-price">15000 fcfa</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="<?php echo e(('assets/images/products/digital_18.jpg')); ?>" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Sac Zara</span></a>
											<div class="wrap-price"><span class="product-price">15000 fcfa</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
												<figure><img src="<?php echo e(('assets/images/products/digital_20.jpg')); ?>" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Parfum Zara</span></a>
											<div class="wrap-price"><span class="product-price">15000 fcfa</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>

	<?php $__env->startPush('scripts'); ?>
		<script>
			var slider= document.getElementById('slider');
			noUiSlider.create(slider,{
				start: [1,1000],
				connect:true,
				range:{
					'min':1,
					'max':1000
				},
				pips:{
					mode:'steps',
					stepped:true,
					density:4
				}
			});

			slider.noUiSlider.on('update',function(value){
				window.livewire.find('<?php echo e($_instance->id); ?>').set('min_price',value[0]);
				window.livewire.find('<?php echo e($_instance->id); ?>').set('max_price',value[1]); 
			}
			);
		</script>
	<?php $__env->stopPush(); ?>
<?php /**PATH /home/bachir/laravel8ecommerce/resources/views/livewire/shop-component.blade.php ENDPATH**/ ?>