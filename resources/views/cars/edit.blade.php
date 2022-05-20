@extends('layouts.base')
@section('title', 'Crea')
@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 py-3">
            <form class="text-center" action="{{route("cars.update", $car)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <span class="input-group-text">Numero di telaio</span>
                    <input type="text" class="form-control" name="numero_telaio" value="{{$car->numero_telaio}}">
                </div>
                @error('numero_telaio')
                    <h5 class="alert alert-danger">
                        {{ $message }}
                    </h5>
                @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text">Modello</span>
                    <input type="text" class="form-control" name="model" value="{{$car->model}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Porte</span>
                    <input type="text" class="form-control" name="porte" value="{{$car->porte}} ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Immatricolazione</span>
                    <input type="text" class="form-control" name="data_immatricolazione" value="{{$car->data_immatricolazione}} ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Marca</span>
                    <input type="text" class="form-control" name="marca" value="{{$car->marca}} ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Alimentazione</span>
                    <input type="text" class="form-control" name="alimentazione" value="{{$car->alimentazione}} ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Prezzo</span>
                    <input type="text" class="form-control" name="prezzo" value="{{$car->prezzo}} ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">descrizione della macchina</span>
                    <input type="text" class="form-control" name="descrizione" value="{{$car->descrizione}} ">
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
