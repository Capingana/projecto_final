<!doctype html>
<html lang="pt-br">
    @include('SIS.pages.layouts.head')

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- Cima -->
        @include('SIS.pages.layouts.navbar')
        <!--Lateral-->
        @include('SIS.pages.layouts.sidebar')
        <!-- Conteudo geral -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <!-- Mudança de dizeres -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $titulo }}</h3>
                            <p class="panel-subtitle navbar-right"> <strong>{{ $data->now() }}</strong></p>
                        </div>
                        {{-- Conteudo principal --}}
                        @yield('content')
                    </div>
                </div>
                <!-- fim do conteudo principal -->
            </div>
            <div class="clearfix"></div>
            @include('SIS.pages.layouts.footer')
            {{-- Modal de sterminar a sessão --}}
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Clique em "Sair" para terminar a sessão.</div>
                        <div class="modal-footer">
                            <button class="btn btn-dark" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('SIS.pages.layouts.js')
</body>
</html>
