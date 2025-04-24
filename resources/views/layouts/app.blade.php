<!DOCTYPE html>
<html lang="en" x-data="themeHandler()" :class="{ 'dark': darkMode }"
    class="scroll-smooth antialiased transition-colors duration-300">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Anshu Memorial Academy' }}</title>
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta name="description"
            content="Anshu Memorial Academy – A CBSE-based school offering quality education from Playgroup to Class 8.">
        <meta name="author" content="Anshu Memorial Academy">
    </head>

    <body
        class="flex min-h-screen flex-col font-sans text-gray-800 transition-colors duration-300 dark:bg-gray-900 dark:text-gray-200">

        <!-- Navigation -->
        @include('layouts.navigation')
        {{-- add header if available --}}
        @isset($header)
            <header class="bg-indigo-600 text-white shadow dark:bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Main Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>

        <!-- Footer -->
        @include('layouts.footer')

        <!-- Dark Mode Theme Handler -->
        <script>
            function themeHandler() {
                return {
                    isOpen: false,
                    darkMode: localStorage.getItem('theme') === 'dark',
                    init() {
                        this.$watch('darkMode', value => {
                            localStorage.setItem('theme', value ? 'dark' : 'light');
                        });
                    }
                };
            }
        </script>

        @yield('scripts')
    </body>

</html>
