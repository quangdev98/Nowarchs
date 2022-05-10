
@if ($paginator->hasPages())

<nav aria-label="Page navigation example" class="pagination-page">
    <ul class="pagination align-items-center justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
{{--                    <li class="page-item"><a class="page-link disable"><span aria-hidden="true"><img src="{{ asset('manager/images/prev.png') }}" alt=""></span></a></li>--}}
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><span aria-hidden="true"><i class="ri ri-arrow-left-s-line"></i></span></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item"><a class="page-link disable">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link active">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="ri ri-arrow-right-s-line"></i></a></li>
        @else
{{--                    <li class="page-item"><a class="page-link disable"><img src="{{ asset('manager/images/next.png') }}" alt=""></a></li>--}}
        @endif
    </ul>
</nav>
@endif
