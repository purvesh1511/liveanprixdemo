@php
$btnBase  = 'inline-flex items-center justify-center min-w-[2.5rem] h-10 px-3 rounded-xl text-sm font-medium border transition-all duration-200 select-none';
$btnLink  = 'bg-white/5 border-white/10 text-gray-400 hover:text-black hover:bg-[#00ffb3] hover:border-[#00ffb3]';
$btnOn    = 'bg-[#00ffb3] border-[#00ffb3] text-black shadow-[0_0_20px_rgba(0,255,179,0.35)]';
$btnOff   = 'bg-white/5 border-white/10 text-gray-600 cursor-not-allowed';
@endphp

@if($paginator->hasPages())
<nav role="navigation" aria-label="Blog pagination" class="flex items-center justify-center gap-1.5 sm:gap-2 flex-wrap">

    {{-- First page --}}
    @if($paginator->currentPage() > 2)
    <a href="{{ $paginator->url(1) }}" data-page="1"
        class="{{ $btnBase }} {{ $btnLink }} hidden sm:inline-flex" aria-label="First page">&laquo;</a>
    @else
    <span class="{{ $btnBase }} {{ $btnOff }} hidden sm:inline-flex" aria-hidden="true">&laquo;</span>
    @endif

    {{-- Previous --}}
    @if($paginator->onFirstPage())
    <span class="{{ $btnBase }} {{ $btnOff }}" aria-hidden="true">
        <i class="fas fa-angle-left"></i><span class="ml-1.5 hidden sm:inline">Prev</span>
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" data-page="{{ $paginator->currentPage() - 1 }}" rel="prev"
        class="{{ $btnBase }} {{ $btnLink }}">
        <i class="fas fa-angle-left"></i><span class="ml-1.5 hidden sm:inline">Prev</span>
    </a>
    @endif

    {{-- Page numbers (windowed) --}}
    @foreach($elements as $element)
        @if(is_string($element))
        <span class="w-8 h-10 inline-flex items-end justify-center pb-2 text-gray-600 select-none">&hellip;</span>
        @endif
        @if(is_array($element))
            @foreach($element as $page => $url)
                @if($page == $paginator->currentPage())
                <span data-page="{{ $page }}" aria-current="page"
                    class="{{ $btnBase }} {{ $btnOn }}">{{ $page }}</span>
                @else
                <a href="{{ $url }}" data-page="{{ $page }}"
                    class="{{ $btnBase }} {{ $btnLink }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next --}}
    @if($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" data-page="{{ $paginator->currentPage() + 1 }}" rel="next"
        class="{{ $btnBase }} {{ $btnLink }}">
        <span class="mr-1.5 hidden sm:inline">Next</span><i class="fas fa-angle-right"></i>
    </a>
    @else
    <span class="{{ $btnBase }} {{ $btnOff }}" aria-hidden="true">
        <span class="mr-1.5 hidden sm:inline">Next</span><i class="fas fa-angle-right"></i>
    </span>
    @endif

    {{-- Last page --}}
    @if($paginator->currentPage() < $paginator->lastPage() - 1)
    <a href="{{ $paginator->url($paginator->lastPage()) }}" data-page="{{ $paginator->lastPage() }}"
        class="{{ $btnBase }} {{ $btnLink }} hidden sm:inline-flex" aria-label="Last page">&raquo;</a>
    @else
    <span class="{{ $btnBase }} {{ $btnOff }} hidden sm:inline-flex" aria-hidden="true">&raquo;</span>
    @endif

</nav>
@endif
