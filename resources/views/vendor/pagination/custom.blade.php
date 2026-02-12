@if ($paginator->hasPages())
    <div class="post_pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- Disable previous link if on first page --}}
                <li><a href="javascript:void(0)" style="opacity: 0.5; pointer-events: none;"><i
                            class="fa-solid fa-arrow-left-long"></i></a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa-solid fa-arrow-left-long"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><a href="javascript:void(0)">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="javascript:void(0)">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa-solid fa-arrow-right-long"></i></a></li>
            @else
                {{-- Disable next link if on last page --}}
                <li><a href="javascript:void(0)" style="opacity: 0.5; pointer-events: none;"><i
                            class="fa-solid fa-arrow-right-long"></i></a></li>
            @endif
        </ul>
    </div>
@endif