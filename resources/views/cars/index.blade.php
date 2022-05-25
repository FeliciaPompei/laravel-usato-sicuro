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
            <div class="col-3 my-btn">
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
        <div class="row justify-content-center text-center align-items-center p-3">
            @foreach ($cars as $car)
                <div class="col-5 p-3">
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
                <div class="col-5 p-3 text-start">
                    <table class="table table-dark table-striped">
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">Marca</th>
                                <td>{{Str::ucfirst($car->brand->name)}}</td>
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
                                <th scope="row">Colori</th>
                                <td>
                                    @foreach ($car->colors as $color)
                                    <span class="badge badge-pill w-50"
                                    style="background-color:{{$color->color}} ">
                                    </span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">prezzo</th>
                                <td>€ {{$car->prezzo}}</td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2">
                                    <div class="my-btn">
                                        <a href="{{route('cars.show', $car->id)}}">
                                            read more...
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2">
                                    <form action="{{route('cars.destroy', $car)}}" method="POST" class="car-destroyer" car-name="{{ucfirst($car->marca)}}">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-md btn-delete btn-outline-danger" type="submit">
                                                delete
                                            </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('footer-script')
<script>
    const deleteForms = document.querySelectorAll('.car-destroyer');
    deleteForms.forEach(singleForm => {
        singleForm.addEventListener('submit', function (event) {
            event.preventDefault();
            userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('car-name')}?` );
            if (userConfirmation) {
                this.submit();
            }
        })
    });
</script>
@endsection






