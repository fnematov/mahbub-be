@php use App\Helpers\Helper; @endphp
@extends('layouts.main')
@section('content')
    <main class="max-w-[1920px] mx-auto pt-[110px] px-[20px] md:px-[60px] pb-[100px]">
        <!-- Tour Header -->
        <section
            class="mb-8 flex flex-col max-lg:gap-8 lg:flex-row item-center justify-between max-w-[1080px] 2xl:max-w-[1180px] mx-auto">
            <div class="flex-1 max-sm:flex max-sm:items-center max-sm:justify-between">
                <div class="flex items-start gap-4">
                    @if($tour->location?->parent?->flag)
                        <div
                            class="w-14 h-14 2xl:w-16 2xl:h-16 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0">
                            <img src="{{url($tour->location->parent->flag)}}" alt="{{$tour->location->parent->name}}"
                                 class="w-full h-full object-contain"
                                 onerror="this.style.display='none';">
                        </div>
                    @endif
                    <div class="flex-1 min-w-0">
                        <h1 class="font-condensed font-bold text-3xl lg:text-[32px] 2xl:text-[40px] leading-[1em] tracking-[-0.01em] text-black m-0 mb-1">
                            {{$tour->name}}
                        </h1>
                        <p class="font-sans font-normal text-xs lg:text-sm 2xl:text-base tracking-[0.01em] text-text-gray m-0">
                            {{$tour->location?->name}}, {{$tour->location?->parent?->name}} | <span
                                class="text-primary-green">{{$tour->days_count}} {{ __('messages.day') }} - {{$tour->nights_count}} {{ __('messages.nights') }}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex-none flex item-center max-lg:justify-between gap-3">
                <div class="mb-3 max-sm:w-full">
                    <div
                        class="w-full flex items-center justify-center gap-3 px-5 py-4 2xl:px-6 2xl:py-5 bg-bg-gray rounded-[32px] font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#e8e8e8] transition-colors">
                        <span>{{ __('messages.price_from') }}</span>
                        <span class="font-semibold text-primary-green">${{$tour->price_child}}</span>
                        <span>{{ __('messages.to') }}</span>
                        <span class="font-semibold text-primary-green">${{$tour->price_adult}}</span>
                    </div>
                </div>

                <!-- Share Button -->
                <div class="mb-3 sm:block">
                    <button
                        class="w-full flex items-center justify-center gap-2 px-5 py-4 2xl:px-6 2xl:py-5 bg-bg-gray rounded-[32px] font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#e8e8e8] transition-colors">
                        <img src="{{asset('image/icons/ShareFat.svg')}}" alt="">
                        <span class="hidden sm:block">{{ __('messages.share') }}</span>
                    </button>
                </div>
            </div>
        </section>
        <div class="flex flex-col lg:flex-row gap-5 items-start justify-center">
            <!-- Left Content -->
            <div class="flex-1 lg:max-w-[680px] 2xl:max-w-[780px] max-w-full">

                <!-- Hero Image -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                     class="swiper pt-0 pb-1 mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach($tour->media as $media)
                            <div class="swiper-slide w-full h-[400px] sm:h-[520px] rounded-[32px] overflow-hidden">
                                <img src="{{url($media->path)}}" alt="{{$tour->name}}"
                                     class="w-full h-full object-cover"/>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Gallery -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($tour->media as $media)
                            <div
                                class="swiper-slide max-[520px]:h-[100px] h-[124px] max-h-[124px] rounded-[32px] overflow-hidden">
                                <img src="{{url($media->path)}}" alt="{{$tour->name}}"
                                     class="w-full h-full object-cover"/>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tab Control -->
                <section class="my-10">
                    <div class="flex items-center gap-0.5 p-0.5 bg-bg-gray rounded-2xl">
                        <button
                            class="flex-1 px-4 py-3 bg-white rounded-[14px] shadow-[0px_1px_4px_0px_rgba(0,0,0,0.1),0px_6px_12px_0px_rgba(0,0,0,0.05)] font-medium text-xs sm:text-sm md:text-base leading-[1.2em] text-black cursor-pointer transition-all active-tab"
                            onclick="switchTab('info')">
                            {{ __('messages.tour_info') }}
                        </button>
                        <div class="w-px h-6 bg-border-gray"></div>
                        <button
                            class="flex-1 px-4 py-3 bg-transparent rounded-[14px] font-medium text-xs sm:text-sm md:text-base leading-[1.2em] text-text-gray cursor-pointer transition-all hover:text-black"
                            onclick="switchTab('route')">
                            {{ __('messages.tour_route') }}
                        </button>
                        <div class="w-px h-6 bg-border-gray"></div>
                        <button
                            class="flex-1 px-4 py-3 bg-transparent rounded-[14px] font-medium text-xs sm:text-sm md:text-base leading-[1.2em] text-text-gray cursor-pointer transition-all hover:text-black"
                            onclick="switchTab('reviews')">
                            {{ __('messages.tourist_reviews') }}
                        </button>
                    </div>
                </section>

                <!-- Tab Content -->
                <section id="tabContent">
                    <!-- Information Tab -->
                    <div id="infoTab" class="tab-content active">
                        {!! $tour->info_tour !!}
                    </div>


                    <!-- Route Tab -->
                    <div id="routeTab" class="tab-content hidden bg-bg-gray rounded-[32px]">
                        @foreach($tour->routes as $key=> $route)
                            <div class="route-day-item rounded-[32px] overflow-hidden">
                                <button
                                    class="w-full flex items-center justify-between px-4 2xl:px-6 py-2 2xl:py-4 cursor-pointer hover:bg-[#e8e8e8] transition-colors route-day-header"
                                    onclick="toggleRouteDay(this)">
                                        <span class="text-lg 2xl:text-xl m-0">
                                          <span class="font-condensed font-medium text-black text-2xl">
                                              {{$key+1}} {{ __('messages.day') }}:
                                          </span>
                                          {{$route->name}}
                                        </span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="route-chevron transition-transform">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="route-day-content max-h-0 overflow-hidden transition-all px-6 pb-0">
                                    <p class="font-sans font-normal text-lg 2xl:text-xl leading-[1.4em] tracking-[0.01em] text-black m-0 pt-2">
                                        {{$route->description_tour}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Reviews Tab -->
                    <div id="reviewsTab" class="tab-content hidden mb-4">
                        @if($tour->reviews->count() > 0)
                            <h2 class="font-condensed font-medium text-3xl 2xl:text-[36px] leading-[1em] tracking-[-0.01em] text-black mb-6 m-0">
                                {{ __('messages.tourist_reviews') }} ({{$tour->reviews->count()}})
                            </h2>

                            <div class="space-y-12 mb-[120px]">
                                @foreach($tour->reviews as $review)
                                    <div class="rounded-[32px]">
                                        <div class="flex items-start justify-between mb-4">
                                            <div class="flex flex-col gap-1">
                                                <h4 class="font-condensed font-medium 2xl:text-2xl text-xl leading-[1.167em] tracking-[0.01em] text-black m-0">
                                                    {{$review->full_name}}
                                                </h4>
                                                <p class="font-sans font-normal 2xl:text-lg text-base leading-[1.333em] tracking-[0.01em] text-text-gray m-0">
                                                    {{$review->created_at->translatedFormat('d F Y')}}
                                                </p>
                                            </div>
                                            <div class="text-lg text-[#FF9500] leading-none flex-shrink-0">
                                                @for($i = 0; $i < $review->rating; $i++)
                                                    ★
                                                @endfor
                                            </div>
                                        </div>
                                        <p class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0">
                                            {{$review->comment}}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="mb-[120px] text-center py-16">
                                <h2 class="font-condensed font-medium text-3xl 2xl:text-[36px] leading-[1em] tracking-[-0.01em] text-black mb-4">
                                    {{ __('messages.no_reviews') }}
                                </h2>
                                <p class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-text-gray">
                                    {{ __('messages.be_first_review') }}
                                </p>
                            </div>
                        @endif

                        <!-- Leave Review Section -->
                        <form method="post" action="{{ route('review') }}">
                            @if (session('success'))
                                <div class="p-4 mb-4 bg-green-50 border border-green-400 text-green-700 rounded-xl">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @csrf
                            <input type="hidden" name="tour_id" value="{{$tour->id}}">
                            <h3 class="font-condensed font-medium text-3xl 2xl:text-4xl leading-[1em] tracking-[-0.01em] text-black mb-6 m-0">
                                {{ __('messages.leave_review') }}
                            </h3>
                            <div class="mb-6">
                                <label
                                    class="block font-normal text-[13px]/[16px] tracking-[0.01em] text-label-gray mb-2">
                                    {{ __('messages.rating') }} <span class="text-required-label">*</span>
                                </label>

                                <!-- Stars -->
                                <div id="rating" class="flex gap-2 cursor-pointer text-gray-300">
                                    <!-- 5 stars rendered by JS -->
                                </div>

                                <!-- Hidden input to submit rating -->
                                <input type="hidden" name="rating" id="ratingValue" value="{{ old('rating') ?? 5 }}">
                            </div>
                            <div
                                class="w-full 2xl:px-5 2xl:py-2 py-1 px-5 bg-bg-gray mb-4 rounded-xl border-none font-normal text-base text-black focus:ring-2 focus:ring-primary-green">
                                <label
                                    class="block font-normal 2xl:text-[13px]/[16px] text-[11px]/[14px] tracking-[0.01em] text-label-gray">
                                    {{ __('messages.name') }}
                                    <span class="text-required-label">*</span>
                                </label>
                                <input type="text" name="full_name" value="{{old('full_name')}}" maxlength="100"
                                       class="focus:outline-none 2xl:text-base text-sm bg-transparent w-full"
                                       placeholder="{{ __('messages.enter_name') }}">
                            </div>

                            <div
                                class="w-full 2xl:px-5 2xl:py-2 py-1 px-5 bg-bg-gray mb-4 rounded-xl border-none font-normal text-base text-black focus:ring-2 focus:ring-primary-green">
                                <label
                                    class="block font-normal 2xl:text-[13px]/[16px] text-[11px]/[14px] tracking-[0.01em] text-label-gray">
                                    {{ __('messages.phone') }}
                                    <span class="text-required-label">*</span>
                                </label>
                                <input type="tel" name="phone" value="{{old('phone')}}" maxlength="19"
                                       class="focus:outline-none 2xl:text-base text-sm bg-transparent w-full"
                                       placeholder="+998 (__) ___ __ __">
                            </div>
                            <div class="bg-bg-gray rounded-xl p-5 min-h-[240px]">
                                <textarea name="comment_ru"
                                          class="w-full h-full bg-transparent border-none outline-none resize-none font-sans font-normal 2xl:text-lg text-base leading-[1.333em] tracking-[0.01em] text-black placeholder-text-gray"
                                          placeholder="{{ __('messages.write_review_placeholder') }}"
                                          rows="10"
                                >{{old('comment_ru')}}</textarea>
                            </div>
                            {{-- ERRORS --}}
                            @if ($errors->review->any())
                                <div class="p-4 mb-4 bg-red-50 border border-red-400 text-red-700 rounded-xl">
                                    <ul class="list-disc list-inside space-y-1">
                                        @foreach ($errors->review->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <button type="submit"
                                    class="mt-4 w-full 2xl:px-8 2xl:py-4 py-3 bg-primary-green border-none rounded-2xl font-medium 2xl:text-xl text-lg leading-[1.2em] tracking-[0.01em] text-white cursor-pointer hover:bg-[#067a47] transition-colors">
                                {{ __('messages.submit') }}
                            </button>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Right Sidebar -->
            <aside
                class="w-full lg:w-[380px] flex-shrink-0 lg:sticky lg:top-[100px] max-lg:pt-14 max-lg:mt-4 max-lg:border-t">

                <!-- Booking Form -->
                <div class="bg-bg-gray rounded-[32px] p-6 mb-3">
                    <h3 class="font-sans font-medium text-lg 2xl:text-xl leading-[1.2em] text-black mb-6 m-0">
                        {{ __('messages.book_place') }}
                    </h3>

                    <x-form button-text="{{ __('messages.book') }}" tour_id="{{$tour->id}}"/>
                </div>

                <!-- Contact Info -->
                <div class="bg-bg-gray rounded-[32px] p-6">
                    <p class="font-sans font-medium 2xl:text-xl tex-lg leading-[1.2em] text-black mb-6 m-0">
                        {{ __('messages.contact_for_info') }}
                    </p>

                    <div class="flex items-center gap-3 mb-4">
                        <img src="./assets/icons/phone.svg" alt="phone icon">
                        <span class="font-sans font-medium 2xl:text-lg text-base leading-[1.333em] text-black">+998 (88) 800 9000</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <img src="./assets/icons/clock.svg" alt="clock icon">
                        <span
                            class="font-sans font-medium 2xl:text-lg text-base leading-[1.333em] text-black">{{ __('messages.24_7') }}</span>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <script>
        // Tab Switching
        function switchTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
                tab.classList.remove('active');
            });

            // Remove active class from all buttons
            document.querySelectorAll('[onclick^="switchTab"]').forEach(btn => {
                btn.classList.remove('active-tab', 'bg-white', 'shadow-[0px_1px_4px_0px_rgba(0,0,0,0.1),0px_6px_12px_0px_rgba(0,0,0,0.05)]', 'text-black');
                btn.classList.add('bg-transparent', 'text-text-gray');
            });

            // Show selected tab
            const selectedTab = document.getElementById(tabName + 'Tab');
            if (selectedTab) {
                selectedTab.classList.remove('hidden');
                selectedTab.classList.add('active');
            }

            // Add active class to selected button
            event.target.classList.add('active-tab', 'bg-white', 'shadow-[0px_1px_4px_0px_rgba(0,0,0,0.1),0px_6px_12px_0px_rgba(0,0,0,0.05)]', 'text-black');
            event.target.classList.remove('bg-transparent', 'text-text-gray');
        }

        //rating

        const ratingElement = document.getElementById("rating");
        const ratingValue = document.getElementById("ratingValue");
        let currentRating = 5;

        // Create stars dynamically
        for (let i = 1; i <= 5; i++) {
            const star = document.createElement("span");
            star.innerHTML = "★";
            star.className = "text-3xl transition-all text-yellow-400";

            // Hover — temporary highlight
            star.addEventListener("mouseover", () => highlightStars(i));
            star.addEventListener("mouseleave", () => highlightStars(currentRating));

            // Click — set rating
            star.addEventListener("click", () => {
                currentRating = i;
                ratingValue.value = i; // write to hidden input
                highlightStars(i);
            });

            ratingElement.appendChild(star);
        }

        function highlightStars(count) {
            const stars = ratingElement.children;
            for (let j = 0; j < stars.length; j++) {
                if (j < count) {
                    stars[j].classList.add("text-yellow-400");
                } else {
                    stars[j].classList.remove("text-yellow-400");
                }
            }
        }

        //swiper

        var mySwiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            thumbs: {
                swiper: mySwiper,
            },
        });

        //accordion
        function toggleRouteDay(button) {
            const item = button.parentElement;
            const content = item.querySelector(".route-day-content");
            const chevron = item.querySelector(".route-chevron");

            const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

            // Yopish
            if (isOpen) {
                content.style.maxHeight = "0px";
                content.style.paddingBottom = "0px";
                chevron.style.transform = "rotate(0deg)";
            }
            // Ochish
            else {
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.paddingBottom = "1.5rem";
                chevron.style.transform = "rotate(180deg)";
            }
        }
    </script>


    <style>
        .tab-content.active {
            display: block;
        }

        .tab-content.hidden {
            display: none;
        }

        .active-tab {
            background: white;
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.1), 0px 6px 12px 0px rgba(0, 0, 0, 0.05);
            color: #000000;
        }
    </style>
@endsection
