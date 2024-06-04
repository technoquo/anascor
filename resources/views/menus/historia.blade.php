<x-layout>
    @section('content')
        <div class="flex justify-center mb-10">
            <h1 class="font-bold text-3xl dark:text-white text-center">Historias de las Asociaciones</h1>
        </div>
        <div class="flex justify-center dark:text-white">
            <!-- The flex container centers its child horizontally -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-screen-xl">
                <!-- Responsive grid layout with different column counts based on screen size -->
                <div class="flex justify-center">
                    <figure class="relative max-w-sm mx-auto">
                        <img class="rounded-lg mx-auto" src="{{ asset('img/anascor1.png') }}" alt="image description">
                        <figcaption class="absolute px-4 text-lg text-white bottom-6 bg-black/60">
                            <p>Primera vez de la Federación Deportivo de Sordos de 1974 - primera foto</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="flex justify-center">
                    <figure class="relative max-w-sm mx-auto">
                        <img class="rounded-lg mx-auto" src="{{ asset('img/anascor2.png') }}" alt="image description">
                        <figcaption class="absolute px-4 text-lg text-white bottom-6 bg-black/60">
                            <p>Primera vez de la Federación Deportivo de Sordos de 1974 - segunda foto</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="flex justify-center">
                    <figure class="relative max-w-sm mx-auto">
                        <img class="rounded-lg mx-auto" src="{{ asset('img/anascor3.png') }}" alt="image description">
                        <figcaption class="absolute px-4 text-lg text-white bottom-6 bg-black/60">
                            <p>Mercado Central San José 1975</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="flex justify-center">
                    <figure class="relative max-w-sm mx-auto">
                        <img class="rounded-lg mx-auto" src="{{ asset('img/anascor4.png') }}" alt="image description">
                        <figcaption class="absolute px-4 text-lg text-white bottom-6 bg-black/60">
                            <p>Primera vez de la Historia primera presidenta de la Asociación en 1984</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>


        <div class="flex flex-col md:flex-row justify-center mb-10 gap-3 mt-12">
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-3 mx-auto md:mx-0">
                <img class="rounded-t-lg w-2/3 mx-auto" src="{{ asset('img/rafael.png') }}" alt="Rafael Valverde" />
                <div class="p-5">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">RAFAEL EDUARDO
                        VALVERDE ESQUIVEL</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fue él fundó de Asociación Deportiva de
                        Sordos de Costa Rica en 1974 y el primer presidente de ANASCOR.</p>
                </div>
            </div>
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-3 mx-auto md:mx-0">
                <img class="rounded-t-lg w-2/3 mx-auto" src="{{ asset('img/maria1.png') }}" alt="Maria Infante" />
                <div class="p-5">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">MARÍA INFANTE
                        CÉSPEDES</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">La primera mujer presidenta de ANASCOR
                    </p>
                </div>
            </div>
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-3 mx-auto md:mx-0">
                <img class="rounded-t-lg w-2/3 mx-auto" src="{{ asset('img/fernando1.png') }}" alt="Fernando Zuñiga" />
                <div class="p-5">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">FERNANDO ZUÑIGA
                        CRESPI</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ha sido presidente de ANASCOR en más de 12
                        ocasiones. Se ha destacado por su dedicación para mantener unida a la comunidad sorda y por buscar
                        constantemente soluciones en beneficio de las personas sordas. Su compromiso ha sido fundamental
                        para mantener viva la asociación, y ha demostrado una disposición constante para mejorar y
                        fortalecerla según las necesidades.</p>
                </div>
            </div>
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 py-3 mx-auto md:mx-0">
                <img class="rounded-t-lg w-2/3 mx-auto" src="{{ asset('img/diana1.png') }}" alt="Diana Lopez" />
                <div class="p-5">
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">DIANA LOPÉZ GRACIOZO
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Encontro el local de ANASCOR.....</p>
                </div>
            </div>
        </div>
    @endsection
</x-layout>
