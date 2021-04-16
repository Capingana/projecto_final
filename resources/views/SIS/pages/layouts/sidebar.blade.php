<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('home') }}" class="active"><i class="lnr lnr-home"></i>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i>
                        <span>Menu</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('usuario.index') }}"><i class="lnr lnr-users"></i>
                                    Usuários
                                    @inject('user', '\App\Models\User')
                                    <i class="badge badge-danger right">{{ $user->count() }}</i>
                                </a>
                            </li>
                            <li><a href="" class=""><i class="lnr lnr-user"></i>Estudantes

                                </a>
                            <li><a href="" class=""><i class="lnr lnr-map"></i>Disciplinas
                                    <i class="badge badge-danger right">0</i>
                                </a>
                            </li>
                            <li><a href="" class=""><i class="lnr lnr-inbox"></i>Cursos
                                    <i class="badge badge-danger right">0</i>
                                </a>
                            </li>
                            <li><a href="" class=""> <i class="lnr lnr-map"></i>Notas</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Configurações</span></a></li>
                <li><a href="#" class=""><i class="lnr lnr-map"></i> <span>Relatório</span></a></li>
            </ul>
        </nav>
    </div>
</div>
