@extends('layouts.app')

@section('content')

<br>
        <br>

        <h1 id="test" >test</h1>

        <center>
        <div id="map">
                <!-- Ici s'affichera la carte -->
        </div>
        </center>

        <br>
        <br>

        <!-- Extra large modal -->
        <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">
            Voir les catégories
        </button>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </center>

        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <center>
                    <h4>
                        Catégories
                    </h4>
                </center>

                <div class=" justify-content-around d-flex flex-wrap">
                    @foreach($category as $item)

                            <div class="col-2 categories" data-rowid="{{ $item['id'] }}">
                                {{ $item['nom'] }}
                            </div>

                    @endforeach

                </div>
                <br>
                <center>
                    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------


                    <form method="POST" action="{{route('create_categorie')}}">
                            {{csrf_field()}}
                            <input type="text" name="nom" id="" placeholder="Nom">

                            <button type="submit">Valider</button>
                        </form>

                        <form method="POST" action="{{route('create_info')}}">
                            {{csrf_field()}}
                            <input type="text" name="nom" placeholder="Nom">
                            <input type="text" name="prenom" placeholder="Prénom">
                            <input type="text" name="description" placeholder="Description">
                            <input type="float" name="lon" placeholder="Longitude">
                            <input type="float" name="lat" placeholder="Latitude">

                            <select name="categorie_id">
                                @foreach($errors as $item)

                                    <option value=" {{ $item['id'] }} ">
                                        {{ $item['nom'] }}
                                    </option>

                                @endforeach
                            </select>

                            <button type="submit">Valider</button>
                        </form>

                        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------




<table class="table">
        <thead>
          <tr>

            <th scope="col">categorie_id</th>
            <th scope="col">action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($info_categorie ?? '' as $item)
                <tr>

                    <td>
                        {{ $item['id'] }}
                        {{ $item['categorie_id'] }}
                    </td>
                    <td>

                        <form method="POST" action="{{route('delete')}}">

                                {{ csrf_field() }}

                            <input type="hidden" name="categorie_id" value="{{ $item['id'] }}">
                            <button type="submit">
                                Supprimer
                            </button>

                        </form>

                        <form method="POST" action="{{route('update')}}">

                            {{ csrf_field() }}

                        <input type="text" name="categorie_id" value="{{ $item['categorie_id'] }}">
                        <input type="text" name="info_id" value="{{ $item['info_id'] }}">
                        <input type="hidden" name="infocategorie_id" value="{{ $item['id'] }}">
                        <button type="submit">
                            update
                        </button>

                    </form>

                    </td>
                </tr>
            @endforeach


        </tbody>
      </table>


            </div>
        </div>
        </div>























































@endsection
