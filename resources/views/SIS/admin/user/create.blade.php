@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <a href="{{ route('usuario.index') }}" class="btn btn-primary ">Voltar</a>
            <hr>
            @if (Session::has('mensagem'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{ Session::get('mensagem') }}
                </div>
            @endif
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="panel ">
                        <div class="panel-body ">
                            <form action="{{ route('usuario.store') }}" method="post" role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label ">Nome Completo</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" autocomplete="name" autofocus
                                            placeholder="Inserir nome completo">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="email">E-mail </label>
                                <div class="mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email"
                                        placeholder="usuario@gmail.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <label> Senha</label>
                                <div class="mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password" placeholder="Inserir senha">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <div class="input-group">
                                        <input class="form-control" type="file" name="image" value="{{ old('image') }}">
                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="panel ">
                        <div class="panel-heading ">
                            <div class="panel">
                                <div class="panel-body no-padding bg-info text-center">
                                    <h3>Status</h3>
                                </div>

                            </div>
                            <div class="input-group">
                                <div class=" ">
                                    <input id="status" type="text"
                                        class="form-control @error('status') is-invalid @enderror" name="status"
                                        value="{{ old('status') }}" autocomplete="status" placeholder="status de usuário">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="{{ route('usuario.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    @endsection
