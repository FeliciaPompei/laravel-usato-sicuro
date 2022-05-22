@extends('layouts.base')

@section('title', 'Lista')
@section('header')
@include('partials.header')
@endsection
@section('main-content')
<div class="my-bg-color">
    <div class="container w-75 mx-auto p-5">
        <div class="row justify-content-between">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{session('message')}}
                    </div>
                @endif
            </div>
            <div class="col-2 my-btn">
                <a href="{{route("home")}}">
                    Torna indietro
                </a>
            </div>

            <div class="col-3 my-btn">
                <a href="{{route("cars.create")}}">
                    Aggiungi un'auto
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
                <div class="col-3">
                    <form action="{{route('cars.destroy', $car)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-md btn-delete btn-danger" type="submit">
                                delete
                            </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection






