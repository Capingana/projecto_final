<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('SIS.pages.layouts.head')

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href=""><img src="{{ asset('painel/img/sistema.png') }}" alt="SIS" class="img-responsive logo"></a>
            </div>
        </nav>
        <div class="main">
            <div class="main-content">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-sm-4 offset-sm-4">
                            <h1 class="text-center text-dark">{{ __('Logar') }}</h1>
                            <hr class="bg-dark">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" @error('email') is-invalid
                                        @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert-danger">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" @error('password') is-invalid @enderror
                                        name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Lembrar-me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="bg-dark">
                                <div class="form-group">
                                    <input type="submit" value="Entrar" class="btn btn-primary">
                                    <input type="reset" value="Limpar" class="btn btn-danger">
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="" href="">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('SIS.pages.layouts.footer')
    </div>
</body>
</html>
