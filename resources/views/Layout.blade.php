<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Home - Nepal Agro Craft</title>
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=ba5dbeb1c60beb58a911047941b1a847">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" href="/assets/css/styles.min.css?h=e312b15a4b5118d6f747374f94b78fb6">

	
</head>
<body style="background: #EEE3CB;">
	<div>
		
	</div>
	<h1 class="text-center text-white d-none d-lg-block site-heading" style="height: 50px;">
		<span class="site-heading-lower" style="font-family: 'Advent Pro', sans-serif;">Nepal Agro Craft</span>
		<small class="text-primary site-heading-upper mb-3" style="font-size: 21px;font-family: 'Akaya Telivigala', serif;">We are here to serve&nbsp;</small>
	</h1>
	<nav class="navbar navbar-dark navbar-expand-lg bg-dark py-lg-4" id="mainNav" style="background: rgba(204,218,207,0.16);opacity: 80;">
		<div class="container">
			<a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Nepal Agro Craft</a>
			<button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive-1">
				<span class="visually-hidden">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive-1">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="/Home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/Products">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/About">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/store.html">Store</a>
					</li>
						@if (Route::has('login'))
		                    @auth
		                <li class="nav-item">
		                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
		                </li>
		                @else
		                <li>
		                	<a href="{{ route('login') }}" class="nav-link"style="color: #EC994B;"><b>Log in</b></a>
		                </li>
		                @if (Route::has('register'))
		                <li>
		                	<a href="{{ route('register') }}" class="nav-link"style="color: rgba(0,0,0,0.9);background: #B1BCE6;border-radius: 10px;">Register</a>
		                </li>
		                        @endif
		                    @endauth
			            @endif
				</ul>
			</div>
		</div>
	</nav>
	<section>
		@yield('index')
		@yield('products')
		@yield('aboutus')
	</section>
	<footer class="text-center footer text-faded py-5">
		<div class="container"><p class="m-0 small">Copyright&nbsp;©&nbsp;Nepal Agro Craft 2022</p>
		</div>
	</footer>
	<script type="text/javascript" >
	    let image=document.getElementById('image');
		let image1=document.getElementById('image1');
		let images=['/assets/img/star-sky.jpg','/assets/img/about.jpg']
		setInterval(function(){
			let random=Math.floor(Math.random()*2);
			image.src=images[random];
			image1.src=images[random];
		},3000);
	</script>
<!--javascript-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="/assets/js/script.min.js?h=9ef33277047247886807476a1f3bec36"></script>

</body>
</html>