@extends('layouts.base')
@section('title', 'Crea')
@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 py-3">
            <form class="text-center" action="{{route("cars.store")}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Numero di telaio</span>
                    <input type="text" class="form-control" name="numero_telaio">
                </div>
                @error('numero_telaio')
                    <h5 class="alert alert-danger">
                        {{ $message }}
                    </h5>
                @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text">Modello</span>
                    <input type="text" class="form-control" name="model">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Porte</span>
                    <input type="text" class="form-control" name="porte">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Immatricolazione</span>
                    <input type="text" class="form-control" name="data_immatricolazione">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Marca</span>
                    <input type="text" class="form-control" name="marca">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Alimentazione</span>
                    <input type="text" class="form-control" name="alimentazione">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Prezzo</span>
                    <input type="text" class="form-control" name="prezzo">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Descrizione</span>
                    <input type="text" class="form-control" name="descrizione">
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
