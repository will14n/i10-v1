@if ($errors->any())
    <section class="position-absolute bottom-0" style="right: 15px; z-index: 1000;">
        @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    </section>
@endif
