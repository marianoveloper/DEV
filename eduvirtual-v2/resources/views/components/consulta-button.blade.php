<button {{ $attributes->merge(['type' => 'button', 'class' => ' w-full  block px-8 py-3 mt-4 text-center bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-yellow-700 focus:shadow-outline-yellow active:bg-yellow-600 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
