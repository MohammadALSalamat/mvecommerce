@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="prev disabled">
            <span aria-label="@lang('pagination.previous')" aria-disabled="true">
                <i class="w-icon-long-arrow-left"></i>Prev
            </span>
        </li>
        @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')"
                aria-disabled="true">
                <i class="w-icon-long-arrow-left"></i>Prev
            </a>
        </li>

        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="disabled page-item" aria-disabled="true"><a class="page-link">{{ $element }}</a></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active" aria-current="page">
                        <a class="page-link">{{ $page }}
                        </a></li>
                    @else
                    <li class="page-item ">
                        <a href="{{ $url }}" class="page-link">
                            {{ $page }}
                        </a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="next">
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> Next <i
                    class="w-icon-long-arrow-right"></i></a>
        </li>
        @else
        <li class="disabled next" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true"> Next <i class="w-icon-long-arrow-right"></i></span>
        </li>
        @endif
    </ul>
@endif