<nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-secondary shadow-sm">
    <!--<div class="container">-->
    <a href="{{ route('home') }}"><img id="logoBrand" src="/img/logo.png" alt="Logo" class="img-responsive"></a>
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse smooth-scroll" id="navbarSupportedContent">
        <ul class="nav navbar-nav nav-pills mr-auto">
            <li class="nav-item mr-2">
                <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
                    <i class="fas fa-home home"></i> Inicio
                </a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link {{ setActive('graduados.*') }}" href="{{ route('graduados.index') }}">
                    <i class="fas fa-user-graduate"></i> Graduados
                </a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link {{ setActive('noticias.*') }}" href="{{ route('noticias.index') }}">
                    <i class="fas fa-newspaper"></i> Noticias
                </a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link {{ setActive('eventos.*') }}" href="{{ route('eventos.index') }}">
                    <i class="fas fa-calendar-week"></i> Eventos
                </a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link {{ setActive('experiencias.*') }}" href="{{ route('experiencias.index') }}">
                    <i class="fas fa-film"></i> Experiencias
                </a>
            </li>
            <li class="nav-item dropdown" role="presentation">
                <a id="dropdown" class="nav-link {{ setActive('ofertas.*') }} dropdown-toggle text-decoration-none"
                    data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-briefcase"></i> Ofertas
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('ofertas.index') }}">Laborales</a>
                    <a class="dropdown-item" href="https://jobboard.universia.net/graduadosufps" target="_blank">Bienestar</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
            @guest
                <li id="social" role="presentation" class="dropdown">
                    <a id="dropdown" class="dropdown-toggle text-decoration-none mr-3" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item {{ setActive('login') }}" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> @lang('Login')
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item {{ setActive('register') }}" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> @lang('Register')
                        </a>
                    </div>
                </li>
            @else
                <li id="social" class="text-center">
                    <a href="#" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off white-text mr-4"></i>
                    </a>
                </li>
            @endguest
            <li id="social" class="text-center">
                <a href="https://www.facebook.com/IngSistUFPS/?fref=ts" target="_blank" class="fb-ic">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <a href="https://twitter.com/UFPSCUCUTA" target="_blank" class="tw-ic">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <a href="https://www.youtube.com/channel/UCgPz-qqaAk4lbHfr0XH3k2g" target="_blank" class="li-ic">
                    <i class="fab fa-youtube white-text mr-4"> </i>
                </a>
                <a href="https://www.instagram.com/ufpscucuta/" target="_blank" class="ins-ic">
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
    $(".menu-toggle-btn").click(function() {
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
    });

</script>
