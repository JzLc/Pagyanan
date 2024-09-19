@if (!Request::is('login') && !Request::is('register'))
    <img src="{{ asset('images/Pagyanan-logo.svg') }}" class="h-12 w-12" alt="Pagyanan Logo" />
@else
    <img src="{{ asset('images/Pagyanan-logo.svg') }}" class="h-20 w-20" alt="Pagyanan Logo" />
@endif
