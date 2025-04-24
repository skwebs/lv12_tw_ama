<x-app-layout title="About Us">
    <x-slot name="header">
        <h1 class="mb-4 text-center text-2xl font-bold md:text-4xl">About Us</h1>
    </x-slot>
    <section class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">About Our School</h2>
                <p class="mt-4 text-lg text-gray-600">Building the foundation for tomorrow's leaders.</p>
            </div>

            <div class="grid items-center gap-10 md:grid-cols-2">
                <!-- Left: Text Content -->
                <div>
                    <h3 class="mb-4 text-2xl font-semibold text-indigo-600">Welcome to Anshu Memorial Academy</h3>
                    <p class="mb-4 text-gray-700">
                        Established in 2017, Anshu Memorial Academy is a premier educational institution located in
                        Bhatha Dasi, Rajapakar, Bihar. We are
                        dedicated to nurturing young minds from Playgroup to Class 8. We follow the CBSE curriculum and
                        blend it with modern teaching methodologies to offer a holistic learning experience.
                    </p>
                    <p class="mb-4 text-gray-700">
                        At our school, we focus on all-round development, ensuring each child excels academically,
                        socially, and emotionally. With a team of experienced educators, state-of-the-art classrooms,
                        and a safe, engaging environment, we strive to instill values, discipline, and a passion for
                        lifelong learning.
                    </p>
                    <p class="text-gray-700">
                        We believe in shaping responsible, confident individuals who are ready to face the challenges of
                        the future.
                    </p>
                </div>

                <!-- Right: Image -->
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/600x320?text=About+Image" alt="School Campus"
                        class="h-auto w-full object-cover">
                </div>
            </div>

            <!-- Mission, Vision, and Values -->
            <div class="mt-16">
                <div class="grid gap-8 text-center md:grid-cols-3">
                    <div class="rounded-lg bg-gray-50 p-6 shadow">
                        <h4 class="mb-2 text-xl font-semibold text-indigo-500">Our Mission</h4>
                        <p class="text-gray-600">
                            To provide quality education that empowers students to become responsible citizens and
                            lifelong learners.
                        </p>
                    </div>

                    <div class="rounded-lg bg-gray-50 p-6 shadow">
                        <h4 class="mb-2 text-xl font-semibold text-indigo-500">Our Vision</h4>
                        <p class="text-gray-600">
                            To be a center of excellence in education, fostering creativity, discipline, and moral
                            values in every child.
                        </p>
                    </div>

                    <div class="rounded-lg bg-gray-50 p-6 shadow">
                        <h4 class="mb-2 text-xl font-semibold text-indigo-500">Core Values</h4>
                        <p class="text-gray-600">
                            Integrity, Compassion, Innovation, Responsibility, and Respect form the foundation of our
                            culture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
