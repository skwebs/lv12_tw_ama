<x-app-layout title="Welcome to AMA">

    {{-- <div class="rounded-lg bg-white p-6 shadow">
        <h1 class="mb-4 text-3xl font-bold text-gray-800">Welcome to AMA</h1>
        <p class="mb-4 text-gray-600">
            Discover our world-class educational programs designed to empower students.
        </p>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div class="rounded-lg bg-blue-50 p-4">
                <h2 class="text-xl font-semibold text-blue-600">Our Courses</h2>
                <p class="text-gray-600">Explore a wide range of courses tailored to your needs.</p>
                <a href="{{ url('/courses') }}" class="mt-2 inline-block text-blue-600 hover:underline">Learn More</a>
            </div>
            <div class="rounded-lg bg-green-50 p-4">
                <h2 class="text-xl font-semibold text-green-600">Expert Faculty</h2>
                <p class="text-gray-600">Learn from industry leaders and experienced educators.</p>
                <a href="{{ url('/about') }}" class="mt-2 inline-block text-blue-600 hover:underline">Meet Our Team</a>
            </div>
            <div class="rounded-lg bg-yellow-50 p-4">
                <h2 class="text-xl font-semibold text-yellow-600">Join Us</h2>
                <p class="text-gray-600">Become part of our vibrant learning community.</p>
                <a href="{{ url('/contact') }}" class="mt-2 inline-block text-blue-600 hover:underline">Get in Touch</a>
            </div>
        </div>
    </div> --}}


    <!-- Hero Section -->
    <section class="bg-indigo-600 py-20 text-white">
        <div class="mx-auto max-w-7xl px-6 text-center">
            <h1 class="mb-4 text-4xl font-bold md:text-5xl">Welcome to Anshu Memorial Academy</h1>
            <p class="text-lg md:text-xl">A CBSE-based school nurturing young minds from Playgroup to Class 8 since 2017
            </p>
            <a href="{{ route('about') }}"
                class="mt-6 inline-block rounded-full bg-white px-6 py-3 font-semibold text-indigo-600 shadow hover:bg-gray-100">Learn
                More About Us</a>
        </div>
    </section>

    <!-- Quick Overview Section -->
    <section class="bg-white py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 text-center md:grid-cols-3">
            <div class="rounded-lg bg-gray-50 p-6 shadow">
                <h2 class="text-2xl font-bold text-indigo-600">Experienced Teachers</h2>
                <p class="mt-2 text-gray-600">Qualified and passionate educators guiding every child with care.</p>
            </div>
            <div class="rounded-lg bg-gray-50 p-6 shadow">
                <h2 class="text-2xl font-bold text-indigo-600">Smart Learning</h2>
                <p class="mt-2 text-gray-600">Modern classrooms, digital tools, and practical-based learning.</p>
            </div>
            <div class="rounded-lg bg-gray-50 p-6 shadow">
                <h2 class="text-2xl font-bold text-indigo-600">Safe Environment</h2>
                <p class="mt-2 text-gray-600">Child-friendly, secure, and nurturing atmosphere for holistic growth.</p>
            </div>
        </div>
    </section>

    <!-- About Preview -->
    <section class="bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl px-6 md:flex md:items-center">
            <div class="mb-8 md:mb-0 md:w-1/2">
                <img src="{{ asset('images/about-preview.jpg') }}" alt="About Anshu Memorial Academy"
                    class="rounded-lg shadow-md">
            </div>
            <div class="md:w-1/2 md:pl-12">
                <h2 class="mb-4 text-3xl font-bold text-indigo-700">About Anshu Memorial Academy</h2>
                <p class="mb-4 text-gray-700">
                    Established in 2017, Anshu Memorial Academy is committed to academic excellence and
                    value-based education. Our CBSE-aligned curriculum encourages curiosity, creativity, and confidence
                    in every child.
                </p>
                <a href="{{ route('about') }}"
                    class="inline-block rounded bg-indigo-600 px-6 py-2 text-white shadow hover:bg-indigo-700">Read
                    More</a>
            </div>
        </div>
    </section>

    <!-- Features or Highlights -->
    <section class="bg-white py-16 text-center text-gray-800 dark:bg-gray-800 dark:text-white">
        <div class="mx-auto max-w-5xl px-6">
            <h2 class="mb-8 text-3xl font-bold text-gray-800 dark:text-white">Why Choose Us?</h2>
            <div class="grid gap-6 md:grid-cols-4">
                <div class="rounded-lg border p-4 dark:border-gray-500">
                    <h3 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400">CBSE Pattern</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Aligned curriculum with structured academic
                        excellence.</p>
                </div>
                <div class="rounded-lg border p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Digital Learning</h3>
                    <p class="mt-2 text-sm text-gray-600">Smart classes, audio-visual learning, and interactive
                        teaching.</p>
                </div>
                <div class="rounded-lg border p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Co-Curricular</h3>
                    <p class="mt-2 text-sm text-gray-600">Activities like dance, music, art, sports, and drama for
                        all-round growth.</p>
                </div>
                <div class="rounded-lg border p-4">
                    <h3 class="text-xl font-semibold text-indigo-600">Individual Attention</h3>
                    <p class="mt-2 text-sm text-gray-600">Small class sizes ensuring personalized care and mentoring.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / CTA -->
    <section class="bg-indigo-600 py-12 text-white">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <h2 class="mb-4 text-2xl font-bold md:text-3xl">Join Anshu Memorial Academy Today</h2>
            <p class="mb-6 text-lg">Admissions open from Playgroup to Class 8. Enroll now and shape a bright future for
                your child!</p>
            <a href="{{ route('contact') }}"
                class="rounded-full bg-white px-6 py-3 font-semibold text-indigo-600 hover:bg-gray-100">Contact Us</a>
        </div>
    </section>


</x-app-layout>
