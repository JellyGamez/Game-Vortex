<div class="font-ubuntu duration-400 text-white w-full">
    <a wire:navigate href="/games/{{ $slug }}" class="flex">
        <div class="relative">
            <div class="overflow-hidden rounded-2xl hover:opacity-75 transition duration-200">
                <img src="img/6-1-941782-52.webp" class="rounded-2xl hover:scale-[107%] transition duration-300">
            </div>
            <div class="absolute -right-4 -bottom-4 w-14 h-14 rounded-full border-[3px] border-green-600 flex items-center justify-center text-xs font-semibold bg-gray-900">
                90%
            </div>
        </div>

        <div>
            <div class="text-center font-semibold">
                {{ $title }}
            </div>
            <div class="flex justify-center text-neutral-500 font-medium text-sm w-full">
                @foreach ($platforms as $platform)
                    <div class="flex items-center" wire:key="{{ $platform['name'] }}">
                        {{ $platform['name'] }}
                        @if (!$loop->last)
                            <div class="w-1 h-1 rounded-full mx-1 bg-neutral-500"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </a>

</div>
