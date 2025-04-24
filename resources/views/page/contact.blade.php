{{-- <x-app-layout title="Contact Us">
    <div class="mx-auto mt-6 max-w-4xl rounded-lg bg-white p-6 shadow">
        <h1 class="mb-4 text-2xl font-bold text-gray-800">Contact Us</h1>

        <p class="mb-6 text-gray-600">
            We'd love to hear from you! Fill out the form below or reach us through the provided contact information.
        </p>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Contact Form -->
            <form action="{{ route('contact') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="4" required
                        class="mt-1 w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                </div>

                <button type="submit"
                    class="inline-flex items-center justify-center rounded bg-indigo-600 px-4 py-2 text-white transition hover:bg-indigo-700">
                    Send Message
                </button>
            </form>

            <!-- Contact Info -->
            <div class="space-y-4 rounded-lg bg-indigo-50 p-4 shadow">
                <div>
                    <h3 class="font-semibold text-gray-800">Address</h3>
                    <p class="text-gray-600">Bhatha Dasi, Rajapakar, Vaishali, Bihar</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Phone</h3>
                    <p class="text-gray-600">+91-9128289100</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Email</h3>
                    <p class="text-gray-600">info@anshumemorial.in</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout> --}}
<x-app-layout title="Contact Us">
    <x-slot name="header">
        <h1 class="mb-4 text-center text-3xl font-bold md:text-4xl">Contact Us</h1>
    </x-slot>
    <div class="mx-auto my-10 max-w-5xl rounded-2xl border-gray-200 bg-white p-8 lg:border lg:shadow-lg">
        <h1 class="mb-2 text-3xl font-extrabold text-indigo-700">Get in Touch</h1>
        <p class="mb-8 text-lg text-gray-600">
            Have any questions or feedback? We'd love to hear from you!
        </p>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
            <!-- Contact Form -->
            <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-2 shadow-sm transition focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-2 shadow-sm transition focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="message" class="block text-sm font-semibold text-gray-700">Your Message</label>
                    <textarea name="message" id="message" rows="5" required
                        class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-2 shadow-sm transition focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>

                <button type="submit"
                    class="w-full rounded-xl bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    📩 Send Message
                </button>
            </form>

            <!-- Contact Info -->
            <div class="space-y-6 rounded-xl bg-indigo-50 p-6 shadow-inner">
                <div>
                    <h3 class="mb-1 text-lg font-bold text-gray-800">📍 Address</h3>
                    <p class="text-gray-600">Bhatha Chowk, Bhatha Dasi, Rajapakar, Vaishali, Bihar</p>
                </div>
                <div>
                    <h3 class="mb-1 text-lg font-bold text-gray-800">📞 Phone</h3>
                    <p class="text-gray-600">+91-9128289100</p>
                </div>
                <div>
                    <h3 class="mb-1 text-lg font-bold text-gray-800">✉️ Email</h3>
                    <p class="text-gray-600">info@anshumemorial.in</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
