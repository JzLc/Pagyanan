@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 bg-slate-50 border-slate-900 text-start text-base font-medium text-slate-950 focus:outline-none focus:text-slate-900 focus:border-slate-900 focus:bg-slate-100 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 opacity-60 hover:opacity-90 border-transparent text-start text-base font-medium text-slate-900  hover:text-slate-800 hover:bg-slate-50 hover:border-slate-300 focus:outline-none focus:text-slate-900 focus:bg-gray-50 focus:border-slate-50  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
 