@extends('layouts.app')

@section('title', 'Projects - My Portfolio')

@section('content')
    <section class="py-10 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold">Projects</h1>
            <p class="mt-2 text-xl">A showcase of my work</p>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($projects as $project)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover">
                        @else
                            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        @endif

                        <div class="p-6">
                            <h2 class="text-2xl font-bold mb-3">{{ $project->title }}</h2>

                            <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 150) }}</p>

                            <div class="mb-4">
                                <h3 class="font-semibold mb-2">Technologies:</h3>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(explode(',', $project->technologies) as $tech)
                                        <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">{{ trim($tech) }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mt-6 flex justify-between items-center">
                                @if($project->start_date)
                                    <span class="text-sm text-gray-500">
                                        {{ $project->start_date->format('Y/m') }} - {{ $project->end_date ? $project->end_date->format('Y/m') : 'Present' }}
                                    </span>
                                @endif

                                <a href="{{ route('projects.show', $project) }}" class="text-blue-600 font-medium hover:underline">View Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 py-12 text-center">
                        <p class="text-xl text-gray-500">No projects available yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
