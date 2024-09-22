<x-layout>
    <div class="bg-no-repeat bg-left bg-auto md:bg-cover h-screen"
        style="background-image: url('{{ Vite::asset('resources/CyaKrik-Resources/Homepage/herosection.jpg') }}')">

        <div class="flex flex-col space-y-8 justify-center items-center h-[90%]">
            <div class="text-xl md:text-5xl font-bold font-montserrat tracking-wide uppercase mb-16 md:mb-[125px]">
                <h1 class="text-center">
                    Промената доаѓа <span class="hidden md:inline"><br></span> од младите
                </h1>
            </div>

            <div class="w-[90%] sm:w-[70%] md:w-[50%] lg:w-[27%] flex flex-col">
                <h3 class="capitalize font-semibold text-2xl sm:text-3xl tracking-wider text-center mb-2">Кои сме ние?
                </h3>
                <article class="font-normal text-lg sm:text-xl text-center tracking-wide leading-7 sm:leading-8">
                    Центарот за младински активизам Крик е невладина, непрофитна организација основана од млади луѓе,
                    предводена од млади луѓе и работи за и со млади луѓе.
                </article>
                <a href="#"
                    class="bg-why mt-5 text-lg sm:text-xl font-bold py-3 px-20 sm:px-32 capitalize text-montserrat rounded-3xl place-self-center">
                    Повеќе за нас
                </a>
            </div>
        </div>
    </div>
</x-layout>
