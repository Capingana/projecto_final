<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="#"><img src="{{ asset('painel/img/sistema.png') }}" alt="SIS" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div class="navbar-form navbar-left">
            <a href=""><button type="button" class="btn btn-default"><i class="fa fa-plus-square"></i>
                    Inscrição </button></a>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge bg-danger">5</span>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Obrigado
                                pela oprtunidade...</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Não consigo
                                aceder ao meu e-mail...</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Quando é
                                que começa as novas candidaturas...</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Não
                                consigo ver meus dados anteriores...</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>É possivel
                                concorrer mais de 5 vezes?...</a></li>
                        <li><a href="#" class="more">Ver todas as mensagens</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i>
                        <span>Ajuda</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Como Instalar o SIS.</a></li>
                        <li><a href="#">Como realizar a inscrição.</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                            src="{{ asset('painel/img/user.jpg') }}" class="img-circle" alt="Avatar">
                        <span>Logado</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>Perfil</span></a></li>
                        <li><a href="#"><i class="lnr lnr-cog"></i> <span>Configurações</span></a></li>

                        <li>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="lnr lnr-exit"></i><span>Sair</span></a>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
