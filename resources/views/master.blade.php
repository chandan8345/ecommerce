<!DOCTYPE html>
<html lang="en">
<!-- Head -->
@include('sections.head')
<body>
<!-- Header -->
@yield('header')
<!-- Slider -->
@yield('slider')

@yield('advertisement-slider')

@yield('cart')

@yield('login')

@yield('checkout')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
                        <!-- Category -->
                        @yield('category')
                        <!-- Brands -->
						@yield('brand')
                        <!-- Price Range -->
                        @yield('price-range')
                        <!-- Ads Image -->
						@yield('ads-image')
					</div>
				</div>
				<!-- you can view the products here  -->
				<div class="col-sm-9 padding-right">
					@yield('product')
				
					@yield('product-details')
                    <!-- Feature Item -->
					@yield('feature-items')
                    <!-- Category Tab -->
                    @yield('category-tab')
                    <!-- Recomended Items -->
					@yield('recommended-items')
				</div>
			</div>
		</div>
	</section>
	
	@yield('body')
<!-- Fotter -->
@include('sections.footer') 
</body>
</html>