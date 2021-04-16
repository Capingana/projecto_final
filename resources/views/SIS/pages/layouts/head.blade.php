<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Titulo -->
    <title>{{ config('app_name', 'Sistema de seleção') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <!-- Fim Scripts -->
    <!-- Fontes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('painel/img/sis.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('painel/img/sis.png') }}">
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('painel/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('painel/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('painel/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('painel/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('painel/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('painel/css/main.css') }}">
    <!-- Para reescrever seu projecto -->
    <link rel="stylesheet" href="{{ asset('painel/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
</head>
