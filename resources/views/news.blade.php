<x-layout>
    @section('content')
        <div class="flex justify-center">
            <form class="flex items-center max-w-lg mx-auto">

                <div class="relative w-full">

                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Buscar noticia..." required />
                </div>
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>Buscar
                </button>
            </form>

        </div>
        <div class="mt-10"></div>

        <div class="container mx-auto max-w-2xl">

            <div class="mb-4">
                <a href="/"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="" width="150"
                        height="100">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noticias 1</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Officia incididunt anim amet nulla
                            incididunt ad. Officia velit minim exercitation mollit culpa est tempor ullamco. Labore dolore
                            nulla cupidatat pariatur culpa anim consectetur sint commodo laboris amet amet proident
                            adipisicing.</p>
                    </div>
                </a>
            </div>
            <div class="mb-4">
                <a href="/noticia"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="" width="150">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noticias 1</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Officia incididunt anim amet nulla
                            incididunt ad. Officia velit minim exercitation mollit culpa est tempor ullamco. Labore dolore
                            nulla cupidatat pariatur culpa anim consectetur sint commodo laboris amet amet proident
                            adipisicing.</p>
                    </div>
                </a>
            </div>
            <div class="mb-4">
                <a href="/noticia"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="" width="150">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noticias 1</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Officia incididunt anim amet nulla
                            incididunt ad. Officia velit minim exercitation mollit culpa est tempor ullamco. Labore dolore
                            nulla cupidatat pariatur culpa anim consectetur sint commodo laboris amet amet proident
                            adipisicing.</p>
                    </div>
                </a>
            </div>
        </div>
    @endsection
</x-layout>
