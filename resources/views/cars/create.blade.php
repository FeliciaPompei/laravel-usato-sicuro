@extends('layouts.base')
@section('title', 'Crea')
@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-6 py-3">
            <form class="text-center" action="{{route("cars.store")}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Numero di telaio</span>
                    <input type="text" class="form-control" name="numero_telaio">
                </div>
                <div class="col-12">
                    @error('numero_telaio')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Modello</span>
                    <input type="text" class="form-control" name="model">
                </div>
                <div class="col-12">
                    @error('model')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Porte</span>
                    <input type="text" class="form-control" name="porte">
                </div>
                <div class="col-12">
                    @error('porte')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Immatricolazione</span>
                    <input type="text" class="form-control" name="data_immatricolazione">
                </div>
                <div class="col-12">
                    @error('data_immatricolazione')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Marca</span>
                    <input type="text" class="form-control" name="marca">
                </div>
                <div class="col-12">
                    @error('marca')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Alimentazione</span>
                    <input type="text" class="form-control" name="alimentazione">
                </div>
                <div class="col-12">
                    @error('alimentazione')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Prezzo</span>
                    <input type="text" class="form-control" name="prezzo">
                </div>
                <div class="col-12">
                    @error('prezzo')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">descrizione della macchina</span>
                    <input type="text" class="form-control" name="descrizione">
                </div>
                <div class="col-12">
                    @error('descrizione')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection

