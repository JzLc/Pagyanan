<div x-data="{ open: @entangle('isOpen') }" class="fixed z-10 inset-0 overflow-y-auto">
    <div x-show="open" class="modal">
        <div class="modal-content">
            <h2>User Details</h2>
            @if ($user)
                <p>Name: {{ $user->name }}</p>
                <p>Email: {{ $user->email }}</p>
                <!-- other user details -->
            @else
                {{-- <dd>asd</dd> --}}
                <p>No user data available.</p>
            @endif
            <button @click="open = false">Close</button>
        </div>
    </div>
</div>
