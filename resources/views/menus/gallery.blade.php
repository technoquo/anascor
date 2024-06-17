<x-layout>
    @section('content')
        <div class="flex flex-nowrap justify-center py-6 px-5 gap-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($gallerias as $galleria)
                    <div class="grid gap-4">

                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/anascor50/' . $galleria->foto) }}"
                                alt="ANASCOR 50 aniversario">
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex items-center justify-center space-x-4">
            <!-- Previous Button -->
            @if ($gallerias->onFirstPage())
                <span
                    class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg cursor-not-allowed">
                    Anterior
                </span>
            @else
                <a href="{{ $gallerias->previousPageUrl() }}"
                    class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Anterior
                </a>
            @endif

            <!-- Next Button -->
            @if ($gallerias->hasMorePages())
                <a href="{{ $gallerias->nextPageUrl() }}"
                    class="flex items-center justify-center px-4 h-10 ms-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Siguiente
                </a>
            @else
                <span
                    class="flex items-center justify-center px-4 h-10 ms-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg cursor-not-allowed">
                    Siguiente
                </span>
            @endif
        </div>
    @endsection
</x-layout>
