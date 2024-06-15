<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Notices</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ URL::asset('css/app.css'); }}" rel="stylesheet" >
    </head>
    <body class="d-flex flex-column vh-100">
        <header data-bs-theme="dark">
            <div class="navbar bg-contrast-our-theme">
                <div class="container">
                    <div class="w-25">
                        <a href="{{ route('notice.index') }}" class="navbar-brand d-flex align-items-center">
                            <strong>TV JORNAL NOKIA</strong>
                        </a>
                    </div>
                    <div class="w-50 d-flex justify-content-around align-items-baseline">
                        <div>
                            <a href="{{ route('notice.create') }}">CADASTRAR NOTICIAS</a>
                        </div>
                        <div>
                            <a href="{{ route('notice.list') }}">LISTAR NOTICIAS</a>
                        </div>
                    </div>
                    <div class="input-group w-25 justify-content-end">
                        <?php
                            $path = explode('/',request()->getPathInfo());
                            if (end($path) == 'list') {
                                $url = 'notice.list';
                            } else {
                                $url = 'notice.index';
                            }
                        ?>
                        <form action="{{ route($url) }}" method="GET" class="d-flex">
                            <input type="text" class="form-control" name="filter"  id="searchHeaderInput" value="{{ old('filter') ?? request()->input('filter') }}">
                            {{-- <div class="input-group-append"> --}}
                                {{-- <a href="{{route('notice.index', $notice->id)}}" class="btn btn-outline-secondary"> --}}
                            <button class="btn btn-outline-secondary" id="searchHeaderButton" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </button>
                                {{-- </a> --}}
                                {{-- </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex-grow-1 bg-our-theme">
            @yield('mainContent')
        </main>
        <footer class="footer bg-contrast-our-theme">
            <div class="content text-center p-3">
                <b>DESENVOLVIDO POR DEV BRANDING</b>
            </div>
        </footer>

        <x-alert />
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
