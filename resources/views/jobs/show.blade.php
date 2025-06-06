<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    @can('edit', $job)
        <a href="/jobs/{{ $job->id }}/edit"
            class="relative inline-flex items-center px-4 py-2 ml-3 mt-6 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300">
            Edit Job
        </a>
    @endcan

</x-layout>
