@php
    $navLinks = config('nav');
@endphp
<footer class="mt-auto bg-gray-900 text-gray-300">
    <div class="container mx-auto grid grid-cols-1 gap-8 px-4 py-10 md:grid-cols-4">

        <!-- School Info -->
        <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Anshu Memorial Academy</h3>
            <p class="text-sm leading-relaxed">
                A CBSE pattern school nurturing young minds from Play Group to Class 8 since 2017.
            </p>
        </div>

        <!-- Contact Info -->
        <div>
            <h4 class="text-md mb-2 font-semibold text-white">Contact Us</h4>
            <ul class="space-y-1 text-sm">Bhatha Dasi, Rajapakar, Vaishali, Bihar</li>
                <li><span class="font-medium">Phone:</span> +91-9128289100</li>
                <li><span class="font-medium">Email:</span> info@anshumemorial.in</li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-md mb-2 font-semibold text-white">Quick Links</h4>
            <ul class="space-y-1 text-sm">
                @foreach ($navLinks as $link)
                    <li><a href="{{ route($link['route']) }}"
                            class="transition hover:text-indigo-400">{{ $link['label'] }}</a></li>
                @endforeach
                {{-- <li><a href="{{ route('home') }}" class="transition hover:text-indigo-400">Home</a></li>
                <li><a href="{{ route('about') }}" class="transition hover:text-indigo-400">About Us</a></li>
                <li><a href="{{ route('courses') }}" class="transition hover:text-indigo-400">Courses</a></li>
                <li><a href="{{ route('contact') }}" class="transition hover:text-indigo-400">Contact</a></li> --}}
            </ul>
        </div>

        <!-- Social Media -->
        <div>
            <h4 class="text-md mb-2 font-semibold text-white">Follow Us</h4>
            <div class="flex space-x-4">
                <a href="#" class="transition hover:text-blue-500" aria-label="Facebook">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5.01 3.66 9.15 8.44 9.88v-6.99H7.9v-2.89h2.54V9.41c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.89h-2.34v6.99C18.34 21.22 22 17.08 22 12.07z" />
                    </svg>
                </a>
                <a href="#" class="transition hover:text-blue-400" aria-label="Twitter">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 001.89-2.38 8.59 8.59 0 01-2.73 1.05 4.27 4.27 0 00-7.29 3.89 12.12 12.12 0 01-8.8-4.47 4.27 4.27 0 001.32 5.69 4.22 4.22 0 01-1.93-.53v.05a4.28 4.28 0 003.43 4.18 4.26 4.26 0 01-1.93.07 4.28 4.28 0 003.99 2.97A8.58 8.58 0 012 19.54 12.07 12.07 0 008.29 21c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.35-.01-.53A8.35 8.35 0 0022.46 6z" />
                    </svg>
                </a>
                <a href="#" class="transition hover:text-pink-500" aria-label="Instagram">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zm0 1.5h8.5A4.25 4.25 0 0120.5 7.75v8.5A4.25 4.25 0 0116.25 20.5h-8.5A4.25 4.25 0 013.5 16.25v-8.5A4.25 4.25 0 017.75 3.5zm8.75 2a1 1 0 100 2 1 1 0 000-2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 1.5a3.5 3.5 0 110 7 3.5 3.5 0 010-7z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="mt-6 border-t border-gray-700">
        <div
            class="container mx-auto flex flex-col items-center justify-between px-4 py-6 text-xs text-gray-400 md:flex-row">
            <p>&copy; {{ date('Y') }} Anshu Memorial Academy. All rights reserved.</p>
            <div class="mt-2 space-x-4 md:mt-0">
                <a href="#" class="transition hover:text-indigo-400">Privacy Policy</a>
                <a href="#" class="transition hover:text-indigo-400">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

{{-- <footer class="mt-auto bg-gray-900 text-gray-300">
    <div class=""></div>
    <div class=":bg-red-400 container mx-auto grid grid-cols-1 gap-8 px-4 py-10 md:grid-cols-4">

        <!-- School Info -->
        <div>
            <h3 class="mb-2 text-lg font-semibold text-white">Anshu Memorial Academy</h3>
            <p class="text-sm leading-relaxed">
                A CBSE pattern school nurturing young minds from Play Group to Class 8 since 2017.
            </p>
        </div>

        <!-- Contact Info -->
        <div>
            <h4 class="text-md mb-2 font-semibold text-white">Contact Us</h4>
            <ul class="space-y-1 text-sm">
                <li><span class="font-medium">Address:</span> [Your School Address Here]</li>
                <li><span class="font-medium">Phone:</span> +91-XXXXXXXXXX</li>
                <li><span class="font-medium">Email:</span> info@ama-school.com</li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-md mb-2 font-semibold text-white">Quick Links</h4>
            <ul class="space-y-1 text-sm">
                <li><a href="{{ route('home') }}" class="transition hover:text-indigo-400">Home</a></li>
                <li><a href="{{ route('about') }}" class="transition hover:text-indigo-400">About Us</a></li>
                <li><a href="{{ route('courses') }}" class="transition hover:text-indigo-400">Courses</a></li>
                <li><a href="{{ route('contact') }}" class="transition hover:text-indigo-400">Contact</a></li>
            </ul>
        </div>

        <!-- Theme Toggle & Social -->
        <div>
            <div class="flex items-center justify-between">
                <h4 class="text-md mb-2 font-semibold text-white">Follow Us</h4>
                <button id="theme-toggle" aria-label="Toggle Dark Mode"
                    class="text-sm transition hover:text-yellow-400">
                    <svg id="theme-icon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="sun-icon"
                            d="M12 3v1m0 16v1m8.49-8.49h1m-17 0h1M16.95 7.05l.71-.71M4.34 19.66l.71-.71M16.95 16.95l.71.71M4.34 4.34l.71.71"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
            <div class="mt-2 flex space-x-4">
                <a href="#" class="transition hover:text-blue-500" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="transition hover:text-blue-400" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="transition hover:text-pink-500" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="mt-6 border-t border-gray-700 pt-4">
        <div
            class="container mx-auto flex flex-col items-center justify-between px-4 text-xs text-gray-500 md:flex-row">
            <p>&copy; {{ date('Y') }} Anshu Memorial Academy. All rights reserved.</p>
            <div class="mt-2 space-x-4 md:mt-0">
                <a href="#" class="transition hover:text-indigo-400">Privacy Policy</a>
                <a href="#" class="transition hover:text-indigo-400">Terms of Service</a>
            </div>
        </div>
    </div>

    <!-- Theme Toggle Script -->
    <script>
        const toggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        toggle.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });

        // On load, apply saved theme
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    </script>
</footer> --}}
