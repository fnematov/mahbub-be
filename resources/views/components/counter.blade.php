@props(['title', 'id', 'text', 'default' => 1])

@php
    // Load previous value if validation failed
    $value = old($id, $default);
@endphp

<div class="w-full pl-3 pr-2 py-2 bg-white rounded-2xl flex items-center justify-between shadow-sm">
    <div>
        <label class="block text-xs 2xl:text-sm text-gray-400">
            {{ $title }}
        </label>
        <p class="text-black text-base 2xl:text-lg font-semibold">
            <span id="{{ $id }}CountText">{{ $value }}</span> {{ $text }}
        </p>
    </div>

    <div class="flex items-center gap-2 bg-gray-100 rounded-xl px-1 py-1">
        <button type="button"
                id="decrease{{ ucfirst($id) }}Btn"
                class="w-10 h-10 bg-white rounded-lg shadow-sm flex items-center justify-center text-xl hover:bg-gray-50 active:scale-95">
            −
        </button>

        <span id="{{ $id }}Count" class="w-8 text-center font-medium text-base 2xl:text-lg">
            {{ $value }}
        </span>

        <button type="button"
                id="increase{{ ucfirst($id) }}Btn"
                class="w-10 h-10 bg-white rounded-lg shadow-sm flex items-center justify-center text-xl hover:bg-gray-50 active:scale-95">
            +
        </button>
    </div>

    {{-- Hidden input --}}
    <input type="hidden" name="{{ $id }}" id="{{ $id }}Field" value="{{ $value }}">
</div>

{{-- JS for this counter --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
        let count = {{ $value }};

        const countEl = document.getElementById("{{ $id }}Count");
        const textEl = document.getElementById("{{ $id }}CountText");
        const fieldEl = document.getElementById("{{ $id }}Field");

        const decBtn = document.getElementById("decrease{{ ucfirst($id) }}Btn");
        const incBtn = document.getElementById("increase{{ ucfirst($id) }}Btn");

        function update() {
            countEl.textContent = count;
            textEl.textContent = count;
            fieldEl.value = count;
        }

        decBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (count >= 1) {
                count--;
                update();
            }
        });

        incBtn.addEventListener("click", (e) => {
            e.preventDefault();
            count++;
            update();
        });
    });
</script>
