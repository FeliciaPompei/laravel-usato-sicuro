@extends('layouts.base')

@section('title', 'Lista')

@section('header')
@include('partials.header')
@endsection

@section('main-content')
<div class="container w-75 mx-auto p-5">
    <div class="row justify-content-between">
        @if (session('message'))
            <div class="alert alert-warning">
                {{session('message')}}
            </div>
        @endif
        @if (session('msg'))
            <div class="alert alert-success">
                {{session('msg')}}
            </div>
        @endif
        <div class="col-3 my-btn">
            <a href="{{route("cars.index")}}">
                Torna indietro
            </a>
        </div>
        <div class="col-2 my-btn">
            <a href="{{route("cars.edit", $car)}}">
                Edit Car
            </a>
        </div>
    </div>
    <div class="row justify-content-center align-items-center text-center p-3">
        <div class="col-6 p-3">
            <img src="{{$car->img_auto}} " alt="{{$car->model}} ">
        </div>
        <div class="col-6 p-3 text-start">
            <table class="table table-dark table-striped">
                <tbody>
                    <tr class="text-center">
                        <th scope="row">Marca</th>
                        <td>{{$car->brand->name}}</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row">Modello</th>
                        <td>{{$car->model}}</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row">Porte</th>
                        <td>{{$car->porte}}</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row">data di Immatricolazione</th>
                        <td>{{$car->data_immatricolazione}}</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row">dscrizione dell'auto</th>
                        <td>{{$car->descrizione}}</td>
                    </tr>
                    <tr class="text-center">
                        <th scope="row">prezzo</th>
                        <td>€ {{$car->prezzo}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 my-btn d-flex justify-content-between my-btn-size">
            <a class="a-hover" href="{{route("cars.show", $car->id-1)}}">
                &#8656;
            </a>
            <a class="a-hover" href="{{route("cars.show", $car->id+1)}}">
                &#8658;
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{-- @foreach ($car->brand->cars as $relativeCarBrand)
                <a href="{{route('cars.show', $relativeCarBrand)}} ">
                    <h1>
                        {{$relativeCarBrand->name}}
                    </h1>
                </a>
            @endforeach --}}
        </div>
    </div>
</div>

@endsection






