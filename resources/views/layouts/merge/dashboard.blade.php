<!DOCTYPE html>
<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <title>@yield('title', 'Sistema de Gestão Operativa')</title>
    @include('layouts._includes.dashboard.Header')
</head>

<body class="bg-gray-100 font-sans">

<div class="flex h-screen">
    
    @include('layouts._includes.dashboard.Aside')
    
    @yield('content')

</div>

</body>

@include('layouts._includes.dashboard.Footer')

</html>
