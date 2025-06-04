<a {{ $attributes }}
    class="{{ $active ? 'font-black text-hitam' : 'text-hitam hover:bg-hitam hover:text-putih ease-in-out duration-100' }} text-shadow-2xs rounded-md px-3 py-2 text-sm aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
