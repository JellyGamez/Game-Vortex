<div>
    <h2 class="text-xl text-center sm:text-left font-semibold text-cyan-primary">
        Popular Games
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800">
        @for ($i = 0; $i < 10; $i++)
            <div class="mt-10 font-ubuntu">
                <img src="img/6-1-941782-52.webp">
                <div>
                    Payday 3  
                </div>
                <div>
                    PC, PS4  
                </div>
            </div>
        @endfor
    </div>
</div>