@extends('default')

@section('content')

<body>

    <link rel="stylesheet" href="css/style_past_event.css">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-2" style="text-align: center">Evènement</h1>
            </div>
        </div>
    <div class="backgroundC">
        <div class="event button">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a role="button" href="{{url('past_event')}}" class="btn btn-secondary">Evènements passés</a>
                <a role="button" href="{{url('event')}}" class="btn btn-secondary">Evènements à venir</a>
                <a role="button" href="#!" class="btn btn-secondary">Evènements du mois</a>
            </div>
        </div>

        @auth
        @if(Auth::user()->id_usersstatus === 3)
        <div class="download">
            <button type="button" class="btn btn-secondary btn-lg">Télécharger toutes les photos</button>
        </div>
        @endif
        @endauth

        @foreach ($manifestations as $manifestation)

        <div class="event">
            <div class="media background-shop">
                <img src="{{$manifestation->image_url}}" class="align-self-start mr-3" width="200" height="200" alt="Soirée BDE CESI">
                <div class="media-body">
                    <h3 class="mt-0">
                        {{$manifestation->label}}
                    </h3>
                    <h5 class="mt-0">Date :
                        {{ $manifestation->date}}
                    </h5>
                    <h6 class="mt-0">Prix :
                        <?php echo $manifestation->price?> €<h6>
                            <p>Description:
                                <?php echo $manifestation->description ?>
                            </p>


                            @foreach ($images as $image)
                            <div class="ajout">
                                <img src="{{ $image->image_url }}" alt="user import" width="200" height="200" class="img-thumbnail">
                                <div class="input-group-prepend">
                                </div>
                            </div>

                            <h4 class="com"> Commentaire : </h4>
                            @foreach ($comments as $comment)
                            @if($comment->id_images === $image->id)
                            <p>{{ $comment->description }}</p>
                            @auth
                            @if(Auth::user()->id_usersstatus === 3)
                            <form method="GET" action="{{ route('reportcomment', ['comment'=> $comment->id]) }}">
                                <button type="submit" class="btn btn-primary btn-sm">Signaler commentaire</button>
                            </form>
                            @endif
                            @endauth
                            @endif
                            @endforeach

                            @auth
                            @if(Auth::user()->id_usersstatus === 1)

                            <form method="POST" action="{{ route('uploadcom', ['image'=> $image->id]) }}">
                                <div class="issou">
                                    <textarea class="form-control" name="description" aria-label="With textarea"></textarea>

                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    <button type="submit" class="btn btn-primary mt-2 mb-2">ajouter commentaire</button>
                                </div>

                            </form>
                            @endif

                            @if(Auth::user()->id_usersstatus === 2)
                            <form method="GET" action="{{route ('AdmindeleteImg', ['image' => $image->id, 'comment' => $comment->id])}}">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Supprimer image</button>
                            </form>
                            @endif
                            @if(Auth::user()->id_usersstatus === 1)
                            <form method="GET" action="{{ route('userlike', ['image'=> $image->id]) }}">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Like image</button>
                            </form>
                            @endif
                            @if(Auth::user()->id_usersstatus === 3)
                            <form method="GET" action="{{ route('reportimage', ['image' => $image->id])}}">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Signaler image</button>
                </div>
                </form>
                @endif
                @endauth
                @endforeach
                @auth
                @if(Auth::user()->id_usersstatus === 1)
                <h4> Publier une image :</h4>
                <form method="POST" action="{{ route('upload', ['manifestation'=> $manifestation->id])  }}">
                    <div class="input-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="inputGroup-sizing-default"> Lien image</span>
                            </div>

                            <input type="text" name="image_url" id="image_url" class="form-control" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <button type="submit" class="btn btn-primary"> Publier photo</button>
                        </div>
                    </div>
                </form>
                @endif
                @endauth
            </div>
        </div>
        <hr class="separator">
        @endforeach
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection