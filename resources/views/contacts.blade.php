@php use App\Helpers\Helper; @endphp
@extends('layouts.main')

@section('content')
    <!-- Main Content -->
    <main class="max-w-[1920px] mx-auto pt-[60px] lg:pt-[100px] px-[20px] md:px-[60px] pb-[100px]">
        <!-- Header Section -->
        <section class="flex flex-col items-center gap-5 mb-[46px] mt-[48px]">
            <h1 class="font-condensed font-bold text-[40px] lg:text-[60px] 2xl:text-[80px] leading-[1em] tracking-[-0.02em] text-black text-center m-0">
                Контакты
            </h1>
            <p class="font-sans font-normal text-lg 2xl:text-xl leading-[1.2em] tracking-[0.01em] text-text-gray text-center max-w-[780px] m-0">
                Отправьте запрос и мы свяжемся с вами в ближайшее время
            </p>
        </section>

        <!-- Content Grid -->
        <div class="flex flex-col lg:flex-row gap-5 items-start justify-center">
            <!-- Left Side - Contact Information -->
            <div class="w-full lg:w-[680px] flex-shrink-0">
                <!-- Contact Info Card -->
                <div class="bg-bg-gray rounded-[32px] p-6 sm:p-8 mb-6">
                    <h2 class="font-condensed font-medium text-xl lg:text-2xl 2xl:text-[28px] leading-[1.071em] text-black mb-8 m-0">
                        Для получения дополнительной информации вы можете связаться с нами
                    </h2>

                    @foreach($contacts as $contact)
                        <div class="mb-8">
                            <h3 class="font-sans font-semibold text-base 2xl:text-lg leading-[1.333em] text-black mb-5 m-0">
                                {{$contact->manager_name}} – {{$contact->position}}
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start gap-2">
                                    <img src="{{asset('image/icons/phone.svg')}}" alt="">
                                    <div class="flex flex-col gap-1">
                                    <span
                                        class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] text-black">{{$contact->phone1}}</span>
                                    </div>
                                </div>
                                @if($contact->phone2)
                                    <div class="flex items-start gap-2">
                                        <img src="{{asset('image/icons/phone.svg')}}" alt="">
                                        <div class="flex flex-col gap-1">
                                        <span
                                            class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] text-black">{{$contact->phone2}}</span>
                                        </div>
                                    </div>
                                @endif
                                <div class="flex items-start gap-2">
                                    <img src="{{asset('image/icons/clock.svg')}}" alt="">
                                    <div class="flex flex-col gap-1">
                                    <span
                                        class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] text-black">{{Helper::getWorkingDays($contact->working_days)}}</span>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img src="{{asset('image/icons/clock.svg')}}" alt="">
                                    <div class="flex flex-col gap-1">
                                    <span
                                        class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] text-black">{{$contact->from->format('H:i')}} – {{$contact->to->format('H:i')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Office Address Card -->
                <div class="bg-bg-gray rounded-[32px] p-6 sm:p-8">
                    <h2 class="font-condensed font-medium text-xl lg:text-2xl 2xl:text-[28px] leading-[1.071em] text-black 2xl:mb-8 mb-6 m-0">
                        Адрес офис продаж
                    </h2>

                    <div class="">
                        @foreach($addresses as $key => $address)
                            <div class="flex items-center gap-2 mb-6">
                                <img src="{{asset('image/icons/MapPin.svg')}}" alt="">
                                <div class="flex-1">
                                    <p class="font-sans font-medium text-base 2xl:text-lg leading-[1.333em] text-black m-0">
                                        {{$key + 1}} – {{$address->address}}
                                    </p>
                                </div>
                            </div>
                            <div class="w-full h-[480px] bg-white rounded-[24px] overflow-hidden">
                                <div id="map{{$key}}" class="h-full"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right Side - Booking Form -->
            <aside class="w-full lg:w-[380px] flex-shrink-0 lg:sticky lg:top-[100px]">
                <div class="bg-bg-gray rounded-[32px] p-6">
                    <h3 class="font-sans font-medium text-lg 2xl:text-xl leading-[1.2em] text-black 2xl:mb-6 mb-4 m-0">
                        Оставить запрос
                    </h3>

                    <x-form button-text="Отправить"/>
                </div>
            </aside>
        </div>
    </main>

    <!-- Custom JavaScript -->

    <script>(g => {
            var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__",
                m = document, b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
        ({key: "AIzaSyA6myHzS10YXdcazAFalmXvDkrYCp5cLc8", v: "weekly"});</script>

    <script>

        async function initMap() {
            const {Map} = await google.maps.importLibrary("maps");
            map = new Map(document.getElementById("map"), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8,
            });
        }

        initMap();

        async function initMap2() {
            const {Map} = await google.maps.importLibrary("maps");
            map = new Map(document.getElementById("map2"), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8,
            });
        }

        initMap2();

        const countEl = document.getElementById("touristCount");
        const textEl = document.getElementById("touristText");
        const decBtn = document.getElementById("decreaseBtn");
        const incBtn = document.getElementById("increaseBtn");

        let count = 2;

        decBtn.addEventListener("click", (event) => {
            event.preventDefault();
            if (count > 1) {
                count--;
                updateCount();
            }
        });

        incBtn.addEventListener("click", (event) => {
            event.preventDefault();
            count++;
            updateCount();
        });

        function updateCount() {
            countEl.textContent = count;
            textEl.textContent = count;
        }

        // Tourist Counter Functions
        let touristCount = 2;

        function updateTouristInput() {
            const input = document.querySelector('input[value="2 туриста"]');
            if (input) {
                const forms = ['турист', 'туриста', 'туристов'];
                let form;
                if (touristCount % 10 === 1 && touristCount % 100 !== 11) {
                    form = forms[0];
                } else if ([2, 3, 4].includes(touristCount % 10) && ![12, 13, 14].includes(touristCount % 100)) {
                    form = forms[1];
                } else {
                    form = forms[2];
                }
                input.value = `${touristCount} ${form}`;
            }
        }

        function decreaseTourists() {
            if (touristCount > 1) {
                touristCount--;
                updateTouristInput();
            }
        }

        function increaseTourists() {
            touristCount++;
            updateTouristInput();
        }
    </script>
@endsection
