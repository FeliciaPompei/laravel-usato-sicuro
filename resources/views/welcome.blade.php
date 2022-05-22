@extends('layouts.base')

@section('title', 'Welcome')

@section('main-content')
    <div class="my-img-wrapper position-relative">
        <img class="img-fluid"src="https://media.architecturaldigest.com/photos/5ced629704c41e1a9b9a8bcf/4:3/w_2248,h_1686,c_limit/Bugatti-LVN-7%20%5BBugatti%5D.jpg" alt="Bugatti Varon">
        <div class="my-button-position my-btn">
            <a href="{{route('cars.index')}}">
                Start my search
            </a>
        </div>
    </div>
@endsection
