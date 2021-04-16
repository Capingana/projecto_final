@extends('layouts.app')
@section('content')
    <div class="panel-body">
        <div class="row">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                @if (Session::has('mensagem'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <i class="fa fa-check-circle"></i> {{ Session::get('mensagem') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('usuario.registrar') }}" class="navbar-form navbar-left btn btn-primary">
                            <i class="fa fa-user-plus"></i> Novo</i>
                        </a>
                        <form class="navbar-form navbar-right" method="Post" action="">
                            @csrf
                            <div class="input-group">
                                <input wire:model='search' type="text" value="" class="form-control"
                                    placeholder="Procurar por..." name="search">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Pesquisar
                                    </button>
                                </span>
                            </div>
                            <hr>
                        </form>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Cadastrado</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr width="190px">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <a href="" title="Detalhe" class="btn btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="" title="Editar" class="btn btn-sm btn-info">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete-user">
                                                <i class="fa fa-trash btn btn-danger"></i></a>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-primary"> {{ $users->links() }} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal excluir --}}
    <div class="modal fade" id="delete-user" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h4 class="modal-title">Tem certeza que deseja excluir este usuário ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action=" " method="Get" name="FormDeleteUser" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Não</button>
                        <button type="button" class="btn btn-danger">Sim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
