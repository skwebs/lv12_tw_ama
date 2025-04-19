{{-- <x-app-layout title="Contact Us">
    <div class="rounded-lg bg-white p-6 shadow">
        <h1 class="mb-4 text-3xl font-bold text-gray-800">Contact Us</h1>
        <p class="mb-4 text-gray-600">
            We would love to hear from you! Please fill out the form below to get in touch with us.
        </p>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="rounded-lg bg-blue-50 p-4">
                <h2 class="text-xl font-semibold text-blue-600">Contact Information</h2>
                <p class="text-gray-600">Email: 2KZoI@example.com</p>
                <p class="text-gray-600">Phone: +1 (123) 456-7890</p>
                <p class="text-gray-600">Address: 123 Main St, City, Country</p>
            </div>
            <div class="rounded-lg bg-green-50 p-4">
                <h2 class="text-xl font-semibold text-green-600">Contact Form</h2>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="mt-2 inline-block rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</x-app-layout> --}}
<x-app-layout title="Contact Us">
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

</x-app-layout>
