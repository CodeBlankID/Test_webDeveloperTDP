@include('partials.head')
<header id="header"><!--header-->
		
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo pull-left">
                        <a href="/"><img src="{{ asset('assets/images/home/logo.png') }}" alt="" class="img-responsive" /></a>
                    </div>
                    
                </div>
                <div class="col-sm-9">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active"><i class="fa fa-home"></i>Home</a></li>
                            @if (Auth::check())
                            <li><a href="profile"><i class="fa fa-user"></i>My Account</a></li>
                            @else
                            <li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

</header><!--/header-->