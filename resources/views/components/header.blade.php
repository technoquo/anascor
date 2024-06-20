<nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/anascor.png') }}" class="w-[160px] dark:bg-white rounded-md" alt="Logo de ANASCOR" />
            <span
                class="self-center  font-semibold whitespace-nowrap dark:text-white text-2xl hidden md:block">Asociación
                Nacional de
                Sordos de Costa Rica</span>
        </a>
        <button data-collapse-toggle="mega-menu-full-image" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mega-menu-full-image" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">

                <li>
                    <button id="mega-menu-full-cta-image-button" data-collapse-toggle="mega-menu-full-image-dropdown"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Nuestro
                        trabajo <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                </li>
                <li>
                    <a href="/quienes"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Quiénes
                        somos</a>
                </li>
                <li>
                    <a href="/comites"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Comités</a>
                </li>
                <li>
                    <a href="/contacto"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                </li>
            </ul>
            <div class="relative left-10 ">
                <x-dark />
            </div>
        </div>

    </div>
    <div id="mega-menu-full-image-dropdown"
        class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600 hidden">
        <div
            class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
            <ul class="hidden mb-4 space-y-4 md:mb-0 md:block" aria-labelledby="mega-menu-full-image-button">
                {{-- <li>
                    <a href="/servicios" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Servicios
                    </a>
                </li> --}}
                <li>
                    <a href="/expresidentes" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Ex-presidentes de ANASCOR: Liderazgo que deja huella
                    </a>
                </li>
                <li>
                    <a href="/estructura" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Estructura Administración de ANASCOR
                    </a>
                </li>
                <li>
                    <a href="https://wfdeaf.org/" target="_blank"
                        class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Federación Mundial de Sordos
                    </a>
                    {{-- <li>
                    <a href="/acceso" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Acceso de Asociado
                    </a>
                </li> --}}
            </ul>
            <ul class="hidden mb-4 space-y-4 md:mb-0 md:block" aria-labelledby="mega-menu-full-image-button">

                </li>
                <li>
                    <a href="/historia" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Historia de las Asociaciones
                    </a>
                </li>
                <li>
                    <a href="/academias" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Convenio con las academias de LESCO
                    </a>
                </li>
                <li>
                    <a href="/convenios" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Convenio con Hellen AI y SignBrigde
                    </a>
                </li>
            </ul>

            <a href="#"
                class="p-8 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                style="background-image: url(/docs/images/dashboard-overview.png)">
                <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Ver video en LESCO</p>
                <iframe width="280" height="157"
                    src="https://www.youtube.com/embed/fuyToXDquyo?si=Qt0wjmVylZ2eaf2R" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </a>
        </div>
    </div>
</nav>
