<div class="w-40 min-h-screen pt-20 px-10 border-solid border-r-[1px] border-slate-300">
    <ul class=" text-black">
        @foreach ($sidebar as $name => $url)
            <li class="mb-4  hover:text-red-500 ease-in-out delay-100 duration-500"><a
                    href="{{ $url }}">{{ $name }}</a></li>
        @endforeach
    </ul>
</div>
