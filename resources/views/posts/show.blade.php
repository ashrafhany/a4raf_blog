@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="py-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <!-- Header -->
                <header class="mb-8">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $post->title }}</h1>

                    <div class="flex text-gray-500 text-sm">
                        <span>{{ $post->published_at->format('Y/m/d') }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $post->user->name ?? 'Admin' }}</span>
                    </div>
                </header>

                <!-- Featured Image -->
                @if ($post->featured_image)
                    <div class="mb-8">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full rounded-lg shadow-md">
                    </div>
                @endif

                <!-- Content -->
                <div class="prose prose-lg max-w-none">
                    {!! $post->content !!}
                </div>

                <!-- Navigation -->
                <div class="mt-12 pt-6 border-t border-gray-200">
                    <div class="flex justify-between">
                        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">&larr; العودة إلى المقالات</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
