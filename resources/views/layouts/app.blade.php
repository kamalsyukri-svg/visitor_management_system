<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('visitors') }}">Visitors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('visitors.create') }}">Create Visitor</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.create') }}">Create Blog</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.create') }}">Create User</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="notificationsDropdown" class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="{{ __('Notifications') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                    </svg>
                                    @if ($navbarUnreadCount > 0)
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.65rem;">
                                            {{ $navbarUnreadCount > 99 ? '99+' : $navbarUnreadCount }}
                                        </span>
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="notificationsDropdown" style="min-width: 320px; max-height: 360px; overflow-y: auto;">
                                    <div class="dropdown-header d-flex justify-content-between align-items-center">
                                        <span>{{ __('Notifications') }}</span>
                                        @if ($navbarUnreadCount > 0)
                                            <span class="badge bg-primary rounded-pill">{{ $navbarUnreadCount }}</span>
                                        @endif
                                    </div>
                                    @forelse ($navbarUnreadNotifications as $n)
                                        @php
                                            $ndata = $n->data ?? [];
                                            $nmessage = $ndata['message'] ?? class_basename($n->type);
                                        @endphp
                                        <a class="dropdown-item small py-2 border-bottom" href="{{ route('notifications.show', $n->id) }}">
                                            <div class="fw-semibold text-truncate">{{ $nmessage }}</div>
                                            <div class="text-muted" style="font-size: 0.75rem;">{{ $n->created_at->diffForHumans() }}</div>
                                        </a>
                                    @empty
                                        <div class="dropdown-item-text text-muted small py-3 text-center">{{ __('No unread notifications') }}</div>
                                    @endforelse
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item text-center small py-2 fw-semibold" href="{{ route('notifications.index') }}">{{ __('View all notifications') }}</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">{{ __('See Profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('authentication-logs.index') }}">{{ __('Authentication Logs') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
