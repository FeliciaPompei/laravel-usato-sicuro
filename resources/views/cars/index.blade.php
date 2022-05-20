@extends('layouts.base')

@section('title', 'Lista')
@section('main-content')
<div class="container w-75 mx-auto">
    <div class="row justify-content-between">
        <div class="col-2">
            <a href="{{route("home")}}">
                <button class="btn btn-sm btn-info">
                    Torna indietro
                </button>
            </a>
        </div>

        <div class="col-3">
            <a href="{{route("cars.create")}}">
                <button class="btn btn-md btn-warning">
                    Aggiungi un'auto
                </button>
            </a>
        </div>
        
    </div>
    <div class="row justify-content-center text-center">
        @foreach ($cars as $car)
        <div class="col-6 p-3">
            <img src="{{$car->img_auto}} " alt="{{$car->model}} ">
        </div>
        <div class="col-6 p-3 text-start">
            <h1>
                {{$car->prezzo}}
            </h1>
            <a href="{{route('cars.show', $car->id)}} ">
                read more...
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection






