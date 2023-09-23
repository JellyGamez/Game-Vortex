<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-800 min-h-screen">
    <header class="mx-auto h-14 bg-gray-950 rounded-b-full max-w-5xl xl:max-w-6xl w-full shadow-lg flex items-center">
        <div class="grid grid-cols-3 text-cyan-primary font-semibold w-full">
            <nav class="w-full flex space-x-0 justify-end items-center ">
                <a href="/" wire:navigate class="px-2 py-3 rounded-full hover:bg-gray-800 transition duration-250"> Games </a>
                <a href="/reviews" wire:navigate class="px-2 py-3 rounded-full hover:bg-gray-800 transition duration-250"> Reviews </a>
                <a href="/coming-soon" wire:navigate class="px-2 py-3 rounded-full hover:bg-gray-800 transition duration-250 whitespace-nowrap"> Coming soon </a>
            </nav>
            <div class="flex justify-center items-center">
                <a href="/" wire:navigate class="p-2 rounded-full hover:bg-gray-800 transition duration-250 text-2xl font-bold flex items-center"> 
                    {{-- <p class="mr-2"> GAME </p>
                    <div class="flex items-center">
                        V
                        <img src="/logo.png" class="w-6 h-6" alt="O">
                        RTEX
                    </div> --}}
                    <img src="logo1.png" class="h-8" alt="GAME VORTEX">

                </a>
            </div>
            <div class="flex items-center">
                <div class="ml-2 w-64 relative flex items-center">
                    <input class="focus:outline-none focus:bg-gray-700 rounded-full bg-gray-800 text-sm pl-3 pr-9 py-1.5 w-64 placeholder-cyan-primary transition duration-250"
                        placeholder="Search..."
                    >
                    <svg class="w-4 h-4 absolute right-3 fill-cyan-primary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490.4 490.4" xml:space="preserve">
                        <g>
                            <path d="M484.1,454.796l-110.5-110.6c29.8-36.3,47.6-82.8,47.6-133.4c0-116.3-94.3-210.6-210.6-210.6S0,94.496,0,210.796
                                s94.3,210.6,210.6,210.6c50.8,0,97.4-18,133.8-48l110.5,110.5c12.9,11.8,25,4.2,29.2,0C492.5,475.596,492.5,463.096,484.1,454.796z
                                M41.1,210.796c0-93.6,75.9-169.5,169.5-169.5s169.6,75.9,169.6,169.5s-75.9,169.5-169.5,169.5S41.1,304.396,41.1,210.796z"
                            />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="mx-auto h-14 bg-gray-950 rounded-t-full max-w-5xl xl:max-w-6xl w-full shadow-lg flex items-center">
        <div class="grid grid-cols-3 text-cyan-primary  w-full">
        <div class="col-start-1 flex justify-end">
            <div>
                Powered by
                <a href="https://www.igdb.com/api" class="font-bold"> IGDB API </a>
            </div>
        </div>
        <div class="col-start-3 flex justify-start">
            <div>
                Built using the
                <a href="https://tallstack.dev/" class="font-bold"> TALL Stack </a>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>
