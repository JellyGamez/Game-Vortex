<div class="w-fit mx-auto flex flex-col gap-16">
    <div class="w-full">
        <h2 class="text-xl text-center xs:text-left font-bold text-cyan-primary">
            POPULAR GAMES
        </h2>

        {{-- <p class="text-base text-center xs:text-left text-cyan-primary">
            Don't miss today's trending titles!
        </p> --}}
    
        <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8 gap-y-10 mt-10 w-fit mx-auto">
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

    <div class="grid grid-cols-5">
        <div class="col-span-4">
            <div class="w-full">
                <h2 class="text-xl text-center xs:text-left font-bold text-cyan-primary mb-2">
                    RECENTLY REVIEWED
                </h2>
                {{-- <p class="text-base text-center xs:text-left text-cyan-primary">
                    Lorem ispum dolor sit amet
                </p> --}}
            </div>

            <div class="flex flex-col mt-10 gap-10 w-fit">
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-fit">
                        @livewire('extended-card', [
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

        <div class="flex flex-col justify-between items-end">
            <div>
                <h2 class="text-xl text-center xs:text-left font-bold text-cyan-primary mb-4">
                    COMING SOON
                </h2>
            </div>
            <div class="flex flex-col mt-10 w-fit">
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-fit">
                        @livewire('compact-card', [
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
    </div>

</div>
