@extends('layout/structure')

@section('mainContent')
    <section class="container">
        <form action="{{ route('category.store') }}" method="POST" class="pt-5">
            @csrf()
            <div class="form-group mb-3">
                <label for="title"><b>Categoria</b></label>
                <input type="text" class="form-control" name="title" value="{{ $category->title ?? old('title') }}" placeholder="Preencha a categoria">
            </div>
            <button type="submit" class="btn btn-color">Salvar</button>
        </form>
    </section>
@endsection
