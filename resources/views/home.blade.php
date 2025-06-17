@extends('layouts.app')

@section('title', 'Home - Ashraf Hany')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to My Personal Blog</h1>
                <p class="text-xl mb-10">A place to share my thoughts, projects, and professional experience</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('posts.index') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Explore Blog</a>
                    <a href="{{ route('projects.index') }}" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">My Projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Blog Posts -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Latest Articles</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($featuredPosts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if ($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">{{ $post->published_at->format('Y/m/d') }}</span>                                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 font-medium hover:underline">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-10">
                        <p class="text-gray-500">No articles published yet</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('posts.index') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">All Articles</a>
            </div>
        </div>
    </section>    <!-- Featured Projects -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Featured Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($featuredProjects as $project)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $project->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">{{ implode(', ', array_slice(explode(',', $project->technologies), 0, 2)) }}</span>
                                <a href="{{ route('projects.show', $project) }}" class="text-blue-600 font-medium hover:underline">Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-10">
                        <p class="text-gray-500">No projects to display at this time</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('projects.index') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">All Projects</a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Interested in Working Together?</h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto">I'm always excited about new projects and collaborating with creative people. Get in touch to discuss how we can work together.</p>
            <a href="mailto:ashrafhany283@gmail.com" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">Contact Me</a>
        </div>
    </section>
@endsection
