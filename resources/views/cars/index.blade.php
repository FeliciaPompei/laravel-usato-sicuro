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
                    <img class="img-fluid" src="{{$car->img_auto}} " alt="{{$car->model}} ">
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






