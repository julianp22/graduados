<nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-red shadow-sm">
	<!--<div class="container">-->
		<a href="{{ route('home') }}"><img id="logoBrand" src="/img/logo.png" alt="Logo" class="img-responsive"></a>
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name')}} 
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	    	<span class="navbar-toggler-icon"></span>
	    </button>

		<div class="collapse navbar-collapse smooth-scroll" id="navbarSupportedContent">
			<ul class="nav navbar-nav nav-pills mr-auto">
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
						<i class="fas fa-home home"></i> @lang('Home')
					</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">
						<i class="fas fa-home home"></i> @lang('About')
					</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link {{ setActive('graduados.*') }}" href="{{ route('graduados.index') }}">
						<i class="fas fa-store store"></i> @lang('Products')
					</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">
						<i class="fas fa-headset contact"></i> @lang('Contact')
					</a>
				</li> 
				@guest
				<li class="nav-item">
					<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
						<i class="fas fa-sign-in-alt"></i> @lang('Login')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('register') }}" href="{{ route('register') }}">
						<i class="fas fa-user-plus"></i> @lang('Register')
					</a>
				</li>
				@else
				<li class="nav-item">
					<a class="nav-link" href="#" onclick="event.preventDefault();
		                document.getElementById('logout-form').submit();">
		                <i class="fas fa-sign-out-alt"></i> @lang('Logout')
		            </a>
		        </li>
				@endguest
				-->
			</ul>
			<ul class="navbar-nav nav-flex-icons">
				<li role="presentation" class="dropdown">
					<a id="dropdown" class="dropdown-toggle text-decoration-none mr-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i><span class="caret"></span>
					</a>
					<div class="dropdown-menu">
						@guest
						<a class="dropdown-item {{ setActive('login') }}" href="{{ route('login') }}">
							<i class="fas fa-sign-in-alt"></i> @lang('Login')
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item {{ setActive('register') }}" href="{{ route('register') }}">
							<i class="fas fa-user-plus"></i> @lang('Register')
						</a>
						@else
						<a class="dropdown-item" href="#" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							<i class="fas fa-sign-out-alt"></i> @lang('Logout')
						</a>
						@endguest
					</div>
				</li>
				<li id="social" class="text-center">
					<a href="https://facebook.com" target="_blank" class="fb-ic">
						<i class="fab fa-facebook-f white-text mr-4"> </i>
					</a>
					<a href="https://twitter.com" target="_blank" class="tw-ic">
						<i class="fab fa-twitter white-text mr-4"> </i>
					</a>
					<a href="https://youtube.com" target="_blank" class="li-ic">
						<i class="fab fa-youtube white-text mr-4"> </i>
					</a>
					<a href="https://instagram.com" target="_blank" class="ins-ic">
						<i class="fab fa-instagram white-text"> </i>
					</a>
				</li>
			</ul>
		</div>
	<!--</div>-->
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>

<script type="text/javascript">
	$(".menu-toggle-btn").click(function(){
	  $(this).toggleClass("fa-times");
	  $(".navigation-menu").toggleClass("active");
	});
</script>