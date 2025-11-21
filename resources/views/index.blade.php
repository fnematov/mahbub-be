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
                src="{{asset('image/image2.jpg')}}"
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
                Добро пожаловать<br/>в Узбекистан
            </h1>
            <p
                class="font-sans font-normal text-[clamp(16px,1.25vw,20px)] leading-[1.2em] tracking-[0.01em] text-text-gray max-w-[520px] m-0"
            >
                Найдите свой идеальный путешествие с легкостью и забронируйте ваш тур
                прямо сейчас
            </p>
            <button
                class="px-6 py-3 2xl:px-8 2xl:py-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl text-lg leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
            >
                Посмотреть все туры
            </button>
        </div>

        <div
            class="mt-[100px] xl:mt-[228px] 2xl:mt-[388px] relative z-50 mx-auto w-full max-w-[1180px] xl:px-5"
        >
            <div
                class="md:flex items-center gap-2 p-1 pl-2 bg-white rounded-[24px] shadow-[0px_0px_20px_0px_rgba(0,0,0,0.1)] max-md:flex-wrap"
            >
                <div
                    class="flex-1 flex flex-col gap-1 px-4 py-2 border-r border-border-gray min-w-0"
                >
                    <label
                        class="font-normal text-sm 2xl:text-base leading-4 tracking-[0.01em] text-light-gray"
                    >Направления</label
                    >
                    <div class="flex justify-between items-center gap-1">
                        <select
                            class="focus:outline-none w-full -ml-1 font-medium text-lg 2xl:text-xl"
                        >
                            <option>Выберите направление</option>
                        </select>
                    </div>
                </div>
                <div
                    class="flex-1 flex flex-col gap-1 px-4 py-2 border-r border-border-gray min-w-0"
                >
                    <label
                        class="font-normal text-sm 2xl:text-base leading-4 tracking-[0.01em] text-light-gray"
                    >Дата</label
                    >
                    <div class="flex justify-between items-center gap-1">
                        <input
                            type="date"
                            class="w-full font-medium text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-black whitespace-nowrap overflow-hidden text-ellipsis"
                            placeholder="Выберите дату"
                        />
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-1 px-4 py-2 min-w-0">
                    <label
                        class="font-normal text-sm 2xl:text-base leading-5 tracking-[0.01em] text-light-gray"
                    >Количество</label
                    >
                    <select
                        class="focus:outline-none w-full -ml-1 font-medium text-lg 2xl:text-xl"
                    >
                        <option>1 турист</option>
                        <option>2 турист</option>
                        <option>3 турист</option>
                        <option>4 турист</option>
                    </select>
                </div>
                <button
                    class="px-8 py-4 bg-primary-green border-none rounded-[20px] font-medium text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-white cursor-pointer whitespace-nowrap hover:bg-[#067a47] transition-colors max-md:w-full max-md:mt-2"
                >
                    Найти
                </button>
            </div>
        </div>
    </section>

    <!-- Section Headers -->
    <section
        class="relative max-w-[1920px] mx-auto max-md:px-5 md:px-[20px] lg:mt-20 xl:mt-0 xl:px-[60px] py-5 flex justify-between gap-5 max-md:flex-col max-md:py-10"
    >
        <!-- Decorative Elements -->
        <div
            class="flex flex-col gap-5 bg-bg-gray rounded-[32px] p-10 h-[400px] 2xl:h-[520px] relative overflow-hidden"
        >
            <img
                src="{{asset('image/image2.jpg')}}"
                alt=""
                class="absolute w-full h-full object-cover left-0 top-0"
            />
            <h2
                class="relative font-condensed font-bold text-[28px] xl:text-[35px] 2xl:text-[clamp(36px,3.125vw,60px)] leading-[1.0666666666666667em] tracking-[-0.02em] text-black m-0"
            >
                Экзотические туры<br/>по Узбекистану
            </h2>
            <p
                class="relative font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
            >
                Наслаждайтесь с путешествием по Узбекистану и откройте для себя много
                нового
            </p>
            <div class="relative flex-1 flex items-end">
                <button
                    class="py-4 px-8 bg-white border-none rounded-2xl font-medium 2xl:text-xl text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] transition-colors"
                >
                    Исследуйте больше
                </button>
            </div>
        </div>
        <div
            class="flex flex-col gap-5 bg-bg-gray rounded-[32px] p-10 2xl:h-[520px] h-[400px] relative overflow-hidden"
        >
            <img
                src="{{asset('image/image2.jpg')}}"
                alt=""
                class="absolute w-full h-full object-cover left-0 top-0"
            />
            <h2
                class="relative font-condensed font-bold text-[28px] xl:text-[35px] 2xl:text-[clamp(36px,3.125vw,60px)] leading-[1.0666666666666667em] tracking-[-0.02em] text-black m-0"
            >
                Горячие туры<br/>по Европе
            </h2>
            <p
                class="relative font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
            >
                Наслаждайтесь с путешествием по Узбекистану и откройте для себя много
                нового
            </p>
            <div class="relative flex-1 flex items-end">
                <button
                    class="py-4 px-8 bg-white border-none rounded-2xl font-medium 2xl:text-xl text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] transition-colors"
                >
                    Путешествуйте сейчас
                </button>
            </div>
        </div>
    </section>

    <!-- Tours Section -->
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
                    Подбор туры по эмоциям
                </h2>
                <p
                    class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    Мы заранее подобрали для вас готовые туры по вашему настроению
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
                    <!-- Tour Card 2 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/uzb-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-14 md:h-14 2xl:w-16 2xl:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tour Card 1 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/turkie-flug.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-14 md:h-14 2xl:w-16 2xl:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Card 3 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/egypt-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-14 md:h-14 2xl:w-16 2xl:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Card 4 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/georgia-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-14 md:h-14 2xl:w-16 2xl:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div
            class="max-w-[1920px] mx-auto px-[60px] lg:pt-[120px] 2xl:pt-[200px] max-md:px-5 lg:max-md:py-20 max-md:pt-10 relative"
        >
            <!-- Section Title -->
            <div
                class="flex flex-col items-center gap-5 text-center mb-[40px] max-w-[800px] mx-auto"
            >
                <h2
                    class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                >
                    Ближайшие туры
                </h2>
                <p
                    class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    Мы заранее подобрали для вас готовые туры по вашему настроению
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
                    <!-- Tour Card 2 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/uzb-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-16 md:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tour Card 1 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/turkie-flug.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-16 md:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Card 3 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/egypt-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-16 md:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Card 4 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/georgia-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="md:w-16 md:h-16 w-12 h-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                    <div class="flex-1 min-w-0">
                                        <p
                                            class="font-condensed font-bold text-2xl text-2xl 2xl:text-[clamp(28px,2.083vw,40px)] leading-[1em] tracking-[-0.01em] text-black m-0"
                                        >
                                            Историческая сказка
                                        </p>
                                        <h3
                                            class="font-sans font-normal text-base md:text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0 mb-1"
                                        >
                                            Бухара, Узбекистан
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p
                                            class="font-sans font-normal md:text-lg text-base leading-[1.333em] text-text-gray m-0"
                                        >
                                            14 дней - 13 ночей
                                        </p>
                                        <div class="flex items-center gap-1.5">
                        <span
                            class="font-sans font-normal text-base md:text-lg leading-[1.111em] text-text-gray"
                        >От</span
                        >
                                            <span
                                                class="font-sans font-semibold text-base md:text-xl leading-[1.2em] text-primary-green"
                                            >$1200</span
                                            >
                                        </div>
                                    </div>
                                    <button
                                        class="md:absolute mt-2 bottom-6 right-6 2xl:px-8 2xl:py-4 xl:px-6 xl:py-3 py-2 px-4 bg-white border-none rounded-2xl font-medium 2xl:text-xl xl:text-lg text-base leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#f5f5f5] hover:-translate-y-0.5 transition-all"
                                    >
                                        Подробнее
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div
            class="max-w-[1920px] mx-auto px-[60px] lg:pt-[120px] 2xl:pt-[200px] max-md:px-5 lg:max-md:py-20 max-md:pt-10 relative"
        >
            <!-- Section Title -->
            <div
                class="flex flex-col items-center gap-5 text-center mb-[40px] max-w-[800px] mx-auto"
            >
                <h2
                    class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
                >
                    Галерея эмоций
                </h2>
                <p
                    class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
                >
                    Мы заранее подобрали для вас готовые туры по вашему настроению
                </p>
            </div>
            <div
                class="swiper-buttons lg:absolute right-[60px] bottom-0 ml-auto lg:block flex items-center justify-end gap-2"
            >
                <button
                    class="custom-prev px-4 py-2 md:px-6 md:py-3 2xl:px-8 2xl:py-4 bg-bg-gray rounded-2xl"
                >
                    <img src="{{asset('amage/icons/ArrowLeft.svg')}}" alt=""/>
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
                    <!-- Tour Card 2 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] xl:w-[420px] xl:h-[400px] w-[100%] min-w-[324px] md:min-w-auto h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/uzb-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="2xl:w-16 2xl:h-16 h-12 w-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tour Card 1 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] 2xl:h-[520px] w-[100%] xl:w-[420px] xl:h-[400px] min-w-[324px] md:min-w-auto h-[360px] rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/turkie-flug.svg')}}"
                                        alt="UzbFlag"
                                        class="2xl:w-16 2xl:h-16 h-12 w-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Card 3 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] xl:w-[420px] xl:h-[400px] w-[100%] min-w-[324px] md:min-w-auto 2xl:h-[520px] h-[360px] bg-bg-gray rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/egypt-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="2xl:w-16 2xl:h-16 h-12 w-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tour Card 4 -->
                    <div class="swiper-slide" style="width: auto">
                        <div
                            class="2xl:w-[540px] xl:w-[420px] xl:h-[400px] w-[100%] min-w-[324px] md:min-w-auto 2xl:h-[520px] h-[360px] bg-bg-gray rounded-[32px] overflow-hidden relative"
                        >
                            <img
                                src="{{asset('image/image2.jpg')}}"
                                class="absolute w-full h-full left-0 top-0 object-cover inset-0 bg-bg-gray"
                            />
                            <div
                                class="relative z-50 p-6 flex flex-col gap-2 justify-between h-full"
                            >
                                <div class="flex items-start gap-4 mb-2">
                                    <img
                                        src="{{asset('image/georgia-flag.svg')}}"
                                        alt="UzbFlag"
                                        class="2xl:w-16 2xl:h-16 h-12 w-12 rounded-full bg-[#D80027] flex items-center justify-center flex-shrink-0"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section
        class="w-full mx-auto xl:py-[60px] 2xl:py-[100px] mt-[60px] 2xl:mt-[100px] flex flex-col items-center gap-[40px] 2xl:gap-[60px] max-md:px-5 lg:max-md:py-20 max-md:pt-0"
    >
        <div class="flex flex-col items-center gap-5 text-center max-w-[800px]">
            <h2
                class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
            >
                Нам доверяют
            </h2>
            <p
                class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
            >
                Многие партнеры доверяет нам за наш многолетний опыт и деловую
                активность
            </p>
        </div>

        <div class="swiper trust-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
                <div class="swiper-slide bg-bg-gray flex items-center justify-center">
                    <img src="{{asset('image/uzb-airways.png')}}" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section
        class="w-full mx-auto lg:py-[60px] 2xl:py-[100px] flex flex-col items-center 2xl:gap-[60px] gap-[40px] max-md:px-5 lg:max-md:py-20"
    >
        <div class="flex flex-col items-center gap-5 text-center max-w-[800px]">
            <h2
                class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
            >
                Отзывы туристов
            </h2>
            <p
                class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
            >
                Слова похвалы наших туристов о нашем деятельности
            </p>
        </div>

        <!-- Swiper Container -->
        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-bg-gray">
                    <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                        <div class="flex flex-col gap-1 mb-2">
                            <h4
                                class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                            >
                                Алимджанов Жахангир
                            </h4>
                            <p
                                class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                            >
                                25 сентября 2025
                            </p>
                        </div>
                        <div>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                            >
                                Слова похвалы наших туристов о нашем деятельности. Слова
                                похвалы наших туристов о нашем деятельности. Слова похвалы
                                наших туристов о нашем деятельности. Слова похвалы наших
                                туристов о нашем деятельности. Слова похвалы наших туристов о
                                нашем деятель
                            </p>
                            <button
                                class="text-primary-green text-sm mt-1"
                                onclick="toggleReview(this)"
                            >
                                Читать полностью
                            </button>
                        </div>
                        <div class="flex justify-between items-center mt-auto pt-2">
                <span
                    class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                >Стамбул / Море чудес</span
                >
                            <div class="text-lg text-[#FF9500] leading-none">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-bg-gray">
                    <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                        <div class="flex flex-col gap-1 mb-2">
                            <h4
                                class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                            >
                                Алимджанов Жахангир
                            </h4>
                            <p
                                class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                            >
                                25 сентября 2025
                            </p>
                        </div>
                        <div>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Aliquam, aliquid asperiores culpa cumque debitis dolor eum
                                facere harum maiores modi nemo nihil non provident, quo
                                ratione, repudiandae rerum sit voluptates! Accusamus ad
                                adipisci aut cupiditate id illo impedit laboriosam nemo non,
                                omnis porro quisquam rem repellendus sunt tempore velit
                                voluptate voluptatibus voluptatum! Accusantium alias aliquam,
                                aperiam assumenda atque blanditiis consequatur, corporis cum,
                                cumque deleniti dolore doloribus eaque enim et facere fuga
                                fugiat illum ipsam magnam magni maxime natus odit officiis
                                omnis pariatur perferendis praesentium ratione recusandae
                                repellendus repudiandae rerum sequi ut veniam? Deserunt error
                                ipsa laboriosam nisi odit omnis quidem.
                            </p>
                            <button
                                class="text-primary-green text-sm mt-1"
                                onclick="toggleReview(this)"
                            >
                                Читать полностью
                            </button>
                        </div>
                        <div class="flex justify-between items-center mt-auto pt-2">
                <span
                    class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                >Стамбул / Море чудес</span
                >
                            <div class="text-lg text-[#FF9500] leading-none">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-bg-gray">
                    <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                        <div class="flex flex-col gap-1 mb-2">
                            <h4
                                class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                            >
                                Алимджанов Жахангир
                            </h4>
                            <p
                                class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                            >
                                25 сентября 2025
                            </p>
                        </div>
                        <div>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolorem earum labore totam? Beatae qui, repellat. Enim in
                                molestias nulla? Dicta id iusto laborum libero molestiae
                                mollitia nihil numquam qui repellat tenetur. Ab amet
                                aspernatur atque consequatur, cupiditate distinctio dolore
                                doloribus dolorum eius et excepturi fugiat inventore
                                laboriosam laudantium maxime modi molestias nam nemo nostrum
                                obcaecati officia optio porro quam quas quasi reprehenderit
                                rerum temporibus ullam ut veritatis! Animi aut exercitationem
                                illo natus nihil sed voluptatibus? Pariatur recusandae
                                repudiandae voluptates? Nesciunt.
                            </p>
                            <button
                                class="text-primary-green text-sm mt-1"
                                onclick="toggleReview(this)"
                            >
                                Читать полностью
                            </button>
                        </div>
                        <div class="flex justify-between items-center mt-auto pt-2">
                <span
                    class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                >Стамбул / Море чудес</span
                >
                            <div class="text-lg text-[#FF9500] leading-none">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-bg-gray">
                    <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                        <div class="flex flex-col gap-1 mb-2">
                            <h4
                                class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                            >
                                Алимджанов Жахангир
                            </h4>
                            <p
                                class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                            >
                                25 сентября 2025
                            </p>
                        </div>
                        <div>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Animi et exercitationem iusto maxime molestiae nihil sunt!
                                Error harum in magni mollitia nostrum possimus quisquam ullam
                                vitae. Ab aut debitis ea eius harum illum labore mollitia
                                nulla optio, quae qui, voluptas?
                            </p>
                            <button
                                class="text-primary-green text-sm mt-1"
                                onclick="toggleReview(this)"
                            >
                                Читать полностью
                            </button>
                        </div>
                        <div class="flex justify-between items-center mt-auto pt-2">
                <span
                    class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                >Стамбул / Море чудес</span
                >
                            <div class="text-lg text-[#FF9500] leading-none">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-bg-gray">
                    <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                        <div class="flex flex-col gap-1 mb-2">
                            <h4
                                class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                            >
                                Алимджанов Жахангир
                            </h4>
                            <p
                                class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                            >
                                25 сентября 2025
                            </p>
                        </div>
                        <div>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Culpa eveniet facilis fuga fugit, mollitia, nam natus,
                                necessitatibus nulla odit quam recusandae sint. Consectetur
                                impedit ipsum laborum maiores mollitia provident quia
                                veritatis. Ab ad dolor ea eaque ipsam nam neque non optio
                                reiciendis sapiente! Autem beatae error facere iste
                                laboriosam. Cum deleniti ex fuga iste recusandae repellendus,
                                vero? Alias aliquam beatae cumque, eaque enim illo incidunt,
                                ipsum iste maxime quia reprehenderit sapiente unde velit. Ab
                                accusantium alias aut autem commodi distinctio enim est et
                                fugit ipsa laudantium nostrum odio pariatur perspiciatis
                                possimus praesentium, quam quia quod rem similique sint
                                temporibus ullam voluptatibus! Accusantium, asperiores
                                corporis dolore doloribus facilis ipsa molestias
                                necessitatibus neque porro provident qui, ratione sequi sint
                                sit, suscipit. Numquam.
                            </p>
                            <button
                                class="text-primary-green text-sm mt-1"
                                onclick="toggleReview(this)"
                            >
                                Читать полностью
                            </button>
                        </div>
                        <div class="flex justify-between items-center mt-auto pt-2">
                <span
                    class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                >Стамбул / Море чудес</span
                >
                            <div class="text-lg text-[#FF9500] leading-none">★★★★★</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-bg-gray">
                    <div class="bg-bg-gray rounded-[32px] p-6 flex flex-col gap-2">
                        <div class="flex flex-col gap-1 mb-2">
                            <h4
                                class="font-condensed font-medium text-xl 2xl:text-2xl leading-[18px] md:leading-[1.1666666666666667em] tracking-[0.01em] text-black m-0"
                            >
                                Алимджанов Жахангир
                            </h4>
                            <p
                                class="font-sans font-normal text-sm 2xl:text-base leading-6 tracking-[0.01em] text-text-gray m-0"
                            >
                                25 сентября 2025
                            </p>
                        </div>
                        <div>
                            <p
                                class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-black m-0 flex-1 line-clamp-4"
                            >
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                                architecto cumque explicabo inventore iusto neque nulla rerum
                                sed similique voluptas.
                            </p>
                            <button
                                class="text-primary-green text-sm mt-1"
                                onclick="toggleReview(this)"
                            >
                                Читать полностью
                            </button>
                        </div>
                        <div class="flex justify-between items-center mt-auto pt-2">
                <span
                    class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] tracking-[0.01em] text-primary-green"
                >Стамбул / Море чудес</span
                >
                            <div class="text-lg text-[#FF9500] leading-none">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section
        class="max-w-[1920px] mx-auto px-[60px] py-[60px] 2xl:py-[100px] max-md:px-5 max-md:py-20"
    >
        <div
            class="flex flex-col items-center gap-5 text-center mb-[60px] mx-auto relative"
        >
            <h2
                class="font-condensed font-bold text-[40px] xl:text-[50px] 2xl:text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
            >
                Поделимся нашим опытом
            </h2>
            <p
                class="font-sans font-normal text-base 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
            >
                Мы заранее подобрали для вас готовые туры по вашему настроению
            </p>
            <!-- Articles Button -->
            <button
                class="lg:absolute right-0 bottom-0 flex items-center gap-2 px-8 py-4 bg-bg-gray border border-bg-gray rounded-2xl font-medium text-xl leading-[1.2em] tracking-[0.01em] text-black cursor-pointer hover:bg-[#e8e8e8] transition-colors"
            >
                К статьям
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
            </button>
        </div>

        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 justify-items-center"
        >
            <!-- Article Card 1 -->
            <div
                class="w-full max-w-[435px] 2xl:h-[520px] h-[430px] bg-bg-gray rounded-[32px] overflow-hidden relative flex flex-col"
            >
                <img
                    src="{{asset('image/zagolovok-eto.png')}}"
                    class="w-full object-cover 2xl:h-[320px] h-[260px] bg-bg-gray border-b border-[#D2D2D2] flex-shrink-0"
                />
                <div class="2xl:p-5 p-4 flex flex-col 2xl:gap-3 gap-2 flex-1">
                    <h3
                        class="font-condensed font-bold text-[26px] 2xl:text-[32px] leading-[1em] text-black m-0"
                    >
                        Заголовок статьи
                    </h3>
                    <p
                        class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] text-text-gray m-0 flex-1"
                    >
                        Описание этой статьи используется для структуры поиска SEO
                    </p>
                    <p
                        class="font-sans font-medium text-lg leading-[1.333em] text-black mt-auto"
                    >
                        20 августа 2025
                    </p>
                </div>
            </div>

            <!-- Article Card 2 -->
            <div
                class="w-full max-w-[435px] 2xl:h-[520px] h-[430px] bg-bg-gray rounded-[32px] overflow-hidden relative flex flex-col"
            >
                <img
                    src="{{asset('image/zagolovok-eto.png')}}"
                    class="w-full object-cover 2xl:h-[320px] h-[260px] bg-bg-gray border-b border-[#D2D2D2] flex-shrink-0"
                />
                <div class="2xl:p-5 p-4 flex flex-col 2xl:gap-3 gap-2 flex-1">
                    <h3
                        class="font-condensed font-bold text-[26px] 2xl:text-[32px] leading-[1em] text-black m-0"
                    >
                        Заголовок статьи
                    </h3>
                    <p
                        class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] text-text-gray m-0 flex-1"
                    >
                        Описание этой статьи используется для структуры поиска SEO
                    </p>
                    <p
                        class="font-sans font-medium text-lg leading-[1.333em] text-black mt-auto"
                    >
                        20 августа 2025
                    </p>
                </div>
            </div>

            <!-- Article Card 3 -->
            <div
                class="w-full max-w-[435px] 2xl:h-[520px] h-[430px] bg-bg-gray rounded-[32px] overflow-hidden relative flex flex-col"
            >
                <img
                    src="{{asset('image/zagolovok-eto.png')}}"
                    class="w-full object-cover 2xl:h-[320px] h-[260px] bg-bg-gray border-b border-[#D2D2D2] flex-shrink-0"
                />
                <div class="2xl:p-5 p-4 flex flex-col 2xl:gap-3 gap-2 flex-1">
                    <h3
                        class="font-condensed font-bold text-[26px] 2xl:text-[32px] leading-[1em] text-black m-0"
                    >
                        Заголовок статьи
                    </h3>
                    <p
                        class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] text-text-gray m-0 flex-1"
                    >
                        Описание этой статьи используется для структуры поиска SEO
                    </p>
                    <p
                        class="font-sans font-medium text-lg leading-[1.333em] text-black mt-auto"
                    >
                        20 августа 2025
                    </p>
                </div>
            </div>

            <!-- Article Card 4 -->
            <div
                class="w-full max-w-[435px] 2xl:h-[520px] h-[430px] bg-bg-gray rounded-[32px] overflow-hidden relative flex flex-col"
            >
                <img
                    src="{{asset('image/zagolovok-eto.png')}}"
                    class="w-full object-cover 2xl:h-[320px] h-[260px] bg-bg-gray border-b border-[#D2D2D2] flex-shrink-0"
                />
                <div class="2xl:p-5 p-4 flex flex-col 2xl:gap-3 gap-2 flex-1">
                    <h3
                        class="font-condensed font-bold text-[26px] 2xl:text-[32px] leading-[1em] text-black m-0"
                    >
                        Заголовок статьи
                    </h3>
                    <p
                        class="font-sans font-normal text-base 2xl:text-lg leading-[1.333em] text-text-gray m-0 flex-1"
                    >
                        Описание этой статьи используется для структуры поиска SEO
                    </p>
                    <p
                        class="font-sans font-medium text-lg leading-[1.333em] text-black mt-auto"
                    >
                        20 августа 2025
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section
        class="max-w-[1920px] mx-auto px-[60px] py-[60px] 2xl:py-[100px] max-md:px-5 lg:max-md:py-20 max-md:pt-10"
    >
        <div
            class="flex flex-col items-center gap-5 text-center mb-[60px] max-w-[800px] mx-auto"
        >
            <h2
                class="lg:whitespace-nowrap font-condensed font-bold text-[clamp(48px,4.167vw,80px)] leading-[1em] tracking-[-0.02em] text-black m-0"
            >
                Есть вопросы? У нас есть ответы.
            </h2>
            <p
                class="font-sans font-normal max-w-[90%] text-xl leading-[1.2em] tracking-[0.01em] text-text-gray m-0"
            >
                Вы можете найти ответы на часто задаваемые вопросы или обратитесь в
                службу поддержки
            </p>
        </div>

        <div
            class="bg-bg-gray rounded-8 overflow-hidden rounded-[32px] max-w-[1180px] mx-auto"
        >
            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:pt-9 2xl:pb-[18px] px-6 pt-6 pb-[6px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-xl 2xl:text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:py-[18px] px-6 py-[12px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:py-[18px] px-6 py-[12px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:py-[18px] px-6 py-[12px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:py-[18px] px-6 py-[12px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:py-[18px] px-6 py-[12px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 2xl:py-[18px] px-6 py-[12px] cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>

            <div
                class="bg-bg-gray mb-1 overflow-hidden transition-colors hover:bg-[#e8e8e8] faq-item"
            >
                <div
                    class="flex justify-between items-center 2xl:px-9 px-6 2xl:pt-[18px] pt-[6px] pb-6 2xl:pb-9 cursor-pointer faq-question"
                >
                    <h3
                        class="font-sans font-medium text-2xl leading-[1.333em] tracking-[0.01em] text-black m-0"
                    >
                        Вопрос
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
                        Ответ
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
