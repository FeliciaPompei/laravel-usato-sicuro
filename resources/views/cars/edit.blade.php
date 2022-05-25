@extends('layouts.base')

@section('title', 'Crea')

@section('header')
@include('partials.header')
@endsection

@section('main-content')
<div class="containe p-5 m-5 mx-auto my-input-bg-color">
    <div class="row justify-content-between">
        <div class="col-2 my-btn">
            <a href="{{route("cars.index")}}">
                Torna indietro
            </a>
        </div>
    </div>
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
            <form class="text-center" action="{{route("cars.update", $car)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <span class="input-group-text">Numero di telaio</span>
                    <input type="text" class="form-control" name="numero_telaio" value="{{$car->numero_telaio}}">
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
                    <input type="text" class="form-control" name="model" value="{{$car->model}}">
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
                    <input type="text" class="form-control" name="porte" value="{{$car->porte}} ">
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
                    <input type="text" class="form-control" name="data_immatricolazione" value="{{$car->data_immatricolazione}} ">
                </div>
                <div class="col-12">
                    @error('data_immatricolazione')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" name="brand_id" value="{{$car->brand_id}}">
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">
                                {{$brand->name}}
                            </option>
                        @endforeach
                    </select>
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
                    <input type="text" class="form-control" name="alimentazione" value="{{$car->alimentazione}} ">
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
                    <input type="text" class="form-control" name="prezzo" value="{{$car->prezzo}} ">
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
                    <input type="text" class="form-control" name="descrizione" value="{{$car->descrizione}} ">
                </div>
                <div class="col-12">
                    @error('descrizione')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="mb-3 d-flex">
                    <label for="color">Colore della macchina</label>
                        @foreach ($colors as $color)
                            <input type="color" class="form-control form-control-color" id="color" value="{{$color->color}}" title="Seleziona il colore della categoria"  disabled>
                            <input type="checkbox" name="color_id" value="{{$color->id}}"
                            @if ($car->colors->contains($color))
                                checked
                            @endif>
                        @endforeach
                </div>
                <div class="col-12">
                    @error('descrizione')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <button class="btn btn-outline-dark" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection

