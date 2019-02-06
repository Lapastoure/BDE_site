@extends('default')

@section('title')
    Paiement
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Paiement</h1>
        <h4>Total à régler : ${{$total}}</h4>
        <form action="{{ route('checkout')}}" method="post">
    </div>
</div>           

@endsection