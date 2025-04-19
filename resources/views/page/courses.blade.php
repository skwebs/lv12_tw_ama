<x-app-layout title="Courses">
    <div class="rounded-lg bg-white p-6 shadow">
        <h1 class="mb-4 text-3xl font-bold text-gray-800">Courses</h1>
        <p class="mb-4 text-gray-600">
            Explore our diverse range of courses designed to meet your educational needs.
        </p>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            {{-- @foreach ($courses as $course)
                <div class="rounded-lg bg-blue-50 p-4">
                    <h2 class="text-xl font-semibold text-blue-600">{{ $course->name }}</h2>
                    <p class="text-gray-600">{{ $course->description }}</p>
                    <a href="{{ url('/courses/' . $course->id) }}" class="mt-2 inline-block text-blue-600 hover:underline">Learn More</a>
                </div>
            @endforeach --}}
        </div>
    </div>
</x-app-layout>
