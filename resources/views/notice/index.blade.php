@extends('layout/structure')

@section('mainContent')
    <div class="album py-4 bg-our-theme h-100">
        <div class="container">
            @if (count($notices) > 0)
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($notices as $notice)
                        <div class="col">
                            <div class="card shadow bg-third-our-theme">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $notice['title'] }}</h5>
                                    <p class="card-text">{{ $notice['content'] }}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('notice.show', $notice['id']) }}" class="btn btn-color">Acessar</a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="d-flex justify-content-center">
                    Não encontramos nenhum conteúdo.
                </div>
            @endif
        </div>
    </div>
@endsection
