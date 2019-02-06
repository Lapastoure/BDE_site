@extends('default')

@section('content')

<link rel="stylesheet" href="css/style_event.css">
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-2" style="text-align: center">Evènement</h1>
    </div>
</div>
<div class="backgroundC">
    <div class="event button">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a role="button" class="btn btn-secondary" href="{{url('past_event')}}">Evènements passés</a>
            <a role="button" class="btn btn-secondary" href="{{url('event')}}">Evènements à venir</a>
            <a role="button" href="#!" class="btn btn-secondary">Evènements du mois</a>
        </div>
    </div>

    <hr class="separator">

    @auth
    @if(Auth::user()->id_usersstatus === 3)
    <div class="download">
        <button type="button" class="btn btn-secondary btn-lg">Télécharger toute les photos</button>
    </div>
    @endif

    @if(Auth::user()->id_usersstatus === 2)
    <div class="download_r">
        <button type="button" class="btn btn-secondary btn-lg">Télécharger tout les inscrits</button>
    </div>
    @endif
    @endauth
    @foreach ($manifestations as $manifestation)


    <div class="event">
        <div class="media ">
            <img src="{{$manifestation->image_url}}" class="align-self-start mr-3" width="200" height="200" alt="Soirée BDE CESI">
            <div class="media-body">
                <h3 class="mt-0">{{$manifestation->label}}</h3>
                <h5 class="mt-0">Date : {{$manifestation->date}}</h5>
                <h6 class="mt-0">Prix : {{$manifestation->price}}€ <h6>
                        <h6>{{$manifestation->description}}
                        </h6>
            </div>

        </div>
    </div>
    @auth

    @if(Auth::user()->id_usersstatus === 1)
    <form method="GET" action="{{ route('user.inscribe',['manifestation' => $manifestation->id])}}">
        <div class="register">
            <button type="submit" <?php echo false ? 'disabled="true"' : '' ; ?> class="btn btn-secondary btn-lg" >
                S'inscrire</button>
        </div>
    </form>
    @endif
    @endauth

    <hr class="separator">
    @endforeach
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="./js/event.js"></script>
@endsection