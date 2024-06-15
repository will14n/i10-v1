@extends('layout/structure')

@section('mainContent')
    <section class="container mt-5">
        <form action="{{ route('notice.update', $notice['id']) }}" method="POST">
            @method('PUT')
            @include('notice.partials.form', [
                'notice' => $notice,
            ])
        </form>
    </section>
@endsection
