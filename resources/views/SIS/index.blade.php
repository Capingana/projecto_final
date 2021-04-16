@extends('layouts.app')
@section('content')
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="lnr lnr-users"></i></span>
                    <p>
                        {{-- <span class="number text-primary">{{ $usuario->count() }}</span> --}}
                        <span class="number text-primary">00</span>
                        <span class="title"><a href="">Estudantes</a></span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon bg-dark"><i class="lnr lnr-users"></i></span>
                    <p>
                        <span class="number text-warning">00</span>
                        <span class="title"><a href="" class="text-warning">
                                Inscritos</a></span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon"><i class="lnr lnr-users"></i></span>
                    <p>
                        <span class="number text-success">00</span>
                        <span class="title "><a href="#" class="text-success">Selecionados</a></span>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric">
                    <span class="icon bg-danger"><i class="lnr lnr-users "></i></span>
                    <p>
                        <span class="number text-danger">00</span>
                        <span class="title"><a href="#">Reprovados</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
