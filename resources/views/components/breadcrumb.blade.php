@props(['links'])

{{-- BREADCRUMB STYLE --}}
<nav class="p-4 text-sm font-medium text-gray-500">
    <ul class="flex space-x-2 items-center">
        @foreach ($links as $link)
            <li>
                @if ($loop->last)
                    <span class="text-gray-800">{{ $link['label'] }}</span>
                @else
                    <a href="{{ $link['url'] }}" class="text-gray-500 hover:underline">{{ $link['label'] }}</a>
                    <span class="text-gray-400">></span>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
