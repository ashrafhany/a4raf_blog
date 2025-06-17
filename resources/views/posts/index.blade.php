@extends('layouts.app')

@section('title', 'المدونة - مقالاتي وأفكاري')

@section('content')
    <section class="py-10 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold">blog</h1>
            <p class="mt-2 text-xl">last posts</p>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    @forelse ($posts as $post)
                        <article class="mb-10 bg-white p-6 rounded-lg shadow-md">
                            @if ($post->featured_image)
                                <div class="mb-6">
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-md">
                                </div>
                            @endif

                            <h2 class="text-2xl font-bold mb-3"><a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600">{{ $post->title }}</a></h2>

                            <div class="flex text-gray-500 text-sm mb-4">
                                <span>{{ $post->published_at->format('Y/m/d') }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $post->user->name ?? 'Admin' }}</span>
                            </div>

                            <div class="prose text-gray-600 mb-4">
                                <p>{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 200) }}</p>
                            </div>

                            <a href="{{ route('posts.show', $post) }}" class="inline-block text-blue-600 font-medium hover:underline">read more</a>
                            < </a>
                        </article>
                    @empty
                        <div class="bg-white p-10 rounded-lg shadow-md text-center">
                            <p class="text-gray-500">there's no posts yet</p>
                        </div>
                    @endforelse

                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                        <h3 class="text-xl font-bold mb-4 pb-2 border-b border-gray-200">about me</h3>
                        <p class="text-gray-600 mb-4">hey, i'm a backend developer share here my thoughts and projects </p>
                        <a href="{{ route('resume.show') }}" class="text-blue-600 font-medium hover:underline">my resume </a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 pb-2 border-b border-gray-200">my projects</h3>
                        <p class="text-gray-600 mb-4">explor some of my projects</p>
                        <a href="{{ route('projects.index') }}" class="text-blue-600 font-medium hover:underline">show projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
