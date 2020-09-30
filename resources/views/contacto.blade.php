@extends('layout')

@section('title','CONTACTO')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">



            {{-- @include('partials.session-status') --}}

            <form class="bg-white shadow rounded py-3 px-4"
                method="POST"
                action="{{ route('contacto.index') }}">
                @csrf

                <h1 class="display-4">@lang('Contact')</h1>
                <hr>
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control bg-light shadow  @error('name') is-invalid @else border-0 @enderror"
                        name="name" placeholder="Escribe aqui tu nombre" value="{{ old('name')}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong> {{$message}} </strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label>{{ __('Email')}}</label>
                    <input class="form-control bg-light shadow  @error('email') is-invalid @else border-0 @enderror"
                    type="email" name="email" placeholder="Escribe aqui tu email" value="{{ old('email')}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control bg-light shadow  @error('subject') is-invalid @else border-0 @enderror"
                    name="subject" placeholder="Escribe aqui tu asunto" value="{{ old('subject')}}">
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                        <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control bg-light shadow  @error('content') is-invalid @else border-0 @enderror"
                    name="content" placeholder="Escribe aqui tu mensaje" value="{{ old('content')}}"></textarea><br>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                        <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <button class="btn  btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>


</div>
@endsection
