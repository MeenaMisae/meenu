<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 btn text-sm btn-outline font-semibold uppercase hover:bg-[#3b3b3b]']) }}>{{ $slot }}</button>
