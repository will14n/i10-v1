@extends('layout/structure')

@section('mainContent')
    <div class="album py-5 bg-our-theme h-100">
        <div class="container">
            <div class="p-5 rounded bg-third-our-theme shadow">
                <h1>
                    {{ $notice->title }}
                </h1>
                <p class="lead">
                    {{ $notice->content }}
                </p>
                {{-- <a href="{{route('notice.edit', $notice->id)}}" class="btn btn-color">Editar </a>
                <form action="{{ route('notice.destroy', $notice->id) }}" method="POST" class="d-inline-block">
                    @csrf()
                    @method('DELETE')
                    <button type="submit" class="btn btn-color">Apagar</button>
                </form> --}}
            </div>
        </div>
    </div>
@endsection
