@extends('layouts.app')
@section('content')
    <?php $enc = new App\Classes\Enc(); ?>


    <div class="container-fluid">
        <div class="row mb-2">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <div class="profile-center">
                        <a href="{{ route('usuario.index') }}" class="btn btn-primary"> Voltar</a>
                        <div class="profile-header">
                            <div class=""></div>
                            <div class="profile-main">
                                <img src="{{ asset('painel/img/user2.png') }}" class="img-circle" alt="Foto de perfil">
                                <h3 class="name text-primary"> {{ $user->name }}</h3>
                                <span class="online-status status-available text-danger"> Administrador do sistema</span>
                                <hr>
                            </div>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <ul class="list-unstyled list-justify">
                                    <li><strong>Número</strong><span>{{ $user->id }}</span></li>
                                    <li><strong>Telefone</strong> <span>(+222) 939172046</span></li>
                                    <li><strong>Email</strong><span>{{ $user->email }}</span></li>
                                    <li><strong>Registrado</strong> <span>{{ $user->created_at->diffForHumans() }}</span>
                                    <li><strong>Morada</strong><span>Huambo</span>
                                    <li><strong>Permissões</strong><span class=" text-danger">Controlo Total</span>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
