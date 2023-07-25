@include("partials.head")

<body>
	<div class="container text-center">
		<div class="logo-404">
			<a href="/"><img src="{{ asset('assets/images/home/logo.png') }}" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="{{ asset('assets/images/404/404.png') }}" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="/">Bring me back Home</a></h2>
		</div>
	</div>

  
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/js/price-range.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
@include("partials.js")