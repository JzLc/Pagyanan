<section id="contact" class="bg-white py-16 ">
    <div class="max-w-7xl mx-auto text-center p-4 border-t border-gray-200">
        <h2 class="text-4xl font-bold">Contact Us</h2>
        <p class="mt-4 text-gray-600">Have any questions? Reach out to us anytime!</p>
        <form action="{{ route('contact.send') }}" method="POST" class="mt-8 max-w-lg mx-auto">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <input type="text" id="name" name="name" class="w-full border-gray-300 rounded-lg shadow-sm"
                    placeholder="Your Name" value="{{ old('name') }}" required>
                @error('name')
                    <span style="color: red;">{{ $message }}</span><br>
                @enderror
                <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-lg shadow-sm"
                    placeholder="Your Email" value="{{ old('email') }}" required>
                @error('email')
                    <span style="color: red;">{{ $message }}</span><br>
                @enderror
                <textarea id="message" name="message" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm"
                    placeholder="Your Message" required>{{ old('message') }}</textarea>
                @error('message')
                    <span style="color: red;">{{ $message }}</span><br>
                @enderror
            </div>
            <button type="submit"
                class="mt-4 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-md">
                Send Message</button>
        </form>
        @if (session('success'))
            <div class="flex justify-center py-2">
                <p class="text-green-600 mx-auto text-1xl">{{ session('success') }}</p>
            </div>
        @endif
    </div>
</section>
