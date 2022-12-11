<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-dark border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:opacity-50 active:bg-dark focus:outline-none focus:ring-dark focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
