@extends('layouts.main')

@section('content')
    <main class="grow">

        <!-- Blog post -->
        <section>
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                    <div class="max-w-3xl mx-auto lg:max-w-none">

                        <article>

                            <!-- Article header -->
                            <header class="max-w-3xl mx-auto mb-20">
                                <!-- Title -->
                                <h1 class="h1 text-center mb-4">{{ $post->title }}</h1>
                            </header>

                            <!-- Article content -->
                            <div class="lg:flex lg:justify-between">


                                <!-- Main content -->
                                <div>

                                    <!-- Article meta -->
                                    <div class="flex items-center mb-6">
                                        <div class="flex shrink-0 mr-3">
                                            <a class="relative" href="#0">
                                                <span class="absolute inset-0 -m-px" aria-hidden="true"><span class="absolute inset-0 -m-px bg-white rounded-full"></span></span>
                                                <img class="relative rounded-full" src="{{$post->author->image}}" width="32" height="32" alt="Author 04" />
                                            </a>
                                        </div>
                                        <div>
                                            <span class="text-gray-600">By </span>
                                            <a class="font-medium hover:underline" href="#0">{{$post->author->surname}} {{$post->author->name}}</a>
                                            <span class="text-gray-600"> · July 17, 2020</span>
                                        </div>
                                    </div>
                                    <hr class="w-16 h-px pt-px bg-gray-200 border-0 mb-6" />

                                    <!-- Article body -->
                                    <div class="text-lg text-gray-600">
                                        <p id="introduction" class="mb-8" style="scroll-margin-top: 100px;">
                                            {{ $post->description }}
                                        </p>
                                        <figure class="mb-8">
                                            <img class="w-full rounded" src="{{ $post->image }}" width="768" height="432" alt="Blog single" />
                                        </figure>
                                        <div>
                                            {{ $post->text }}
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- Article footer -->
                        </article>

                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
