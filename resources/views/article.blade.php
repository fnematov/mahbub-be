@extends('layouts.main')

@section('content')
    <!-- Main Content -->
    <main class="max-w-[1920px] mx-auto pt-[100px] px-6 md:px-[60px] pb-[100px]">
        <!-- Header Section -->
        <section class="flex flex-col items-center gap-5 mb-[40px] mt-[48px]">
            <p class="font-sans font-normal text-base text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray text-center m-0">
                {{ $article->created_at->translatedFormat('d F Y') }}
            </p>
            <h1 class="font-condensed font-bold text-[30px] md:text-[45px] lg:text-[55px] 2xl:text-[80px] leading-[1em] tracking-[-0.02em] text-black text-center m-0">
                {{ $article->title }}
            </h1>
        </section>

        <!-- Hero Image -->
        <section class="mb-[48px]">
            <div
                class="w-full max-w-[1000px] 2xl:max-w-[1180px] h-[350px] sm:h-[450px] 2xl:h-[736px] bg-bg-gray rounded-[32px] overflow-hidden mx-auto">
                <img src="{{url($article->media?->path)}}" alt="{{$article->title}}" class="w-full h-full object-cover"
                     onerror="this.style.display='none';">
            </div>
        </section>

        <!-- Article Content -->
        <section class="max-w-[780px] mx-auto">
            <article
                class="font-sans font-normal text-base xl:text-lg 2xl:text-xl leading-[1.4em] tracking-[0.01em] text-text-gray">
                {!! nl2br(e($article->content)) !!}
            </article>
        </section>
    </main>
@endsection
