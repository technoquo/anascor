<x-layout>
    @section('content')
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Conozcan Nuestra Junta Directiva
                    </h2>
                    {{-- <p class="mt-6 mb-6 lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac
                        elit
                        odio vitae elementum enim vitae ullamcorper suspendisse.</p> --}}
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-16 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <!-- Adjusted gap-y from gap-y-12 to gap-y-16 -->
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/victor.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Victor Vargas
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Presidente</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/joel.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Joel Gazel Gazel
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Vice Presidente</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/maxwell.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Maxwell Cruz</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Tesorero</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/olga.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Olga Alvarez</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Secretaria</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/lileana.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Liliana Chavez
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Vocal 1</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/user.png') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Josué Palma</h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Vocal 2</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/milena.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Milena Abarca
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Vocal 3</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6 mb-6">
                            <img class="w-1/2 rounded-full" src="{{ asset('img/luisdiego.jpg') }}" alt="">
                            <div class="ml-1">
                                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Luis Diego Chan
                                </h3>
                                <p class="text-sm font-semibold leading-6 text-indigo-600">Fiscal</p>
                            </div>
                        </div>
                    </li>
                    <!-- Additional <li> elements with the same structure -->
                </ul>
            </div>
        </div>
    @endsection
</x-layout>
