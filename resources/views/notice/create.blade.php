@extends('layout/structure')

@section('mainContent')
    <section class="container">
        <form action="{{ route('notice.store') }}" method="POST" class="pt-5">
            @include('notice.partials.form')
        </form>
    </section>
@endsection
