<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erraid</title>


    <!-- Styles -->
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/admin/admin_style.css') ?>">

</head>

<body>

    <!-- Side Navigation -->
    <nav class="side-nav">
        <div class="title">
            <h1>ERRAID</h1>
        </div>
        <ul>
            <li><a href="{{url('/admin')}}" class="{{ Request::is('admin') ? 'active' : null }}"><i class="fa fa-home" aria-hidden="true"></i> Comptes</a> </li>
            <li> <a href="{{url('/admin/planning')}}" class="{{ Request::is('admin/planning') ? 'active' : null }}"> <i class=" fa fa-calendar"></i>Planning</a> </li>
            <li><a href="{{url('/admin/comments')}}" class="{{ Request::is('admin/comments') ? 'active' : null }}"><i class=" fas fa-user-cog"></i> Commentaires</a> </li>
        </ul>
    </nav>
    <!-- End Side Navigation -->
    <!-- Header Section -->
    <header>
        <div class="search">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="search" id="search" placeholder="Recherche...">
        </div>
        <div class="logout">
            <a href="#">
                <i class="fas fa-sign-out-alt"></i>
                Deconnexion
            </a>

        </div>
    </header>
    <!-- End Header -->
    <div class="content-wrapper">
        @yield('content')

    </div>

    <script src="<?= asset('js/admin.js') ?>"></script>
</body>

</html>