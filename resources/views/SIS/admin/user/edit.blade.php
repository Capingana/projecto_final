@extends('layouts.app')
@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <a href="{{ route('usuario.index') }}" class="btn btn-primary ">Voltar</a>
            <hr>
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="panel ">
                        <div class="panel-body ">
                            <form action="{{ route('usuario.actualizar', $users->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" placeholder="Nome completo" name="name" type="text"
                                            value="{{ $users->name }}">
                                    </div>
                                </div>
                                <label for="email">Email </label>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com"
                                        value="{{ $users->email }}" name="email">
                                </div>
                                <label for="telefone">Senha</label>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="senha" placeholder="********"
                                        name="password">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <div class="input-group">
                                        <input class="form-control" type="file" name="image" value="{{ $users->foto }}">
                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn-sm btn-success">Actualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="panel ">
                        <div class="panel-heading ">
                            <div class="panel">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $erro)
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <i class="fa fa-times-circle"></i> {{ $erro }}
                                        </div>
                                    @endforeach
                                @endif
                                <div class="panel-body no-padding bg-info text-center">
                                    <h3>Perfil</h3>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <select name="role_id" class="form-control">
                                <option value="0">Escolha o perfil...</option>
                                @foreach ($perfil as $role)
                                    <option value="{{ $role->id }}"
                                        class="form-control @error('role_id') is-invalid @enderror">{{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
