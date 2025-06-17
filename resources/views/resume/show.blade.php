@extends('layouts.app')

@section('title', 'personal resume' . $resume->name)

@section('content')
    <section class="py-10 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold">personal resume</h1>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md p-8">
                <!-- Header / Personal Information -->
                <div class="flex flex-col md:flex-row md:items-center mb-10">
                    @if ($resume->profile_photo)
                        <div class="mb-6 md:mb-0 md:mr-8">
                            <img src="{{ asset('storage/' . $resume->profile_photo) }}" alt="{{ $resume->name }}" class="w-40 h-40 rounded-full object-cover">
                        </div>
                    @endif

                    <div>
                        <h2 class="text-3xl font-bold mb-2">{{ $resume->name }}</h2>
                        <h3 class="text-xl text-gray-600 mb-4">{{ $resume->title }}</h3>

                        <div class="flex flex-wrap gap-4 text-gray-600">
                            @if ($resume->email)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>{{ $resume->email }}</span>
                                </div>
                            @endif

                            @if ($resume->phone)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>{{ $resume->phone }}</span>
                                </div>
                            @endif

                            @if ($resume->address)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>{{ $resume->address }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Summary -->
                <div class="mb-10">
                    <h3 class="text-2xl font-bold mb-4 pb-2 border-b border-gray-200">summary</h3>
                    <div class="prose max-w-none">
                        <p>{!! nl2br(e($resume->summary)) !!}</p>
                    </div>
                </div>

                <!-- Experience -->
                @if ($resume->experience)
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold mb-4 pb-2 border-b border-gray-200">experiences</h3>
                        <div class="prose max-w-none">
                            {!! nl2br(e($resume->experience)) !!}
                        </div>
                    </div>
                @endif

                <!-- Education -->
                @if ($resume->education)
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold mb-4 pb-2 border-b border-gray-200">education</h3>
                        <div class="prose max-w-none">
                            {!! nl2br(e($resume->education)) !!}
                        </div>
                    </div>
                @endif

                <!-- Skills -->
                @if ($resume->skills)
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold mb-4 pb-2 border-b border-gray-200">skills</h3>
                        <div class="prose max-w-none">
                            {!! nl2br(e($resume->skills)) !!}
                        </div>
                    </div>
                @endif

                <!-- Certifications -->
                @if ($resume->certifications)
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold mb-4 pb-2 border-b border-gray-200">certification</h3>
                        <div class="prose max-w-none">
                            {!! nl2br(e($resume->certifications)) !!}
                        </div>
                    </div>
                @endif

                <!-- Languages -->
                @if ($resume->languages)
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold mb-4 pb-2 border-b border-gray-200">languages</h3>
                        <div class="prose max-w-none">
                            {!! nl2br(e($resume->languages)) !!}
                        </div>
                    </div>
                @endif

                <!-- Social Links -->
                <div class="mt-10 pt-6 border-t border-gray-200">
                    <div class="flex justify-center space-x-6">
                        @if ($resume->website)
                            <a href="{{ $resume->website }}" target="_blank" class="text-gray-600 hover:text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path>
                                </svg>
                            </a>
                        @endif

                        @if ($resume->linkedin)
                            <a href="{{ $resume->linkedin }}" target="_blank" class="text-gray-600 hover:text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                                </svg>
                            </a>
                        @endif

                        @if ($resume->github)
                            <a href="{{ $resume->github }}" target="_blank" class="text-gray-600 hover:text-blue-600">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
