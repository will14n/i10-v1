@csrf()
<div class="form-group mb-3">
    <label for="title"><b>Título</b></label>
    <input type="text" class="form-control" name="title" value="{{ $notice->title ?? old('title') }}" placeholder="Preencha o título">
</div>
<div class="form-group mb-3">
    <label for="content"><b>Categoria</b></label>
    <div class="input-group">
        <select class="form-select form-control" name="category_id"  aria-label="Example select with button addon">
            <option value="" selected>Escolha...</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
        <a href="{{ route('category.create') }}" class="btn btn-color" type="button">Cadastrar Categoria</a>
    </div>
</div>
<div class="form-group mb-3">
    <label for="content"><b>Conteúdo</b></label>
    <textarea class="form-control" name="content" rows="3" cols="50" placeholder="Preencha o conteúdo">{{ $notice->content ?? old('content') }}</textarea>
</div>
<button type="submit" class="btn btn-color">Salvar</button>
