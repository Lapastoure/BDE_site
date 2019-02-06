@extends('default')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4" style="text-align: center">Boite à idées</h1>
    </div>
</div>
<div class="backgroundC">
    @auth
    @if(Auth::user()->id_usersstatus === 1)
    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Poster
            une idée</a>
    </div>
    <div class="com">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold text-dark">Information requise pour idée</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{url('idea_box')}}">

                        <div class="modal-body mx-3">

                            <div class="md-form mb-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Titre</span>
                                    </div>
                                    <input type="text" name="label" class="form-control" aria-label="Default"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>

                            </div>

                            <div class="md-form mb-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Description</span>
                                    </div>
                                    <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
                                </div>
                            </div>

                            <div class="date_wola">
                                <div class="input date ">
                                    <input size="16" type="date" name="date">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>

                            <div class="md-form mb-5">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Lien image</span>
                                    </div>
                                    <input type="text" name="image_url" class="form-control" aria-label="Default"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer d-flex justify-content-center">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <button class="btn btn-default">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    @endif
    @endauth
    <!-- Regler le problème d'affichage -->
    @foreach ($suggestions as $suggestion)


    <div class="idee">
        <h5 class="title"> {{ $suggestion->label }}</h5>
        <h6 class="date">Date : {{$suggestion->date}}</h6>

        <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="{{$suggestion->image_url}}" width="200" height="200" alt="Card image cap">
            <div class="card-body">
                <p class="card-text"> {{$suggestion->description }}</p>
            </div>
        </div>
        @auth
        @if(Auth::user()->id_usersstatus === 1)
        <form method="GET" action="{{ route('idea.vote', ['suggestion' => $suggestion->id]) }}">
            <div class="vote">
                <button type="submit" class="btn btn-dark btn-lg"> Vote</button>
            </div>
            @endif
            @if(Auth::user()->id_usersstatus === 1)
        </form>
        <form method="GET" action="{{ route('idea.remove', ['id' => $suggestion->id]) }}">
            <button type="submit" class="btn btn-dark btn-lg mt-2"> Supprimer l'idée </button>
        </form>

        <form method="GET">
            <button type="submit" class="btn btn-dark btn-lg  mt-2">Accepter l'idée</button>
        </form>
        @endif
        @endauth

    </div>
    <hr class="separator">


@endforeach
</div>
@endsection