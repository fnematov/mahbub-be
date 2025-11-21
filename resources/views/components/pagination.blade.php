@if ($paginator->hasPages())
    <nav role="navigation" class="flex items-center space-x-2">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 bg-white text-gray-400 border rounded-xl cursor-not-allowed select-none">
                ‹
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
               class="px-4 py-2 bg-white border rounded-xl hover:bg-gray-100 transition">
                ‹
            </a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            {{-- Separator --}}
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-400">{{ $element }}</span>
            @endif

            {{-- Page Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="px-4 py-2 bg-primary-green text-white border border-primary-green rounded-xl font-medium">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}"
                           class="px-4 py-2 bg-white border rounded-xl hover:bg-gray-100 transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
               class="px-4 py-2 bg-white border rounded-xl hover:bg-gray-100 transition">
                ›
            </a>
        @else
            <span class="px-4 py-2 bg-white text-gray-400 border rounded-xl cursor-not-allowed select-none">
                ›
            </span>
        @endif

    </nav>
@endif
