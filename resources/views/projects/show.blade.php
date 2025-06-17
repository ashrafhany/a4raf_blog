@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- Project Image -->
                    @if ($project->image)
                        <div class="h-80">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="p-8">
                        <!-- Header -->
                        <header class="mb-6">
                            <h1 class="text-3xl md:text-4xl font-bold mb-3">{{ $project->title }}</h1>

                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach(explode(',', $project->technologies) as $tech)
                                    <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">{{ trim($tech) }}</span>
                                @endforeach
                            </div>

                            <div class="text-gray-600">
                                @if($project->start_date)
                                    <p class="mb-2">
                                        <span class="font-semibold">Project Period:</span>
                                        {{ $project->start_date->format('Y/m/d') }} - {{ $project->end_date ? $project->end_date->format('Y/m/d') : 'Present' }}
                                    </p>
                                @endif

                                @if($project->url)
                                    <p>
                                        <span class="font-semibold">Project URL:</span>
                                        <a href="{{ $project->url }}" target="_blank" class="text-blue-600 hover:underline">{{ $project->url }}</a>
                                    </p>
                                @endif
                            </div>
                        </header>

                        <!-- Description -->
                        <div class="prose prose-lg max-w-none mb-8">
                            <h2 class="text-2xl font-bold mb-4">Project Description</h2>
                            <p>{!! nl2br(e($project->description)) !!}</p>
                        </div>

                        <!-- Back to projects -->
                        <div class="mt-8">
                            <a href="{{ route('projects.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Back to all projects
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
