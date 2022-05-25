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
            @switch($car->brand->name)
                    @case('citroen')
                        <img class="img-fluid" src="https://immagini.alvolante.it/sites/default/files/styles/image_gallery_big/public/news_galleria/2021/09/citroen-c3-2022-india-america-latina_2.jpg?itok=PerE0fEL"
                            alt="">
                    @break

                    @case('ford')
                        <img class="img-fluid" src="https://www.ford.it/content/dam/guxeu/de/vehicle-images/puma/ford-promotions-de-puma_st_line-16x9-2160x1215-grey-puma-st-line.jpg.renditions.original.png"
                            alt="">
                    @break

                    @case('maserati')
                        <img class="img-fluid" src="https://maserati.scene7.com/is/image/maserati/maserati/international/Models/default/2022/ghibli/gh_front.png?$600x2000$&fmt=png-alpha&fit=constrain"
                            alt="">
                    @break

                    @case('renault')
                        <img class="img-fluid" src="https://cdn.motor1.com/images/mgl/Zook3/s3/promozione-renault-arkana-hybrid.jpg"
                        alt="">
                        @break
                    @case('hummer')
                    <img class="img-fluid" src="https://www.reportmotori.it/wp-content/uploads/2021/03/Hummer-H1-Mil-Spec-Auto-610x349.jpg"
                        alt="">
                    @break
                @endswitch
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
                        <th scope="row">Colori</th>
                        <td>
                            @foreach ($car->colors as $color)
                            <span class="badge badge-pill w-50"
                            style="background-color:{{$color->color}} ">
                                {{-- @dump($color->color) --}}
                            </span>
                            @endforeach
                        </td>
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
            <h3>
                Altri macchine della stessa marca:
            </h3>
            @foreach ($car->brand->cars as $relativeCarBrand)
                <a href="{{route('cars.show', $relativeCarBrand)}} ">
                    <span>
                        Name: {{$relativeCarBrand->model}}
                    </span>
                    <span>
                        prezzo: {{$relativeCarBrand->prezzo}} euroiiiiis
                    </span>
                </a>
            @endforeach

        </div>
    </div>
</div>

@endsection






