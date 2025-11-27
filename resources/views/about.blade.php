@extends('layouts.main')

@section('content')
    <!-- Main Content -->
    <main class="max-w-[1920px] mx-auto pt-[48px] px-8 md:px-[60px] pb-[100px]">
        <!-- Header Section -->
        <section class="flex flex-col items-center gap-5 mb-[48px] mt-[100px]">
            <h1 class="font-condensed font-bold text-[35px] sm:text-[55px] lg:text-[65px] 2xl:text-[80px] leading-[1em] tracking-[-0.02em] text-black text-center m-0">
                {{ __('messages.about_title') }}
            </h1>
            <p class="font-sans font-normal text-base lg:text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray text-center max-w-[780px] m-0">
                {{ __('messages.about_desc') }}
            </p>
        </section>
        <!-- Certificates Section -->
        <section class="2xl:mb-[100px] mb-[60px]">
            <div
                class="flex justify-center items-start gap-5 flex-wrap xl:flex-nowrap 2xl:max-w-[1200px] max-w-[1000px] mx-auto px-8">
                @foreach($about->media as $media)
                    <div class="flex flex-col items-center gap-5">
                        <img src="{{url($media->path)}}"
                             alt="{{$media->name}}"
                             class="object-cover w-[280px] lg:w-[320px] 2xl:w-[380px] 2xl:h-[491px] h-[350px] bg-bg-gray rounded-[32px] flex items-center justify-center"
                             onerror="this.style.display='none';">
                        <h3 class="font-condensed font-bold text-[32px] leading-[1em] tracking-[-0.01em] text-black text-center m-0">
                            {{ $media->name }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </section>


        <!-- Company Description -->
        <section class="max-w-[780px] mx-auto mb-[100px]">
            {!! $about->main_info !!}
        </section>
    </main>
@endsection
