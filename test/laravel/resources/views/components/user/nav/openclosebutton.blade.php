@props(['open' => true])

<button aria-label="{{ $open ? 'open' : 'close' }}" id="{{ $open ? 'open' : 'close' }}"
    onclick="showNav({{ $open }})"
    class="{{ $open ? 'hidden' : '' }} focus:outline-none focus:ring-2">
    <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        @if ($open)
            <path d="M4 6H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M4 12H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M4 18H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        @else
            <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6 6L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        @endif
    </svg>
</button>
