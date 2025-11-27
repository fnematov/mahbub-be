@php use App\Helpers\Helper; @endphp
@extends('layouts.main')

@section('content')

    <!-- Hero Section -->
    <section
        class="relative w-full max-w-[1920px] mx-auto mt-[100px] px-[40px] xl:px-[60px] pb-[60px] min-h-[700px] xl:h-[850px] 2xl:min-h-[1200px] mb-5"
    >
        <!-- Wallpaper Background -->
        <div
            class="absolute left-[20px] right-[20px] xl:left-[60px] xl:right-[60px] min-h-[700px] xl:h-[850px] 2xl:min-h-[1200px] bg-bg-gray rounded-[32px]"
        >
            <img
                alt="Mahbub Tour"
                src="{{$settings->media?->path ? Storage::url($settings->media?->path) : null}}"
                class="w-full h-full min-h-[700px] xl:h-[850px] 2xl:min-h-[1200px] object-cover rounded-[32px]"
            />
        </div>

        <!-- Hero Content -->
        <div
            class="relative z-10 flex flex-col items-center gap-8 max-w-[1200px] mx-auto pt-20 text-center"
        >
            <h1
                class="font-condensed font-bold text-[36px] lg:text-[60px] 2xl:text-[clamp(48px,6.25vw,120px)] leading-[1em] tracking-[-0.02em] text-black w-full m-0"
            >
                {!! $settings->banner_title !!}
            </h1>
            <p
                class="font-sans font-normal text-[clamp(16px,1.25vw,20px)] leading-[1.2em] tracking-[0.01em] text-text-gray max-w-[520px] m-0"
            >
                {!! $settings->banner_description !!}
            </p>
            <a
                href="{{route('tours')}}"
                class="px-6 py-3 2xl:px-8 2xl:py-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl text-lg leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
            >
                {{ __('messages.view_all_tours') }}
            </a>
        </div>

        <div
            class="mt-[100px] xl:mt-[228px] 2xl:mt-[388px] relative z-50 mx-auto w-full max-w-[1180px] xl:px-5"
        >
            <form
                class="md:flex items-center gap-2 p-1 pl-2 bg-white rounded-[24px] shadow-[0px_0px_20px_0px_rgba(0,0,0,0.1)] max-md:flex-wrap"
                action="{{route('tours')}}"
                method="get"
            >
                <div class="flex-1 flex flex-col gap-1 px-4 py-2 md:border-r border-border-gray min-w-0">
                    <label class="font-normal text-sm 2xl:text-base leading-4 tracking-[0.01em] text-light-gray">
                        {{ __('messages.directions') }}
                    </label>
                    <div class="flex justify-between items-center gap-1">
                        <select name="location" class="focus:outline-none w-full -ml-1 font-medium text-lg 2xl:text-xl">
                            <option value="">{{ __('messages.select_direction') }}</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}"
                                    {{ request('location') == $country->id ? 'selected' : '' }}>
                                    {{$country->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1 px-4 py-2 md:border-r border-border-gray min-w-0">
                    <label class="font-normal text-sm 2xl:text-base leading-4 tracking-[0.01em] text-light-gray">
                        {{ __('messages.month') }}
                    </label>
                    <div class="flex justify-between items-center gap-1">
                        <select name="month" class="focus:outline-none w-full -ml-1 font-medium text-lg 2xl:text-xl">
                            <option value="">{{ __('messages.any_coming_months') }}</option>
                            @foreach(Helper::getMonths() as $key => $months)
                                <option value="{{$key}}"
                                    {{ request('month') === $key ? 'selected' : '' }}>
                                    {{$months}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button
                    class="px-8 py-4 bg-[#067a47] border-none rounded-[20px] font-medium text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-white cursor-pointer whitespace-nowrap hover:bg-[#067a47] transition-colors max-md:w-full max-md:mt-2">
                    {{ __('messages.find') }}
                </button>
            </form>
        </div>
    </section>

    <!-- Section Headers -->
    <section
        class="relative max-w-[1920px] mx-auto max-md:px-5 md:px-[20px] lg:mt-20 xl:mt-0 xl:px-[60px] py-5 flex justify-between gap-5 max-md:flex-col max-md:py-10"
    >
        <!-- Decorative Elements -->
        @foreach($services as $service)
            <div
                class="flex flex-col w-full gap-5 bg-bg-gray rounded-[32px] p-10 h-[400px] 2xl:h-[520px] relative overflow-hidden"
            >
                <img
                    src="{{Storage::url($service->media?->path)}}"
                    alt=""
                    class="absolute w-full h-full object-cover left-0 top-0"
                />
                <h2
                    class="relative font-condensed font-bold text-[28px] xl:text-[35px] 2xl:text-[clamp(36px,3.125vw,60px)] leading-[1.0666666666666667em] tracking-[-0.02em] text-black m-0"
                >
                    {{$service->title}}
                </h2>
                <p
                    class="relative font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    {{$service->main_info}}
                </p>
                <div class="relative flex-1 flex items-end">
                    <a
                        href="{{$service->url}}"
                        class="py-4 px-8 bg-white border-none rounded-2xl font-medium 2xl:text-xl text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] transition-colors"
                    >
                        {{ __('messages.explore_more') }}
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    <!-- Tours Section -->
    @foreach($tour_groups as $tour_group)
        <section>
            <div
                class="max-w-[1920px] mx-auto px-[60px] pt-[100px] max-md:px-5 lg:max-md:py-20 max-md:pt-10 relative"
            >
                <!-- Section Title -->
                <div
                    class="flex flex-col items-center gap-5 text-center mb-[40px] max-w-[800px] mx-auto"
                >
                    <h2
                        class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                    >
                        {{$tour_group->name}}
                    </h2>
                    <p
                        class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                    >
                        {{$tour_group->description}}
                    </p>
                </div>
                <div
                    class="swiper-buttons lg:absolute right-[60px] bottom-0 ml-auto lg:block flex items-center justify-end gap-2"
                >
                    <button
                        class="custom-prev px-4 py-2 md:px-6 md:py-3 2xl:px-8 2xl:py-4 bg-bg-gray rounded-2xl"
                    >
                        <img src="{{asset('image/icons/ArrowLeft.svg')}}" alt=""/>
                    </button>
                    <button
                        class="custom-next px-4 py-2 md:px-6 md:py-3 2xl:px-8 2xl:py-4 bg-bg-gray rounded-2xl"
                    >
                        <img src="{{asset('image/icons/ArrowRight.svg')}}" alt=""/>
                    </button>
                </div>
            </div>
            <div class="md:pl-[60px] pl-2 relative">
                <!-- Swiper Container for Tours -->
                <div class="swiper tours-swiper w-full relative">
                    <div class="swiper-wrapper">
                        <!-- Tour Card -->
                        @foreach($tour_group->tours as $tour)
                            <div class="swiper-slide" style="width: auto">
                                <div
                                    class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                                >
                                    <img
                                        alt="{{$tour->name}}"
                                        src="{{Storage::url($tour->firstMedia->path)}}"
                                        class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                                    />
                                    <div
                                        class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                                    >
                                        <div class="flex items-start gap-4 mb-2">
                                            @if($tour->location?->parent?->flag)
                                                <img
                                                    src="{{Storage::url($tour->location->parent->flag)}}"
                                                    alt="{{$tour->location->parent->name}}"
                                                    class="md:w-14 md:h-14 2xl:w-16 2xl:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                                />
                                            @endif

                                            <div class="flex-1 min-w-0">
                                                <p
                                                    class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                                >
                                                    {{$tour->name}}
                                                </p>
                                                <h3
                                                    class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                                >
                                                    {{$tour->location?->name}}, {{$tour->location?->parent?->name}}
                                                </h3>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="flex items-center justify-between bg-white/70 backdrop-blur-sm rounded-2xl p-4">
                                                <div class="flex flex-col">
                                                    <p class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0">
                                                        {{$tour->days_count}} {{ __('messages.days') }}
                                                        - {{$tour->nights_count}} {{ __('messages.nights') }}
                                                    </p>
                                                    <div class="flex items-center gap-1.5">
                                                        <span
                                                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray">{{ __('messages.from') }}</span>
                                                        <span
                                                            class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green">${{$tour->price_adult}}</span>
                                                    </div>
                                                </div>
                                                <a href="{{route('tours.show', $tour)}}"
                                                   class="2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all">
                                                    {{ __('messages.details') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <!-- Trust Section -->
    @if($partners->count() > 0)
        <section
            class="w-full mx-auto xl:py-[60px] 2xl:py-[100px] mt-[60px] 2xl:mt-[100px] flex flex-col items-center gap-[40px] 2xl:gap-[60px] max-md:px-5 lg:max-md:py-20 max-md:pt-0"
        >
            <div class="flex flex-col items-center gap-5 text-center max-w-[800px]">
                <h2
                    class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                >
                    {{ __('messages.trusted_by') }}
                </h2>
                <p
                    class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    {{ __('messages.trusted_by_desc') }}
                </p>
            </div>

            <div class="swiper trust-swiper">
                <div class="swiper-wrapper">
                    @foreach($partners as $partner)
                        <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                            <img src="{{Storage::url($partner->logo)}}" alt=""/>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Testimonials Section -->
    @if($reviews->count() > 0)
        <section
            class="w-full mx-auto lg:py-[60px] 2xl:py-[100px] flex flex-col items-center 2xl:gap-[60px] gap-[40px] max-md:px-5 lg:max-md:py-20"
        >
            <div class="flex flex-col items-center gap-5 text-center max-w-[800px]">
                <h2
                    class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                >
                    {{ __('messages.tourist_reviews') }}
                </h2>
                <p
                    class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    {{ __('messages.tourist_reviews_desc') }}
                </p>
            </div>

            <!-- Swiper Container -->
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    @foreach($reviews as $review)
                        <div class="swiper-slide bg-bg-gray">
                            <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                                <div class="flex flex-col gap-1 mb-2">
                                    <h4
                                        class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                                    >
                                        {{$review->full_name}}
                                    </h4>
                                    <p
                                        class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                                    >
                                        {{$review->created_at->translatedFormat('d F Y')}}
                                    </p>
                                </div>
                                <div>
                                    <p
                                        class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                                    >
                                        {{$review->comment}}
                                    </p>
                                    <button
                                        class="text-primary-green text-sm mt-1"
                                        onclick="toggleReview(this)"
                                    >
                                        {{ __('messages.read_full') }}
                                    </button>
                                </div>
                                <div class="flex justify-between items-center mt-auto pt-2">
                    <span
                        class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                    >{{$review->tour->name}}</span
                    >
                                    <div class="text-lg text-[#FF9500] leading-none whitespace-nowrap">
                                        @for($i = 0; $i < $review->rating; $i++)
                                            ★
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Articles Section -->
    @if($articles->count() > 0)
        <section
            class="max-w-[1920px] mx-auto px-[60px] py-[60px] 2xl:py-[100px] max-md:px-5 max-md:py-20"
        >
            <div
                class="flex flex-col items-center gap-5 text-center mb-[60px] mx-auto relative"
            >
                <h2
                    class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                >
                    {{ __('messages.share_experience') }}
                </h2>
                <p
                    class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    {{ __('messages.share_experience_desc') }}
                </p>
                <!-- Articles Button -->
                <a
                    href="{{route('articles')}}"
                    class="lg:absolute right-0 bottom-0 flex items-center gap-2 px-8 py-4 bg-bg-gray border border-bg-gray rounded-2xl font-medium text-xl leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#e8e8e8] transition-colors"
                >
                    {{ __('messages.to_articles') }}
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0"
                    >
                        <path
                            d="M5 12H19M19 12L12 5M19 12L12 19"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 justify-items-center"
            >
                <!-- Article Card 1 -->
                @foreach($articles as $article)
                    <a
                        href="{{route('articles.show', $article->id)}}"
                        class="w-full max-w-[435px] bg-bg-gray rounded-[32px] overflow-hidden relative flex flex-col"
                    >
                        <img
                            src="{{Storage::url($article->media?->path)}}"
                            alt="{{$article->title}}"
                            class="w-full object-cover 2xl:h-[320px] h-[260px] bg-bg-gray border-b border-[#D2D2D2] flex-shrink-0"
                        />
                        <div class="2xl:p-5 p-4 flex flex-col 2xl:gap-3 gap-2 flex-1">
                            <h3
                                class="font-condensed font-bold text-[26px] 2xl:text-[32px] leading-[1em] text-black m-0"
                            >
                                {{$article->title}}
                            </h3>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] text-text-gray m-0 flex-1"
                            >
                                {{Str::limit($article->description)}}
                            </p>
                            <p
                                class="font-sans font-medium text-lg leading-[1.333em] text-black mt-auto"
                            >
                                {{$article->created_at->translatedFormat('d F Y')}}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    <!-- FAQ Section -->
    @if($faqs->count() > 0)
        <section
            class="max-w-[1920px] mx-auto px-[60px] py-[60px] 2xl:py-[100px] max-md:px-5 lg:max-md:py-20 max-md:pt-10"
        >
            <div
                class="flex flex-col items-center gap-5 text-center mb-[60px] max-w-[800px] mx-auto"
            >
                <h2
                    class="lg:whitespace-nowrap font-condensed font-bold text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                >
                    {{ __('messages.have_questions') }}
                </h2>
                <p
                    class="font-sans font-normal max-w-[90%] text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    {{ __('messages.have_questions_desc') }}
                </p>
            </div>

            <div
                class="bg-bg-gray rounded-8 overflow-hidden rounded-[32px] max-w-[1180px] mx-auto"
            >
                @foreach($faqs as $faq)
                    <div
                        class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
                    >
                        <div
                            class="flex justify-between items-center 2xl:px-9 2xl:pt-9 2xl:pb-[18px] px-6 pt-6 pb-[6px] cursor-pointer faq-question"
                        >
                            <h3
                                class="font-sans font-medium text-xl 2xl:text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                            >
                                {{$faq->question}}
                            </h3>
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="flex-shrink-0 transition-transform"
                            >
                                <path
                                    d="M6 9L12 15L18 9"
                                    stroke="black"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all">
                            <p
                                class="p-0 2xl:pb-4 font-sans font-normal text-xl leading-[1.6em] text-text-gray m-0"
                            >
                                {{$faq->answer}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

@endsection
