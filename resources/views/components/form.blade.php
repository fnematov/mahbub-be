@php use App\Helpers\Helper; @endphp
@props([
    'buttonText' => 'Отправить',
    'showMonth' => true,
    'tour_id' => null
])

<form class="space-y-4" method="post" action="{{ route('order') }}">
    @csrf
    @if (session('success'))
        <div class="p-4 mb-4 bg-green-50 border border-green-400 text-green-700 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    {{-- Hidden counters --}}
    @if(isset($tour_id))
        <input type="hidden" name="tour_id" value="{{$tour_id}}">
    @endif

    {{-- Name --}}
    <x-input.label title="{{ __('messages.name') }}" required>
        <input type="text" name="name" value="{{old('name')}}" maxlength="100" class="w-full focus:outline-none"
               placeholder="{{ __('messages.enter_name') }}">
    </x-input.label>

    {{-- Phone --}}
    <x-input.label title="{{ __('messages.phone') }}" required>
        <input type="tel" name="phone" value="{{old('phone')}}" maxlength="19" class="w-full focus:outline-none"
               placeholder="+998 (__) ___ __ __">
    </x-input.label>

    {{-- Month selector (optional) --}}
    @if ($showMonth)
        <x-input.label title="{{ __('messages.month_departure') }}">
            <select class="w-full focus:outline-none -ml-1" name="month">
                <option value="">{{ __('messages.any_month') }}</option>
                @foreach(Helper::getMonths() as $key => $months)
                    <option value="{{ $key }}" {{ old('month') == $key ? 'selected' : '' }}>
                        {{ $months }}
                    </option>
                @endforeach
            </select>
        </x-input.label>
    @endif

    {{-- Adults counter --}}
    <x-counter title="{{ __('messages.adults_count') }}" id="adult_count" text="{{ __('messages.adults') }}" default="{{old('adult_count') ?? 2}}"/>

    {{-- Children counter --}}
    <x-counter title="{{ __('messages.children_count') }}" id="child_count" text="{{ __('messages.child') }}" default="{{old('child_count') ?? 1}}"/>

    {{-- Submit button --}}
    {{-- ERRORS --}}
    @if ($errors->order->any())
        <div class="p-4 mb-4 bg-red-50 border border-red-400 text-red-700 rounded-xl">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->order->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button type="submit"
            class="w-full py-3 bg-primary-green rounded-2xl font-medium text-lg 2xl:text-xl text-white hover:bg-[#067a47] transition">
        {{ $buttonText }}
    </button>

</form>
