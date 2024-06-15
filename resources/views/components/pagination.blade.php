@if (isset($paginator))
    @php
        $queryParams = (isset($appends) && gettype($appends) === 'array') ? '&'.http_build_query($appends) : '';
    @endphp
    <nav role="navigation" aria-label="Pagination Navigation" class="mt-3 align-items-center justify-content-center">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->isFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">{!! __('pagination.previous') !!}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="?page={{ $paginator->previousPage() }}{{ $queryParams }}" rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @if ($i == $paginator->currentPage())
                    <li class="page-item disabled" aria-current="page">
                        <span class="page-link">{{ $i }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="?page={{ $i }}{{ $queryParams }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor

            {{-- Next Page Link --}}
            @if (!$paginator->isLastPage())
                <li class="page-item">
                    <a class="page-link" href="?page={{ $paginator->nextPage() }}{{ $queryParams }}" rel="next">{!! __('pagination.next') !!}</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">{!! __('pagination.next') !!}</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
