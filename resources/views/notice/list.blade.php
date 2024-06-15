@extends('layout/structure')

@section('mainContent')
    <div class="album py-5 bg-our-theme h-100">
        <div class="container">
            @if (count($notices['data']) > 0)
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 shadow">
                    <table class="table table-bordered bg-third-our-theme">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="3%">ID</th>
                                <th scope="col" width="45%">TÍTULO</th>
                                <th scope="col" width="25%">CATEGORIA</th>
                                {{-- <th scope="col">CONTEÚDO</th> --}}
                                <th scope="col" class="text-center" "></th>
                            </tr>
                        </thead>
                        @foreach ($notices['data'] as $notice)
                            <tbody>
                                <tr>
                                    <td scope="row" class="text-center">{{ $notice['id'] }}</td>
                                    <td>{{ $notice['title'] }}</td>
                                    <td>{{ $notice['categories']['title'] ?? '' }}</td>
                                    {{-- <td>{{ $notice['content'] }}</td> --}}
                                    <td class="text-center">
                                        <a href="{{route('notice.show', $notice['id'])}}" class="btn btn-color">Visualizar</a>
                                        <a href="{{route('notice.edit', $notice['id'])}}" class="btn btn-color">Editar</a>
                                        <form action="{{ route('notice.destroy', $notice['id']) }}" method="POST" class="d-inline-block">
                                            @csrf()
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-color">Apagar</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            @else
                <div class="d-flex justify-content-center">
                    Não encontramos nenhum conteúdo.
                </div>
            @endif
        </div>
    </div>
@endsection
