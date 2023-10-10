<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-color-primary mt-6 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 p-2 pl-4 pr-4 hover:text-black']) }}>
    {{ $slot }}
</button>

