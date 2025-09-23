<x-layout>
    @section('title', 'Asociacion Nacional de Sordos de Costa Rica')
    @section('content')
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="{{ asset('img/traspasoanascor.jpg') }}"
                 alt="anascor"
                 class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center brightness-[.25]"
            >
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                 aria-hidden="true"
            >
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                     style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                >
                </div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                 aria-hidden="true"
            >
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                     style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                >
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                {{-- <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">¡Conoce nuestra lucha por los
                        derechos de las personas sordas en Costa Rica!</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                        irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                </div> --}}
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                            class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10"
                    >
                        <a href="/mision">Misión <span aria-hidden="true">&rarr;</span></a>
                        <a href="/vision">Visión <span aria-hidden="true">&rarr;</span></a>
                        <a href="/valores">Nuestros valores <span aria-hidden="true">&rarr;</span></a>
                        <a href="/junta-directiva">Conozca nuestra Junta Directiva <span
                                    aria-hidden="true"
                            >&rarr;</span></a>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                        {{-- <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Asocaciones de Sordos</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
                        </div> --}}
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Poblacion Sorda</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">90.000+</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Afiliado FMS</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white"><img
                                        src="{{ asset('img/fms.png') }}"
                                        alt="FMS"
                                        class="w-40"
                                ></dd>
                        </div>
                        {{-- <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Paid time off</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
                        </div> --}}
                    </dl>
                </div>
            </div>
        </div>

        <section class="bg-white dark:bg-gray-900 flex justify-center">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md">
                    <h2 class="mb-4 text-4xl lg:text-6xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center">
                        Los
                        informes de las Actividades de los Comités durante el mes de marzo 2024 - febrero 2025.</h2>

                    <div class="flex justify-center space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">

                        <a href="{{ asset('pdf/actividades.pdf') }}"
                           target="_blank"
                           class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900"
                        >
                            Descargar PDF
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke-width="1.5"
                                 stroke="currentColor"
                                 class="size-6"
                            >
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"
                                />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <hr class="border border-gray-200  mb-8"></hr>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"
                >
                    Anniversario ANASCOR</h1>
                <p class="mb-8  text-lg font-normal text-gray-500 lg:text-6xl sm:px-16 lg:px-48 dark:text-gray-400">
                    1974-
                    2024
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="/galleria"
                       class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900"
                    >
                        Ver Galería de Fotos
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180"
                             aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 14 10"
                        >
                            <path stroke="currentColor"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M1 5h12m0 0L9 1m4 4L9 9"
                            />
                        </svg>
                    </a>

                </div>
            </div>
        </section>
        <hr class="border border-gray-200 mb-8"></hr>

        <section class="bg-gray-100 dark:bg-gray-800">
            <div class="py-12 px-4 mx-auto max-w-screen-xl text-center lg:py-20">
                <h2 class="mb-6 text-4xl lg:text-6xl font-extrabold text-gray-900 dark:text-white">
                    Día Internacional de las Personas Sordas
                </h2>

                <div class="max-w-3xl mx-auto text-lg text-gray-700 dark:text-gray-300 space-y-4 mb-10">
                    <p>📣 <strong>¡Atención!</strong></p>
                    <p>
                        En el marco de la <strong>Semana Internacional de las Personas Sordas</strong> 🫶 queremos
                        invitarles este
                        <strong>viernes 26 de septiembre</strong> en <strong>ANASCOR</strong>.
                    </p>
                    <p>⏰ Iniciamos a la 1:00 p.m. y durante la tarde y noche tendremos:</p>
                    <ul class="list-disc list-inside text-left">
                        <li>🎲 Actividades de interacción y juegos</li>
                        <li>🎬 Proyección de la película <em>El Silencio Natural</em></li>
                        <li>💬 Mesa Redonda a cargo del Comité de LESCO</li>
                    </ul>
                    <p>🙌 ¡Vení y aprovechá esta oportunidad para aprender, compartir y disfrutar!</p>

                    <p class="font-semibold">📍Ubicación:</p>
                    <p>
                        👉 <a href="https://maps.app.goo.gl/LHQcJkeFoRLNULdn7?g_st=ipc"
                             target="_blank"
                             class="text-blue-600 dark:text-blue-400 hover:underline"
                        >Google Maps</a><br>
                        👉 <a href="https://waze.com/ul/hd1u0x13d1"
                             target="_blank"
                             class="text-blue-600 dark:text-blue-400 hover:underline"
                        >Waze</a>
                    </p>
                </div>

                {{-- Imagen + Video --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    {{-- Imagen --}}
                    <div class="flex justify-center">
                        <img src="{{ asset('img/actividades.jpg') }}"
                             alt="Día Internacional de las Personas Sordas"
                             class="rounded-lg shadow-lg w-full max-w-2xl object-cover"
                        >
                    </div>

                    {{-- Video --}}
                    <div class="flex justify-center">
                        <video controls
                               class="rounded-lg shadow-lg w-full max-h-[500px]"
                        >
                            <source src="{{ asset('video/anascor.mp4') }}"
                                    type="video/mp4"
                            >
                            Tu navegador no soporta la reproducción de video.
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <hr class="border border-gray-200 mb-8"></hr>



        <section class="bg-white dark:bg-gray-900">
            <div class="py-12 px-4 mx-auto max-w-screen-xl text-center lg:py-20">
                <h2 class="mb-6 text-4xl lg:text-6xl font-extrabold text-gray-900 dark:text-white">
                    Charlas
                </h2>
                <p class="max-w-3xl mx-auto text-lg text-gray-700 dark:text-gray-300 mb-10">
                    Del <strong>domingo 21 al jueves 25 de septiembre</strong> compartimos un video cada día.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 text-center">
                    {{-- Domingo --}}
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Domingo 21 de septiembre de 2025<br> Tema: Historia de ANASCOR
                        </h3>
                        <div class="aspect-video">
                            <iframe
                                    src="https://www.youtube.com/embed/nKxQr0b07G4?si=TIq23EKOo8uMr1ND"
                                    class="w-full h-full rounded-lg shadow-lg"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    {{-- Lunes --}}
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Lunes 22 de septiembre de 2025<br> Tema: Cultura Sorda, Aliado en movimiento
                        </h3>
                        <div class="aspect-video">
                            <iframe
                                    src="https://www.youtube.com/embed/K8laUWqkYhY?si=I6pqVI1Nc_K1m5ut"
                                    class="w-full h-full rounded-lg shadow-lg"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    {{-- Martes (aún no disponible) --}}
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Martes 23 <br> Tema: Accesibilidad y Derechos
                        </h3>
                        <div class="flex items-center justify-center aspect-video bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg">
                            <span class="text-gray-600 dark:text-gray-300">Disponible el 23 de septiembre</span>
                        </div>
                    </div>

                    {{-- Miércoles (aún no disponible) --}}
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Miércoles 24 <br> Tema: Cultura Sorda
                        </h3>
                        <div class="flex items-center justify-center aspect-video bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg">
                            <span class="text-gray-600 dark:text-gray-300">Disponible el 24 de septiembre</span>
                        </div>
                    </div>

                    {{-- Jueves (aún no disponible) --}}
                    <div class="sm:col-span-2"> {{-- Ocupa toda la fila --}}
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Jueves 25 <br> Tema: Futuro de la Comunidad
                        </h3>
                        <div class="flex items-center justify-center aspect-video bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg">
                            <span class="text-gray-600 dark:text-gray-300">Disponible el 25 de septiembre</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <hr class="border border-gray-200 mb-8"></hr>
        <section class="bg-white dark:bg-gray-900">
            <h2 class="mb-8 text-4xl lg:text-6xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center">
                Actividades
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-6 max-w-screen-xl mx-auto">
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <blockquote class="instagram-media"
                                data-instgrm-captioned
                                data-instgrm-permalink="https://www.instagram.com/reel/DOwKUSADeiN/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"
                    >
                        <div style="padding:16px;">
                            <a href="https://www.instagram.com/reel/DOwKUSADeiN/?utm_source=ig_embed&amp;utm_campaign=loading"
                               style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                               target="_blank"
                            >
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                    <svg width="50px"
                                         height="50px"
                                         viewBox="0 0 60 60"
                                         version="1.1"
                                         xmlns="https://www.w3.org/2000/svg"
                                         xmlns:xlink="https://www.w3.org/1999/xlink"
                                    >
                                        <g stroke="none"
                                           stroke-width="1"
                                           fill="none"
                                           fill-rule="evenodd"
                                        >
                                            <g transform="translate(-511.000000, -20.000000)"
                                               fill="#000000"
                                            >
                                                <g>
                                                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div style="padding-top: 8px;">
                                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram
                                    </div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                </div>
                            </a>
                            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/reel/DOwKUSADeiN/?utm_source=ig_embed&amp;utm_campaign=loading"
                                   style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                   target="_blank"
                                >A post shared by ANASCOR Costa Rica (@anascor74)</a></p></div>
                    </blockquote>

                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <blockquote class="instagram-media"
                                data-instgrm-captioned
                                data-instgrm-permalink="https://www.instagram.com/p/DOwKQzmDb2G/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"
                    >
                        <div style="padding:16px;">
                            <a href="https://www.instagram.com/p/DOwKQzmDb2G/?utm_source=ig_embed&amp;utm_campaign=loading"
                               style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                               target="_blank"
                            >
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                    <svg width="50px"
                                         height="50px"
                                         viewBox="0 0 60 60"
                                         version="1.1"
                                         xmlns="https://www.w3.org/2000/svg"
                                         xmlns:xlink="https://www.w3.org/1999/xlink"
                                    >
                                        <g stroke="none"
                                           stroke-width="1"
                                           fill="none"
                                           fill-rule="evenodd"
                                        >
                                            <g transform="translate(-511.000000, -20.000000)"
                                               fill="#000000"
                                            >
                                                <g>
                                                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div style="padding-top: 8px;">
                                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram
                                    </div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                </div>
                            </a>
                            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/p/DOwKQzmDb2G/?utm_source=ig_embed&amp;utm_campaign=loading"
                                   style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                   target="_blank"
                                >A post shared by ANASCOR Costa Rica (@anascor74)</a></p></div>
                    </blockquote>

                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <blockquote class="instagram-media"
                                data-instgrm-captioned
                                data-instgrm-permalink="https://www.instagram.com/reel/DOrQf3ykvNZ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"
                    >
                        <div style="padding:16px;">
                            <a href="https://www.instagram.com/reel/DOrQf3ykvNZ/?utm_source=ig_embed&amp;utm_campaign=loading"
                               style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                               target="_blank"
                            >
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                    <svg width="50px"
                                         height="50px"
                                         viewBox="0 0 60 60"
                                         version="1.1"
                                         xmlns="https://www.w3.org/2000/svg"
                                         xmlns:xlink="https://www.w3.org/1999/xlink"
                                    >
                                        <g stroke="none"
                                           stroke-width="1"
                                           fill="none"
                                           fill-rule="evenodd"
                                        >
                                            <g transform="translate(-511.000000, -20.000000)"
                                               fill="#000000"
                                            >
                                                <g>
                                                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div style="padding-top: 8px;">
                                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram
                                    </div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                </div>
                            </a>
                            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/reel/DOrQf3ykvNZ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                   style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                   target="_blank"
                                >A post shared by ANASCOR Costa Rica (@anascor74)</a></p></div>
                    </blockquote>

                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <blockquote class="instagram-media"
                                data-instgrm-captioned
                                data-instgrm-permalink="https://www.instagram.com/p/DOrQZFQkgJG/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"
                    >
                        <div style="padding:16px;">
                            <a href="https://www.instagram.com/p/DOrQZFQkgJG/?utm_source=ig_embed&amp;utm_campaign=loading"
                               style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                               target="_blank"
                            >
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                    <svg width="50px"
                                         height="50px"
                                         viewBox="0 0 60 60"
                                         version="1.1"
                                         xmlns="https://www.w3.org/2000/svg"
                                         xmlns:xlink="https://www.w3.org/1999/xlink"
                                    >
                                        <g stroke="none"
                                           stroke-width="1"
                                           fill="none"
                                           fill-rule="evenodd"
                                        >
                                            <g transform="translate(-511.000000, -20.000000)"
                                               fill="#000000"
                                            >
                                                <g>
                                                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div style="padding-top: 8px;">
                                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram
                                    </div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                </div>
                            </a>
                            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/p/DOrQZFQkgJG/?utm_source=ig_embed&amp;utm_campaign=loading"
                                   style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                   target="_blank"
                                >A post shared by ANASCOR Costa Rica (@anascor74)</a></p></div>
                    </blockquote>

                </div>
            </div>

            <script async
                    src="//www.instagram.com/embed.js"
            ></script>
        </section>

    @endsection

</x-layout>