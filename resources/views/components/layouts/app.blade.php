<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ? 'Game Vortex - ' . $title : 'Game Vortex' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-800 min-h-screen lg:mx-14">

    <header class="mx-auto h-14 bg-gray-950 rounded-b-full max-w-7xl w-full shadow-lg flex items-center">
        <div class="flex justify-between text-cyan-primary font-semibold w-full mx-10 h-full relative text-sm lg:text-base">
        
            <div class="flex justify-center items-center absolute w-full h-full z-1">
                <a href="/" wire:navigate class="p-1.5 rounded-full hover:bg-gray-800 transition duration-250 text-2xl font-bold flex items-center"> 
                    <img src="img/full-logo.png" class="h-full max-h-6 lg:max-h-7" alt="GAME VORTEX">
                </a>
            </div>
            <nav class="items-center z-0 hidden md:flex">
                <a href="/" wire:navigate class="p-1.5 rounded-full hover:bg-gray-800 transition duration-250"> Games </a>
                <a href="/reviews" wire:navigate class="p-1.5 rounded-full hover:bg-gray-800 transition duration-250"> Reviews </a>
                <a href="/coming-soon" wire:navigate class="p-1.5 rounded-full hover:bg-gray-800 transition duration-250 "> Coming soon </a>
            </nav>
            <div class="items-center z-0 hidden md:flex">
                <div class="ml-2 w-52 lg:w-64 relative flex items-center">
                    <input class="focus:outline-none focus:bg-gray-700 rounded-full bg-gray-800 text-xs lg:text-sm pl-3 pr-9 py-2 w-64 placeholder-white text-white transition duration-250"
                        placeholder="Search..."
                    >
                    <svg class="w-4 h-4 absolute right-3 fill-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490.4 490.4" xml:space="preserve">
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

    <main class="max-w-7xl mx-auto">
        <div class="mx-11 mt-11">
            {{ $slot }}
        </div>
    </main>

    <footer class="mx-auto h-14 bg-gray-950 lg:rounded-t-full max-w-7xl w-full shadow-lg flex items-center mt-96">
        <div class="flex justify-between text-cyan-primary w-full mx-6 lg:mx-10 text-xs md:text-sm">
            <div class="flex justify-end">
                <a href="https://www.igdb.com/api" class="p-1.5 rounded-full hover:bg-gray-800 transition duration-250 text-center">
                    Powered by
                    <span class="font-bold"> IGDB API </span>
                </a>
            </div>
            <div class="flex justify-start">
                <a href="https://tallstack.dev/" class="p-1.5 rounded-full hover:bg-gray-800 transition duration-250 text-center">
                    Built using the
                    <span class="font-bold"> TALL Stack </span>
                </a>
            </div>
        </div>
    </footer>

</body>

</html>
