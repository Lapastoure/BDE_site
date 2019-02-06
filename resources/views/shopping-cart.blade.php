@extends('default')

@section('title')
    Panier
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4" style="text-align: center">Panier</h1>
    </div>
</div>
<div class="d-flex justify-content-center">
<div class="backgroundC w-75 my-5">
    @if(Session::has('cart'))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Quantité</th>
                <th scope="col">Produit</th>
                <th scope="col">Prix</th>
                <th scope="col">Gérer Produits</th>
            </tr>
        </thead>
        <tbody>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" style ="align center">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li lass="list-group-item">
                        <tr>
                            <td><span class="badge">{{ $product['quantity']}}</span></td>
                            <td>{{ $product['item']['label'] }}</td>
                            <td><span class="label label-success">{{ $product['item']['price']}}€</span></td>
                            <td><div class="btn-group">
                                <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Enlever 1</a></li>
                                    <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Enlever tout</a></li>
                                </ul>
                            </div></td>
                        </tr> 
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        </tbody>
    </table>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total : {{$totalPrice}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{url('order')}}" type="button" class="btn btn-success">Paiement</a>
                  
            </div>
        </div>
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                 <h2>Aucun produit dans le panier</h2>
            </div>
        </div>
    @endif
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
    <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

@endsection