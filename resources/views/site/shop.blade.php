@extends('default')


@section('content')

<main class="row justify-content-center">

    <div class="jumbotron col-sm-12 col-md-12 col-lg-12">
        <div class="container">
            <h2 class="display-4" style="text-align: center">Boutique</h2>
        </div>
    </div>
    <div class="row container background-shop rounded">
        <div class="justify-content-center">

            <h3 style="text-align: center">Meilleures Ventes</h3>

            <hr class="separator">
            
            <div class = "card-deck best-products">  
                @foreach ($populars as $popular)
                    <div class="card">
                        <img class="card-img-top" src="{{$popular->image_url}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$popular->label}}</h5>
                            <p class="card-text">{{$popular->description}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$popular->price}}€</small>
                            @auth
                            <a href="{{ route('product.addToCart', ['id' => $popular->id]) }}" class="btn btn-primary">Ajouter au panier</a>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-primary">Ajouter au panier</a>
                            @endguest
                        </div>
                    </div>
                @endforeach
            </div>

            <h3 style="text-align: center">Derniers Produits</h3>
            
            <hr class="separator">

            <div class="container">
                <div class="row">
                    <div class="categories">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                            Catégories
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#" title="Lien 1">Vêtement</a></li>
                            <li><a href="#" title="Lien 2">Goodies</a></li>
                            <li><a href="#" title="Lien 3">Sponsorisé</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" title="Lien 4">Lien 4</a></li>
                        </ul>
                    </div>

                    <form class="form-inline my-2 my-lg-0">
                        <div class="form-group"> 
                            <input class="form-control mr-sm-2" type="search" placeholder="Nom du produit" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
                        </div>
                    </form>

                </div>
            </div>
            
            <div class="card-columns">
            @foreach($products as $product)
                <div class="card">
                    <img class="card-img-top" src="{{$product->image_url}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->label ?></h5>
                        <p class="card-text"><?php echo $product->description ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $product->price ?>€</small></p>
                        @auth
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary">Ajouter au panier</a>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="btn btn-primary">Ajouter au panier</a>
                        @endguest
                    </div>
                </div>
                @endforeach
            </div>
                
            </div>

            <nav aria-label="..." class="col-sm-12 col-md-12 col-lg-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item active">
                        <span class="page-link">1<span class="sr-only">(current)</span></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
   

</main>

@endsection