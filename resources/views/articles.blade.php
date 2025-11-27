@extends('layouts.main')

@section('content')
    <main class="max-w-[1920px] mx-auto pt-[100px] px-6 md:px-[60px] xl:px-[100px] pb-[100px]">
        <!-- Header Section -->
        <section class="flex flex-col items-center gap-5 mb-[100px] mt-[48px]">
            <h1 class="font-condensed font-bold text-[35px] 2xl:text-[50px] lg:text-[60px] 2xl:text-[80px] leading-[1em] tracking-[-0.02em] text-black text-center m-0">
                {{ __('messages.articles_news_title') }}
            </h1>
            <p class="font-sans font-normal text-base xl:text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray text-center max-w-[780px] m-0">
                {{ __('messages.articles_news_desc') }}
            </p>
        </section>

        <!-- Articles Grid -->
        <section
            class="grid grid-cols-1 md:grid-cols-2 gap-y-12 gap-x-5 xl:gap-x-5 justify-items-center max-w-[1000px] 2xl:max-w-[1200px] mx-auto">
            @foreach($articles as $article)
                <a href="{{route('articles.show', $article->id)}}"
                   class="w-full max-w-[580px] overflow-hidden cursor-pointer hover:opacity-90 transition-opacity">
                    <div class="w-full h-[262px] 2xl:h-[362px] bg-bg-gray rounded-[32px] overflow-hidden">
                        <img src="{{url($article->media?->path)}}" alt="{{$article->title}}"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none';">
                    </div>
                    <div class="p-0 flex flex-col">
                        <p class="font-sans font-normal text-[13px] 2xl:text-base leading-6 text-text-gray my-2 2xl:my-3">
                            {{ $article->created_at->translatedFormat('d F Y') }}
                        </p>
                        <h2 class="font-condensed font-bold text-2xl xl:text-[30px] 2xl:text-[40px] leading-[1em] tracking-[-0.01em] text-black mb-2 2xl:mb-4">
                            {{ $article->title }}
                        </h2>
                        <p class="font-sans font-normal text-base lg:text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 lg:mt-2">
                            {{ $article->description }}
                        </p>
                    </div>
                </a>
            @endforeach
        </section>
        <!-- Pagination -->
        <div class="w-full flex justify-center mt-12">
            {{ $articles->onEachSide(1)->links('components.pagination') }}
        </div>
    </main>
@endsection
