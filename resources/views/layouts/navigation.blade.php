<header class="sticky top-0 z-50 bg-white shadow">
    <nav class="container mx-auto flex items-center justify-between px-4 py-4">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600">AMA</a>
        @php
            $navLinks = config('nav');
        @endphp
        <!-- Desktop Menu -->
        <div class="hidden space-x-6 md:flex">

            @foreach ($navLinks as $link)
                <a href="{{ route($link['route']) }}"
                    class="{{ request()->routeIs($link['route']) ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-500' }} text-sm font-medium transition-all duration-200">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <!-- Mobile Menu Button -->
        <button class="text-gray-700 focus:outline-none md:hidden" @click="isOpen = !isOpen" aria-label="Toggle menu">
            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>
</header>

<!-- Mobile Sidebar -->
<div x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
    class="fixed inset-y-0 left-0 z-50 w-64 transform bg-white shadow-lg md:hidden" x-cloak>
    <div class="flex h-full flex-col">
        <!-- Sidebar Header -->
        <div class="flex h-16 items-center justify-between border-b border-gray-200 px-4">
            <span class="text-xl font-bold text-indigo-600">AMA</span>
            <button @click="isOpen = false" class="text-gray-700 hover:text-indigo-500">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Links -->
        <nav class="flex flex-col space-y-1 px-4 py-2">
            @foreach ($navLinks as $link)
                <a href="{{ url($link['path']) }}" @click="isOpen = false"
                    class="{{ request()->routeIs($link['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} rounded px-3 py-3 text-sm font-medium transition-all duration-150">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</div>

<!-- Overlay -->
<div x-show="isOpen" x-transition.opacity class="fixed inset-0 z-40 bg-black/50 md:hidden" @click="isOpen = false"
    x-cloak>
</div>
