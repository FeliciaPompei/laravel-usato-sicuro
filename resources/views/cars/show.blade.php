@extends('layouts.base')

@section('title', 'Lista')
@section('main-content')
<div class="container w-75 mx-auto">
    <div class="row justify-content-between">
        <div class="col-2">
            <a href="{{route("cars.index")}}">
                <button class="btn btn-sm btn-info">
                    Torna indietro
                </button>
            </a>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-6 p-3">
            <img src="{{$car->img_auto}} " alt="{{$car->model}} ">
        </div>
        <div class="col-6 p-3 text-start">
            <h1>
                {{$car->prezzo}}
            </h1>
            <p>
                {{$car->descrizione}}
            </p>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-3">
            <a href="{{route("cars.show", $car->id-1)}}">
                <button class="btn btn-md btn-warning">
                    <-
                </button>
            </a>
        </div>
        <div class="col-3">
            <a href="{{route("cars.show", $car->id+1)}}">
                <button class="btn btn-md btn-warning">
                    ->
                </button>
            </a>
        </div>
    </div>
</div>

@endsection






