@extends('default')

@section('content')

<body>
	<div id="carouselHome" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
			<li data-target="#carouselHome" data-slide-to="1"></li>
			<li data-target="#carouselHome" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<a href="{{url('shop')}}"><img class="w-100" src="./images/sweat.png" alt="First slide"></a>
				<div class="carousel-caption d-none d-md-block ">
					<h5></h5>
					<p style="color : black">Découvrez nos derniers produits !</p>
				</div>
			</div>
			<div class="carousel-item">
					<a href="{{url('event')}}"><img class="w-100" src="./images/evenements.jpg" alt="First slide"></a>
					<div class="carousel-caption d-none d-md-block">
						<h5 style="color : grey">Evènements</h5>
						<p style="color : grey">Tenez vous au courant de tout les évènements à venir !</p>
					</div>
				</div>
				<div class="carousel-item">
						<a href="{{url('idea_box')}}"><img class="w-100" src="./images/boiteàidée.jpg" alt="First slide"></a>
						<div class="carousel-caption d-none d-md-block">
							<h5 style="color : black">Boite à idées</h5>
							<p style="color : black">Une idée à proposer ?</p>
						</div>
					</div>
		</div>
		<a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<br><br>

	<div id="homeText">
		<h1 style="color : white">Boutique - Produits les plus populaires</h1>
	</div>

	<br><br>

	<div class="card-deck">
		<div class="card">
			<img class="card-img-top" src="./images/sweat.png" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Sweat</h5>
				<p class="card-text">Le nouveau sweat du Bde CESI est diponible ! Commandez-le dès aujourd'hui</p>
				<p class="card-text"><small class="text-muted">15.99€</small></p>
				<a href="{{url('shop')}}"><input class="favorite styled" type="button" value="Acheter"></a>
			</div>
		</div>
		<div class="card">
			<img class="card-img-top" src="./images/bueno.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Kinder Bueno</h5>
				<p class="card-text">Vraiment Bueno !</p>
				<p class="card-text"><small class="text-muted">2.00€</small></p>
				<a href="{{url('shop')}}"><input class="favorite styled" type="button" value="Acheter"></a>
			</div>
		</div>
		<div class="card">
			<img class="card-img-top" src="./images/twix.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Twix</h5>
				<p class="card-text">Seulement le twix gauche</p>
				<p class="card-text"><small class="text-muted">19.50€</small></p>
				<a href="{{url('shop')}}"><input class="favorite styled" type="button" value="Acheter"></a>
			</div>
		</div>
	</div>

</body>

@endsection
