<x-app-layout title="Welcome to AMA">

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
                <img src="https://placehold.co/600x200?text=About+Image" alt="About Anshu Memorial Academy"
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



    <!-- map -->
    <section class="md:aspect-3/2 lg:aspect-2/1 xl:aspect-7/3 my-16 aspect-square w-full bg-gray-100 sm:p-10">
        <div>
            <h2 class="mb-10 text-center text-3xl font-bold text-indigo-700">Find Us Here</h2>
        </div>
        <div class="container mx-auto h-full w-full border border-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.6503934157327!2d85.35990715211484!3d25.74907256391992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed65dea0882835%3A0xf138a62b245e3bcb!2sAnshu+Memorial+Academy!5e0!3m2!1sen!2sin!4v1539857272951"
                height="100%" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
