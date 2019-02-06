<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <title> CESI Bordeaux</title>

     <!-- Scripts -->

     <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/v/bs/datatables.min.js"></script>
          <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="css/style_box.css" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" class="img-thumbnail" width="80" height="80" alt="Responsive image bde">
                CESI Bordeaux
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('home')}}">Accueil</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('event')}}">Evènement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('idea_box')}}">Boite à idées</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('shop')}}">Boutique</a>
                    </li>

                    @auth
                    @if(Session::has('cart'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.shoppingCart') }}">Panier 
                            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : ''}}</span></a>
                        </li>
                    @endif

                            @if(Auth::user()->id_usersstatus === 2)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Administration
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('/admin/products')}}">Produits</a>
                                        <a class="dropdown-item" href="{{url('/admin/reports')}}">Signalements</a>
                                        <a class="dropdown-item" href="{{url('/admin/users')}}">Utilisateurs</a>
                                    </div>
                                </li>
                            @endif

                                  @if(Auth::user()->id_usersstatus === 2)
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="https://www.google.com/gmail/"  role="button" >
                                    Notification
                                    </a>
                                </li>
                            @endif

                    @endauth
                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>   
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        {{ __('Paramètres') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                </ul>
            </div>

        </nav>
    </header>

    @yield('content')

    <footer class="page-footer font-small blue pt-4 bg-dark">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase  mt-3 mb-4">Information</h5>

                    <ul class="list-unstyled">
                        <!--<div class=" col-md-3 mx-auto"></div>-->
                        <li>
                            <a class="nav-link" href="{{url('cgv')}}">Conditions générales de vente</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('legal_notice')}}">Mentions légales</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('cgu')}}">Conditions générales d'utilisation</a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://mail.google.com/mail/u/0/">Contact : bdecesibordeaux@gmail.com</a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://www.ovh.com/fr/">Heberger par : Talentsoft </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->



                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Navigation</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a class="nav-link" href="{{url('home')}}">Accueil</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('shop')}}">Boutique</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('event')}}">Evènement</a>
                            </li>
                        <li>
                            <a class="nav-link" href="{{url('idea_box')}}">Boite à idées</a>
                        </li>

                        @guest

                        <li>
                            <a class="nav-link" href="#!">Inscription</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#!">Connexion</a>
                        </li>

                        @endguest

                        @auth

                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                        </li>
                 
                        @endauth
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Droit d'auteur :
            <a href="https://www.cesi.fr/"> bdecesibordeaux.fr</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="js/cookiechoices.js"></script>
<script>document.addEventListener('DOMContentLoaded', function (event) {
     cookieChoices.showCookieConsentBar('Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.', 'J’accepte', 'En savoir plus', 'http://www.example.com/mentions-legales/'); });</script>
</body>

</html>