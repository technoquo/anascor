<x-layout>
    @section('content')
        <div class="md:flex justify-center ">
            <h1 class="font-bold text-3xl dark:text-white">Convenio con las academias de LESCO</h1>
        </div>
        <div class="mx-auto max-w-7xl justify-center text-lg dark:text-white mt-10">

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <a href="https://handsonlesco.com/" target="_blank">
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://handsonlesco.com/wp-content/uploads/2020/10/footer-logo.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="https://cilescocr.com/" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/CILESCO.png') }}"
                            alt="CILESCO" width="200" height="200">
                    </a>
                </div>
                <div>
                    <a href="https://www.instagram.com/lescocultura/?hl=es" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/lescocultura.png') }}"
                            alt="LESCO Cultura">
                    </a>
                </div>
                <div>
                    <a href="https://lescoporcostarica.com/" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/lescoporcostarica.png') }}"
                            alt="LESCO por Costa Rica">
                    </a>
                </div>
                <div>
                    <a href="https://www.inlesco.com/" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/INLesco.png') }}"
                            alt="INLesco" width="250" height="250">
                    </a>
                </div>
                <div>
                    <a href="https://www.instagram.com/comulesco/" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/COMULESCO.png') }}"
                            width="320" height="320" alt="COMULESCO">
                    </a>
                </div>
                <div>
                    <a href="https://www.ensenascr.com/" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/ensenas.png') }}"
                            width="250" height="250" alt="enseñas">
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com/ilescocr/?locale=es_LA" target="_blank">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/academias/ILESCO.jpg') }}"
                            width="250" height="250" alt="ILESCO">
                    </a>
                </div>

            </div>

        </div>
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <hr class="mx-auto my-6 border-gray-400 sm:mx-auto dark:border-gray-700 lg:my-8" />
        </div>
    @endsection
</x-layout>
