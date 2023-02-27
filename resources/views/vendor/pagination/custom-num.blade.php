
@if ($paginator->hasPages())

    <div class="flex-wr-c-c m-rl--7 p-t-28">

        {{-- Previous Page Link --}}

        @if ($paginator->onFirstPage())

            {{-- Empty --}}

        @else

            <a href="{{ $paginator->previousPageUrl() }}" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7"><i class="zmdi zmdi-arrow-left"></i></a>

        @endif

        {{-- Pagination Elements --}}

        @foreach ($elements as $element)

            {{-- "Three Dots" Separator --}}

            @if (is_string($element))

                <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">{{ $element }}</a>

            @endif

            {{-- Array Of Links --}}

            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">{{ $page }}</a>

                    @else

                        <a href="{{ $url }}" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">{{ $page }}</a>

                    @endif

                @endforeach

            @endif

        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            <a href="{{ $paginator->nextPageUrl() }}" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7"><i class="zmdi zmdi-arrow-right"></i></a>

        @else

            {{-- Empty --}}

        @endif

    </div>

@endif
