<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					@foreach($sliders as $slide)
					<div class="item-slide">
					<figure><img src="{{ asset('assets/images/sliders') }}/{{$slide->image}}"  alt="" class="img-slide"></figure>
						<div class="slide-info slide-1">
							<h2 class="f-title"><b>{{$slide->title}}</b></h2>
							<span class="subtitle">{{$slide->subtitle}}</span>
							<p class="sale-info">Prix: <span class="price">${{$slide->price}}</span></p>
							<a href="{{$slide->link}}" class="btn-link">Boutique</a>
						</div>
					</div>
				@endforeach
				</div>
			</div>

			
		</div>
	</main>