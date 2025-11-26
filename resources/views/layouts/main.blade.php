@php use App\Helpers\Helper;use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tour Agency - Добро пожаловать в Узбекистан</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Fira+Sans+Condensed:wght@500;700&display=swap"
        rel="stylesheet"
    />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/imask"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary-green": "#079156",
                        "bg-gray": "#F2F2F2",
                        "text-gray": "#777777",
                        "border-gray": "#E2E2E2",
                        "light-gray": "#A1A1A1",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        condensed: ["Fira Sans Condensed", "sans-serif"],
                    },
                },
            },
        };
    </script>

    <style>
        .trust-swiper,
        .testimonials-swiper {
            width: 100%;
            /*overflow: visible !important;*/
        }

        .trust-swiper .swiper-slide {
            background: #f3f3f3;
            border-radius: 24px;
            width: 440px; /* har bir slide o‘lchami — o‘zingizga qarab o‘zgartiring */
            height: 150px;
            transition: all 0.3s ease;
            opacity: 0.5;
        }

        .testimonials-swiper .swiper-slide {
            width: 440px;
        }

        .trust-swiper .swiper-slide-active,
        .testimonials-swiper .swiper-slide-active {
            opacity: 1;
            transform: scale(1.05);
        }

        @media screen and (max-width: 1200px) {
            .trust-swiper,
            .testimonials-swiper {
                overflow: hidden !important;
            }
        }

        @media screen and (max-width: 768px) {
            .trust-swiper .swiper-slide,
            .testimonials-swiper .swiper-slide {
                width: 90%;
            }

            .testimonials-swiper .swiper-slide {
                height: auto;
            }
        }
    </style>
</head>
<body class="font-sans text-black bg-white overflow-x-hidden">
<!-- Navigation -->

<!-- MOBILE SIDEBAR -->
<div
    id="mobileMenu"
    class="fixed top-0 right-0 w-[260px] h-full bg-white shadow-xl translate-x-full transition-transform duration-300 z-[999] p-6 md:hidden"
>
    <button onclick="toggleMobileMenu()" class="absolute top-4 right-4 p-2">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            height="26"
            width="26"
            fill="none"
            stroke="#000"
            stroke-width="2"
        >
            <path d="M6 6l12 12M18 6l-12 12"/>
        </svg>
    </button>

    <nav class="mt-12 flex flex-col gap-5">
        <a href="{{route('home')}}"
           class="text-lg font-medium {{request()->routeIs('home') ? 'text-primary-green' : ''}}"
        >Главная</a
        >
        <a href="{{route('tours')}}"
           class="text-lg font-medium" {{request()->routeIs('tours*') ? 'text-primary-green' : ''}}>Туры</a>
        <a href="{{route('articles')}}"
           class="text-lg font-medium {{request()->routeIs('articles*') ? 'text-primary-green' : ''}}">Статьи</a>
        <a href="{{route('contacts')}}"
           class="text-lg font-medium {{request()->routeIs('contacts') ? 'text-primary-green' : ''}}">Контакты</a>
    </nav>
</div>

<!-- Overlay (dark background) -->
<div
    id="menuOverlay"
    onclick="toggleMobileMenu()"
    class="fixed inset-0 bg-black/30 hidden md:hidden z-[998] backdrop-blur-sm"
></div>
<nav
    class="fixed top-0 left-0 py-2 right-0 z-[100] lg:px-[60px] bg-white/50 backdrop-blur-[40px]"
