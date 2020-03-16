@extends('layouts.app')

@section('content')

    <br>
    <br>
    <center>
        <h1 id="test" >
            Ia'ora na !
        </h1>
    </center>

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



        </div>
    </div>
</div>























































@endsection
