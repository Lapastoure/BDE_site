@extends('default')

@section('content')
<link rel="stylesheet" href="css/reports.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.css" />

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4" style="text-align: center">Administration</h1>
    </div>
</div>
<div  class="d-flex flex-column align-items-center background-admin">
    <div class="w-75 mt-5">
        <h2>Signalement des évenements</h2>
    </div>
    <div  id="tableElements" class="w-75 my-5">
        <table id="adminTableManifestations" class="table  table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Libellé de l'évènement</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div  class="d-flex flex-column align-items-center background-admin">
    <div class="w-75 mt-5">
        <h2>Signalement des images</h2>
    </div>
    <div  id="tableElements" class="w-75 my-5">
        <table id="adminTableImages" class="table  table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Url de l'image</th>
                    <th>Libellé de l'évènement</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div  class="d-flex flex-column align-items-center background-admin">
    <div class="w-75 mt-5">
        <h2>Signalement des commentaires</h2>
    </div>
    <div  id="tableElements" class="w-75 my-5">
        <table id="adminTableComments" class="table  table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Détail du commentaire</th>
                    <th>Url de l'image</th>
                    <th>Libellé de l'évènement</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    </div>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
<script src="js/reports.js"></script>

@endsection