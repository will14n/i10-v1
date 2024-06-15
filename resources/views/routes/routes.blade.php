@extends('layout/structure')

@section('mainContent')
    <div class="album py-5 bg-our-theme h-100">
        <div class="container">
            @if (isset($routes))
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 shadow">
                    <table class="table table-bordered bg-third-our-theme">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="50%">type</th>
                                <th scope="col" class="text-center" width="50%">Endpoint</th>
                            </tr>
                        </thead>
                        @foreach ($routes as $type => $routeAsrray)
                            @foreach ($routeAsrray as $route)
                                @if ($route != 'api-routes')
                                    <tbody>
                                        <tr>
                                            <td scope="row" class="text-center">{{ $type }}</td>
                                            <td scope="row" class="text-center">/{{ $route }}</td>
                                        </tr>
                                    </tbody>
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
