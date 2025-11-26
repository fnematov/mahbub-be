<div class="w-full px-3 py-2 bg-white rounded-2xl text-black focus-within:ring-2 focus-within:ring-primary-green">
    <label class="block text-xs 2xl:text-sm text-label-gray mb-1">
        {{ $title }}
        @if($required ?? false)
            <span class="text-required-label">*</span>
        @endif
    </label>

    {{ $slot }}
</div>
