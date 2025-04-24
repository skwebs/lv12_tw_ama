{{-- @php
    $navLinks = config('nav');
@endphp

<!-- Navigation -->
<header class="sticky top-0 z-50 bg-white shadow">
    <nav class="container mx-auto flex items-center justify-between px-4 py-4">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600">AMA</a>

        <!-- Desktop Menu -->
        <div class="hidden items-center space-x-6 md:flex">
            @foreach ($navLinks as $link)
                @if (isset($link['submenus']))
                    <!-- Dropdown for Main Menu with Submenus -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = false"
                            @click="open = !open" @click.away="open = false"
                            class="{{ request()->routeIs($link['route']) ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-500' }} flex items-center text-sm font-medium transition-all duration-200">
                            {{ $link['label'] }}
                            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black/25" x-cloak>
                            <div class="py-1">
                                @foreach ($link['submenus'] as $submenu)
                                    <a href="{{ route($submenu['route']) }}"
                                        class="{{ request()->routeIs($submenu['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} block px-4 py-2 text-sm">
                                        {{ $submenu['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Regular Menu Item -->
                    <a href="{{ route($link['route']) }}"
                        class="{{ request()->routeIs($link['route']) ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-500' }} text-sm font-medium transition-all duration-200">
                        {{ $link['label'] }}
                    </a>
                @endif
            @endforeach

            <!-- Profile Picture Dropdown -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center focus:outline-none">
                    <img class="h-8 w-8 rounded-full border border-gray-300 object-cover"
                        src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                        alt="Profile">
                </button>
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-50 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black/25" x-cloak>
                    <div class="py-1">
                        @auth
                            <div class="px-4 py-2 text-sm text-gray-700">
                                <p class="font-medium">{{ Auth::user()->name }}</p>
                                <p class="text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="border-t border-gray-100"></div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ __('Login') }}
                            </a>
                            <a href="{{ route('register') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ __('Register') }}
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button class="text-gray-700 focus:outline-none md:hidden" @click="isOpen = !isOpen" aria-label="Toggle menu"
            x-cloak>
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
        <nav x-data="{ openMainMenu: null }" class="flex flex-col space-y-1 overflow-y-auto px-4 py-2">
            @foreach ($navLinks as $link)
                @if (isset($link['submenus']))
                    <!-- Collapsible Submenu -->
                    <div class="relative">
                        <button
                            @click="openMainMenu= openMainMenu=== {{ $link['id'] }} ? null : {{ $link['id'] }}"
                            class="flex w-full items-center justify-between rounded px-3 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ $link['label'] }}
                            <svg :class="{ 'rotate-180': openMainMenu === {{ $link['id'] }} }"
                                class="h-4 w-4 transform transition-transform duration-200 ease-in-out" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- <div x-show="open" x-collapse class="ml-4 space-y-1 overflow-hidden"> -->
                        <div x-show="openMainMenu === {{ $link['id'] }}" x-collapse
                            class="ml-4 space-y-1 overflow-hidden transition-all duration-300 ease-in-out">

                            @foreach ($link['submenus'] as $submenu)
                                <a href="{{ route($submenu['route']) }}" @click="isOpen = false"
                                    class="{{ request()->routeIs($submenu['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} mt-1 block rounded px-3 py-2 text-sm">
                                    {{ $submenu['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <!-- Regular Menu Item -->
                    <a href="{{ url($link['path']) }}" @click="isOpen = false"
                        class="{{ request()->routeIs($link['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} rounded px-3 py-3 text-sm font-medium transition-all duration-150">
                        {{ $link['label'] }}
                    </a>
                @endif
            @endforeach

            <!-- Profile Picture Dropdown in Sidebar -->
            <div x-data="{ open: false }" class="border-t border-gray-200 pt-2">
                <button @click="open = !open"
                    class="flex w-full items-center rounded px-3 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                    <img class="mr-2 h-6 w-6 rounded-full object-cover"
                        src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                        alt="Profile">
                    <span>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                </button>
                <div x-show="open" x-collapse x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                    x-transition:leave="transition ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                    class="ml-4 mt-1 space-y-1 overflow-hidden">
                    @auth
                        <div class="px-3 py-2 text-sm text-gray-700">
                            <p class="font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Logout') }}
                        </a>
                        <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Register') }}
                        </a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Overlay -->
<div x-show="isOpen" x-transition.opacity class="fixed inset-0 z-40 bg-black/50 md:hidden" @click="isOpen = false"
    x-cloak>
</div> --}}

@php
    $navLinks = config('nav');
@endphp

<!-- Alpine Data Initialization -->
<div x-data="{ isOpen: false, openMainMenu: null }" class="sticky top-0 z-50">
    <!-- Navigation -->
    <header class="bg-white shadow">
        <nav class="container mx-auto flex items-center justify-between px-4 py-4">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600">AMA</a>

            <!-- Desktop Menu -->
            <div class="hidden items-center space-x-6 md:flex">
                @foreach ($navLinks as $link)
                    @if (isset($link['submenus']))
                        <div x-data="{ open: false }" class="relative">
                            <button @mouseenter="open = true" @mouseleave="open = false"
                                class="{{ request()->routeIs($link['route']) ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-500' }} flex items-center text-sm font-medium transition-all duration-200">
                                {{ $link['label'] }}
                                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" @mouseenter="open = true" @mouseleave="open = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute z-50 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black/25"
                                x-cloak>
                                <div class="py-1">
                                    @foreach ($link['submenus'] as $submenu)
                                        <a href="{{ route($submenu['route']) }}"
                                            class="{{ request()->routeIs($submenu['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} block px-4 py-2 text-sm">
                                            {{ $submenu['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route($link['route']) }}"
                            class="{{ request()->routeIs($link['route']) ? 'text-indigo-600   border-indigo-600' : 'text-gray-700 hover:text-indigo-500' }} hover:underline-offset-6 text-sm font-medium transition-all duration-200 hover:underline">
                            {{ $link['label'] }}
                        </a>
                    @endif
                @endforeach

                <!-- Profile Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center focus:outline-none">
                        <img class="h-8 w-8 rounded-full border border-gray-300 object-cover"
                            src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                            alt="Profile">
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-50 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black/25"
                        x-cloak>
                        <div class="py-1">
                            @auth
                                <div class="px-4 py-2 text-sm text-gray-700">
                                    <p class="font-medium">{{ Auth::user()->name }}</p>
                                    <p class="text-gray-500">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="border-t border-gray-100"></div>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                    {{ __('Login') }}
                                </a>
                                <a href="{{ route('register') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                    {{ __('Register') }}
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="text-gray-700 focus:outline-none md:hidden" @click="isOpen = !isOpen"
                aria-label="Toggle menu" x-cloak>
                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>
    </header>

    <!-- Mobile Sidebar -->
    <aside x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed inset-y-0 left-0 z-50 w-64 transform bg-white shadow-lg md:hidden" x-cloak>
        <div class="flex h-full flex-col">
            <!-- Sidebar Header -->
            <div class="flex h-16 items-center justify-between border-b border-gray-200 px-4">
                <span class="text-xl font-bold text-indigo-600">AMA</span>
                <button @click="isOpen = false" class="text-gray-700 hover:text-indigo-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Links -->
            <nav class="flex flex-col space-y-1 overflow-y-auto px-4 py-2">
                @foreach ($navLinks as $link)
                    @if (isset($link['submenus']))
                        <div>
                            <button
                                @click="openMainMenu = openMainMenu === {{ $link['id'] }} ? null : {{ $link['id'] }}"
                                class="flex w-full items-center justify-between rounded px-3 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ $link['label'] }}
                                <svg :class="{ 'rotate-180': openMainMenu === {{ $link['id'] }} }"
                                    class="h-4 w-4 transform transition-transform duration-200 ease-in-out"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="openMainMenu === {{ $link['id'] }}" x-collapse
                                class="ml-4 space-y-1 overflow-hidden">
                                @foreach ($link['submenus'] as $submenu)
                                    <a href="{{ route($submenu['route']) }}" @click="isOpen = false"
                                        class="{{ request()->routeIs($submenu['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} mt-1 block rounded px-3 py-2 text-sm">
                                        {{ $submenu['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ route($link['route']) }}" @click="isOpen = false"
                            class="{{ request()->routeIs($link['route']) ? 'bg-indigo-100 text-indigo-700' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-600' }} rounded px-3 py-3 text-sm font-medium transition-all duration-150">
                            {{ $link['label'] }}
                        </a>
                    @endif
                @endforeach

                {{-- <!-- Mobile Profile Dropdown -->
                <div x-data="{ open: false }" class="w-full border-t border-gray-200 pt-2">
                    <button @click="open = !open"
                        class="flex w-full items-center rounded px-3 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                        <img class="mr-2 h-6 w-6 rounded-full object-cover"
                            src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                            alt="Profile">
                        <span>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                    </button>
                    <div x-show="open" x-collapse class="ml-4 mt-1 space-y-1 overflow-hidden">
                        @auth
                            <div class="px-3 py-2 text-sm text-gray-700">
                                <p class="font-medium">{{ Auth::user()->name }}</p>
                                <p class="text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();"
                                class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ __('Logout') }}
                            </a>
                            <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" @click="isOpen = false"
                                class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ __('Login') }}
                            </a>
                            <a href="{{ route('register') }}" @click="isOpen = false"
                                class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                                {{ __('Register') }}
                            </a>
                        @endauth
                    </div>
                </div> --}}
            </nav>
            {{-- fill blank space  --}}
            <div class="flex-1"></div>


            <!-- Mobile Profile Dropdown -->
            {{-- <div x-data="{ open: false }" class="w-full border-t border-gray-200">
                <button @click="open = !open"
                    class="flex w-full items-center rounded px-3 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                    <img class="mr-2 h-6 w-6 rounded-full object-cover"
                        src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                        alt="Profile">
                    <span>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                </button>
                <div x-show="open" x-collapse class="ml-4 mt-1 space-y-1 overflow-hidden">
                    @auth
                        <div class="px-3 py-2 text-sm text-gray-700">
                            <p class="font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Logout') }}
                        </a>
                        <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Register') }}
                        </a>
                    @endauth
                </div>
            </div> --}}


            <div x-data="{ open: false }" class="w-full border-t border-gray-200">
                <button x-ref="button" @click="open = ! open"
                    class="flex w-full items-center rounded px-3 py-3 text-sm font-medium text-gray-700">
                    <img class="mr-2 h-6 w-6 rounded-full object-cover"
                        src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                        alt="Profile">
                    <span>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                </button>
                <div x-show="open" x-anchor="$refs.button"
                    class="w-48 space-y-1 overflow-hidden border border-gray-200 bg-white">
                    @auth
                        <div class="px-3 py-2 text-sm text-gray-700">
                            <p class="font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Logout') }}
                        </a>
                        <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Register') }}
                        </a>
                    @endauth
                </div>
            </div>





            {{-- <div x-data="{ open: false }" class="w-full border-t border-gray-200">

                <button x-ref="button" @click="open = ! open"
                    class="flex w-full items-center rounded px-3 py-3 text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                    <img class="mr-2 h-6 w-6 rounded-full object-cover"
                        src="{{ Auth::check() ? (Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/images/person.png')) : asset('storage/images/person.png') }}"
                        alt="Profile">
                    <span>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                </button>
                <div x-show="open" x-anchor="$refs.button" class="ml-4 mt-1 space-y-1 overflow-hidden">
                    @auth
                        <div class="px-3 py-2 text-sm text-gray-700">
                            <p class="font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Logout') }}
                        </a>
                        <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Login') }}
                        </a>
                        <a href="{{ route('register') }}" @click="isOpen = false"
                            class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                            {{ __('Register') }}
                        </a>
                    @endauth
                </div>
            </div> --}}
        </div>
    </aside>

    <!-- Overlay -->
    <div x-show="isOpen" x-transition.opacity class="fixed inset-0 z-40 bg-black/50 md:hidden"
        @click="isOpen = false" x-cloak></div>
</div>