>
    <div
        class="max-w-[1920px] mx-auto flex justify-between items-center gap-5 px-2 lg:px-6"
    >
        <!-- Logo -->
        <a
            href="{{route('home')}}"
            class="md:flex items-center justify-center p-4 w-[120px] md:w-[176px] h-[72px] flex-shrink-0"
        >
            <img
                src="{{asset('image/logo.svg')}}"
                alt="Logo"
                class="w-full h-full object-contain"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
            />
        </a>

        <!-- Menu -->
        <div
            class="hidden md:flex justify-center items-center gap-9 px-8 py-3 bg-white/50 backdrop-blur-[40px] rounded-2xl flex-1 max-w-fit mx-auto"
        >
            <a
                href="{{route('home')}}"
                class="font-medium text-base leading-6 tracking-[0.01em] text-black no-underline whitespace-nowrap hover:opacity-70 transition-opacity {{request()->routeIs('home') ? 'text-primary-green' : ''}}"
            >Главная</a
            >
            <a
                href="{{route('tours')}}"
                class="font-medium text-base leading-6 tracking-[0.01em] no-underline whitespace-nowrap hover:opacity-70 transition-opacity {{request()->routeIs('tours*') ? 'text-primary-green' : ''}}"
            >Туры</a
            >
            <a
                href="{{route('articles')}}"
                class="font-medium text-base leading-6 tracking-[0.01em] text-black no-underline whitespace-nowrap hover:opacity-70 transition-opacity {{request()->routeIs('articles*') ? 'text-primary-green' : ''}}"
            >Статьи</a>
            <a
                href="{{route('contacts')}}"
                class="font-medium text-base leading-6 tracking-[0.01em] text-black no-underline whitespace-nowrap hover:opacity-70 transition-opacity {{request()->routeIs('contacts') ? 'text-primary-green' : ''}}"
            >Контакты</a
            >
        </div>

        <div class="flex items-center">
            <!-- Language Selector -->
            <div
                class="relative language-selector-wrapper flex-shrink-0 border-r lg:border-none mr-4"
            >
                <button
                    class="flex items-center gap-2 px-4 bg-white/50 backdrop-blur-[40px] rounded-2xl font-medium text-[15px] leading-[1.6em] tracking-[0.01em] text-black cursor-pointer hover:bg-white/70 transition-colors"
                    onclick="toggleLanguageDropdown('languageDropdown')"
                >
                    <span
                        class="text-xl">{{Helper::getLocaleFlag(LaravelLocalization::getCurrentLocale())}}</span>
                    <span>{{Helper::getLocaleName(LaravelLocalization::getCurrentLocale())}}</span>
                    <svg
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="language-arrow transition-transform"
                    >
                        <path
                            d="M6 9L12 15L18 9"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
                <div
                    id="languageDropdown"
                    class="absolute top-full right-0 mt-2 bg-white rounded-2xl shadow-lg overflow-hidden hidden z-50 min-w-[120px]"
                >
                    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $localeData)
                        <a
                            href="{{ LaravelLocalization::getLocalizedURL($locale, url()->current()) }}"
                            class="w-full flex items-center gap-2 px-4 py-3 hover:bg-bg-gray transition-colors text-left"
                        >
                            <span class="text-xl">{{Helper::getLocaleFlag($locale)}}</span>
                            <span
                                class="font-medium text-[15px] text-black">{{ Helper::getLocaleName($locale) }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <img
                src="{{asset('image/menu.svg')}}"
                width="20"
                alt=""
                class="lg:hidden"
                onclick="toggleMobileMenu()"
            />
        </div>
    </div>
</nav>

@yield('content')

<!-- Custom JavaScript -->
<script>
    function toggleReview(btn) {
        const text = btn.previousElementSibling;

        text.classList.toggle("line-clamp-4");

        btn.innerText = text.classList.contains("line-clamp-4")
            ? "Читать полностью"
            : "Скрыть";
    }

    // Initialize Tours Swiper
    const toursSwiper = new Swiper(".tours-swiper", {
        slidesPerView: "auto",
        freeMode: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".custom-next",
            prevEl: ".custom-prev",
        },
    });

    const swiper = new Swiper(".trust-swiper", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        breakpoints: {
            320: {
                spaceBetween: 10,
            },
            640: {
                spaceBetween: 20,
            },
            768: {
                spaceBetween: 25,
            },
            1024: {
                spaceBetween: 30,
            },
        },
    });

    // Initialize Testimonials Swiper
    const testimonialsSwiper = new Swiper(".testimonials-swiper", {
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        breakpoints: {
            320: {
                spaceBetween: 10,
            },
            640: {
                spaceBetween: 20,
            },
            768: {
                spaceBetween: 25,
            },
            1024: {
                spaceBetween: 30,
            },
        },
    });

    // Initialize Gallery Swiper
    const gallerySwiper = new Swiper(".gallery-swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".gallery-swiper .swiper-button-next",
            prevEl: ".gallery-swiper .swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Language Dropdown Functions
    function toggleLanguageDropdown() {
        const dropdown = document.getElementById("languageDropdown");
        const arrow = document.querySelector(".language-arrow");
        dropdown.classList.toggle("hidden");
        if (arrow) {
            arrow.style.transform = dropdown.classList.contains("hidden")
                ? "rotate(0deg)"
                : "rotate(180deg)";
        }
    }

    function selectLanguage(code, flag) {
        const button = document.querySelector(
            ".language-selector-wrapper button"
        );
        const flagSpan = button.querySelector("span:first-child");
        const textSpan = button.querySelector("span:nth-child(2)");

        if (flagSpan) flagSpan.textContent = flag;
        if (textSpan) textSpan.textContent = code;

        document.getElementById("languageDropdown").classList.add("hidden");
        document.querySelector(".language-arrow").style.transform =
            "rotate(0deg)";
    }

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        const wrapper = document.querySelector(".language-selector-wrapper");
        if (wrapper && !wrapper.contains(event.target)) {
            const dropdown = document.getElementById("languageDropdown");
            if (dropdown && !dropdown.classList.contains("hidden")) {
                dropdown.classList.add("hidden");
                const arrow = document.querySelector(".language-arrow");
                if (arrow) arrow.style.transform = "rotate(0deg)";
            }
        }
    });

    // FAQ Accordion
    document.querySelectorAll(".faq-item").forEach((item) => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");
        const icon = question.querySelector("svg");

        question.addEventListener("click", () => {
            const isOpen = item.classList.contains("open");

            // Close all items
            document.querySelectorAll(".faq-item").forEach((i) => {
                i.classList.remove("open");
                i.querySelector(".faq-answer").style.maxHeight = "0";
                i.querySelector(".faq-answer").style.padding = "0";
                i.querySelector(".faq-question svg").style.transform =
                    "rotate(0deg)";
            });

            // Open clicked item if it wasn't open
            if (!isOpen) {
                item.classList.add("open");
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.style.padding = "0 36.92px 32px";
                icon.style.transform = "rotate(180deg)";
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        var phoneInput = document.querySelector("input[name='phone']");
        if (phoneInput) {
            IMask(phoneInput, {
                mask: '+998 (00) 000 00 00'
            });
        }
    });
</script>
@yield('scripts')
<script src="{{resource_path('js/mobile-nav.js')}}"/>
</body>
</html>
