		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div> -->
					<div class="col-md-10">
						<div class="shop-menu pull-left">
							<ul class="nav navbar-nav">
							<li><a href="{{ URL::to('/') }}"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="{{ URL::to('/product') }}"><i class="fa fa-item"></i> Product</a></li>
								<li><a href="{{ URL::to('/cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{ URL::to('/dashboard') }}"><i class="fa fa-user"></i> Dashboard</a></li>
								@yield('loginheader')
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->