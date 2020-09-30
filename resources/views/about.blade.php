@extends('layout')

@section('title','ABOUT')

@section('content')
<div class="container">
    <div class="row">
        <div   div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="FabricaSotware">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quién soy??</h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, corporis quia?
                Itaque neque nulla natus ipsam, quam sapiente laudantium reiciendis, officia
                adolor beatae quo maiores omnis! Dolor similique excepturi ab?
            </p>
            <a class="btn btn-primary btn-lg btn-block" href="{{route('contacto')}}">Contactame</a>
            <a class="btn btn-outline-primary btn-lg btn-block " href="{{route('projects.index')}}">Portafolio</a>
        </div>

    </div>
</div>
@endsection
