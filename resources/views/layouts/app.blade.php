<!DOCTYPE html>
<html lang="ar" dir="rtl" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
        @stack('styles')
        @livewireStyles
    </head>
    <body class="bg-primary-subtle">
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <ul class="nav me-lg-auto mb-2 justify-content-center mb-md-0">
                        @hasrole('participant')
                            <li><a href="{{ route('dashboard') }}" class="nav-link px-2 {{ request()->routeIs('dashboard') ? 'text-secondary' : 'text-white' }}">المشاركين</a></li>
                        @endhasrole
                        @hasrole('presenter')
                            <li><a href="{{ route('queue') }}" class="nav-link px-2 {{ request()->routeIs('queue') ? 'text-secondary' : 'text-white' }}">الطلبات</a></li>
                        @endhasrole
                        @hasrole('presenter|viewer')
                            <li><a href="#" class="nav-link px-2 text-white">الترتيبات</a></li>
                        @endhasrole
                    </ul>
                    <form method="POST" action="{{ route('logout') }}" class="end-">
                        @csrf

                        <button type="submit" class="btn btn-sm btn-warning">
                            تسجيل الخروج
                        </button>
                    </form>
                </div>
            </div>
        </header>
        <div  class="container p-4" id="main-container">
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        @stack('scripts')
        @livewireScripts
    </body>
</html>
