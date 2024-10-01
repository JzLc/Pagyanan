<div>
    <div class="fixed inset-0 flex items-center justify-center" style="background-color: rgba(0, 0, 0, 0.5);"
        x-data="{ open: @entangle('isOpen') }" x-show="open">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full" @click.away="$wire.closeModal()">
            <h2 class="text-xl font-bold mb-4">User Information</h2>

            @if ($user)
                <div class="mb-2">
                    <p><strong>Name:</strong> {{ $user['name'] }}</p>
                    <p><strong>Email:</strong> {{ $user['email'] }}</p>
                    <p><strong>Role:</strong> {{ $user['role'] }}</p>
                    <p><strong>Joined:</strong>
                        {{ \Carbon\Carbon::parse($user['created_at'])->toFormattedDateString() }}</p>
                </div>
            @else
                <p>No user data available.</p>
            @endif

            <button class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                wire:click="close">Close</button>
        </div>
    </div>

</div>
