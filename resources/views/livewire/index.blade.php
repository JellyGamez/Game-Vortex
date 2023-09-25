<div class="w-fit mx-auto">
    <h2 class="text-2xl text-center xs:text-left font-semibold text-cyan-primary">
        Popular Games
    </h2>
    <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8 gap-y-10 border-b border-gray-800 mt-10 w-fit mx-auto">
        @for ($i = 0; $i < 10; $i++)
            <div class="w-fit">
                @livewire('card', [
                    'title' => 'Payday 3', 
                    'platforms' => [
                        [
                            'id' => 1,
                            'name' => 'PC'
                        ],
                        [
                            'id' => 2,
                            'name' => 'PS4'
                        ],
                        [
                            'id' => 3,
                            'name' => 'Nintendo'
                        ]
                    ]
                ])
            </div>
        @endfor
    </div>
</div>