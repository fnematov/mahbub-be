@php use App\Helpers\Helper; @endphp
@extends('layouts.main')

@section('content')

    <!-- Fixed Filter -->
    <div
        class="mt-[108px] w-full 2xl:max-w-[1180px] max-w-[1100px] px-5 mx-auto"
    >
        <form
            class="flex md:items-center flex-col md:flex-row gap-2 md:p-1 p-2 pl-2 bg-white rounded-[24px] shadow-[0px_0px_20px_0px_rgba(0,0,0,0.1)]"
            action="{{route('tours')}}"
            method="get"
        >
            <div
                class="flex-1 flex flex-col gap-[6px] 2xl:gap-[10px] px-4 py-2 md:border-r md:border-border-gray min-w-0"
            >
                <label
                    class="font-normal text-sm 2xl:text-base leading-4 tracking-[0.01em] text-light-gray"
                >{{ __('messages.directions') }}</label
                >
                <div class="flex justify-between items-center gap-1">
                    <select
                        class="focus:outline-none w-full -ml-1 font-medium text-lg 2xl:text-xl"
                        name="location"
                    >
                        <option value="">{{ __('messages.all_directions') }}</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}"
                                {{ request('location') == $country->id ? 'selected' : '' }}>
                                {{$country->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div
                class="flex-1 flex flex-col gap-[6px] 2xl:gap-[10px] px-4 py-2 md:border-r md:border-border-gray min-w-0"
            >
                <label
                    class="font-normal text-sm 2xl:text-base leading-4 tracking-[0.01em] text-light-gray"
                >{{ __('messages.month') }}</label
                >
                <div class="flex justify-between items-center gap-1">
                    <select
                        class="focus:outline-none w-full -ml-1 font-medium text-lg 2xl:text-xl"
                        name="month"
                    >
                        <option value="">{{ __('messages.any_coming_months') }}</option>
                        @foreach(Helper::getMonths() as $key => $months)
                            <option value="{{$key}}"
                                {{ request('month') !== null && request('month') === (string)$key ? 'selected' : '' }}>
                                {{$months}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button
                class="2xl:px-8 2xl:py-4 px-5 py-3 bg-primary-green border-none rounded-[20px] font-medium text-base xl:text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-white cursor-pointer whitespace-nowrap hover:bg-[#067a47] transition-colors mt-4 md:mt-0 w-full md:w-[160px] lg:w-[240px] 2xl:h-[68px] xl:h-[58px] h-[52px] flex items-center justify-center"
            >
                {{ __('messages.pick_up') }}
            </button>
        </form>
    </div>

    <!-- Main Content -->
    <main
        class="max-w-[1920px] mx-auto 2xl:pt-[80px] pt-[60px] px-3 md:px-5 xl:px-[60px] pb-[100px]"
    >
        <!-- Tours Grid -->
        <section
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 justify-items-center"
        >
            @foreach($tours as $tour)
                <article
                    class="w-full md:max-w-[586px] 2xl:h-[520px] xl:h-[380px] h-[300px] bg-bg-gray rounded-[32px] overflow-hidden relative"
                >
                    <img
                        src="{{Storage::url($tour->firstMedia->path)}}"
                        alt="{{$tour->name}}"
                        class="absolute w-full inset-0 bg-bg-gray 2xl:h-[520px] h-[380px] object-cover"
                    />
                    <div
                        class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                    >
                        <div class="flex items-start gap-4 mb-2">
                            @if($tour->location?->parent?->flag)
                                <img
                                    src="{{Storage::url($tour->location->parent->flag)}}"
                                    alt="{{$tour->location->parent->name}}"
                                    class="2xl:w-16 2xl:h-16 xl:h-12 xl:w-12 w-10 h-10 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                />
                            @endif
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="font-condensed font-bold text-xl xl:text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                >
                                    {{$tour->location?->name}}, {{$tour->location?->parent?->name}}
                                </h3>
                                <p
                                    class="font-sans font-normal text-sm xl:text-base mt-1 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                >
                                    {{$tour->name}}
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-1">
                                <p
                                    class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] text-text-gray m-0"
                                >
                                    {{$tour->days_count}} {{ __('messages.day') }}
                                    - {{$tour->nights_count}} {{ __('messages.nights') }}
                                </p>
                                <div class="flex items-center gap-1.5">
                  <span
                      class="font-sans font-normal text-base xl:text-base 2xl:text-lg leading-[1.111em] text-text-gray"
                  >{{ __('messages.from') }}</span
                  >
                                    <span
                                        class="font-sans font-semibold text-base xl:text-lg 2xl:text-xl leading-[1.2em] text-primary-green"
                                    >${{$tour->price_adult}}</span
                                    >
                                </div>
                            </div>
                            <a
                                href="{{route('tours.show', $tour)}}"
                                class="absolute bottom-6 right-6 px-4 py-2 2xl:px-8 2xl:py-4 text-sm xl:text-base 2xl:text-xl bg-white border-none rounded-2xl font-medium leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                            >
                                {{ __('messages.details') }}
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>

        <!-- Pagination -->
        <div class="w-full flex justify-center mt-12">
            {{ $tours->onEachSide(1)->links('components.pagination') }}
        </div>
    </main>

@endsection
