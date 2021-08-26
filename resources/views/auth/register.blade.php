@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!--Nombre-->
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="NOMBRE" type="text"
                                           class="form-control @error('NOMBRE') is-invalid @enderror" name="NOMBRE"
                                           value="{{ old('NOMBRE') }}" required autocomplete="NOMBRE" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Apellido-->
                            <div class="form-group row">
                                <label for="APELLIDO"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="APELLIDO" type="text"
                                           class="form-control @error('APELLIDO') is-invalid @enderror" name="APELLIDO"
                                           value="{{ old('APELLIDO') }}" autocomplete="APELLIDO">

                                    @error('APELLIDO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Direccion-->
                            <div class="form-group row">
                                <label for="DIRECCION"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                                <div class="col-md-6">
                                    <input id="DIRECCION" type="text"
                                           class="form-control @error('DIRECCION') is-invalid @enderror"
                                           name="DIRECCION"
                                           value="{{ old('DIRECCION') }}" autocomplete="DIRECCION">

                                    @error('DIRECCION')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Telefono-->
                            <div class="form-group row">
                                <label for="TELEFONO"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                                <div class="col-md-6">
                                    <input id="TELEFONO" type="text"
                                           class="form-control @error('TELEFONO') is-invalid @enderror" name="TELEFONO"
                                           value="{{ old('TELEFONO') }}" autocomplete="TELEFONO">

                                    @error('TELEFONO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Celular-->
                            <div class="form-group row">
                                <label for="CELULAR"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                                <div class="col-md-6">
                                    <input id="CELULAR" type="text"
                                           class="form-control @error('CELULAR') is-invalid @enderror" name="CELULAR"
                                           value="{{ old('CELULAR') }}" autocomplete="CELULAR">

                                    @error('CELULAR')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--rol-->
                            <div class="form-group row">
                                <label for="CODROL"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                                <div class="col-md-6"
                                     value="{{ old('CODROL') }}" autocomplete="CODROL">
                                    <select name="CODROL" id="CODROL"
                                            class="form-control @error('CODROL') is-invalid @enderror">
                                        @foreach($roles as $rol)
                                            <option value={{$rol->CODROL}}>{{$rol->NOMBRE}}</option>
                                        @endforeach
                                    </select>
                                    @error('CODROL')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--email-->
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!--password-->
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
