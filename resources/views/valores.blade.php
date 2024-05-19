<x-layout>
    @section('content')
        <div class="md:flex justify-center">
            <h1 class="font-bold text-3xl dark:text-white">NUESTROS VALORES</h1>
        </div>
        <div class="mx-auto max-w-lg justify-center text-lg dark:text-white mt-10">

            <iframe class="w-full aspect-video hover:aspect-square" width="560" height="315"
                src="https://www.youtube.com/embed/ZZ_CuVy8NEE?si=6a7LUHzc8xlN30u8&amp;controls=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <ul class="list-disc list-inside text-gray-500 dark:text-gray-400 mt-9 space-y-2">
                <li>Compromiso con las personas sordas.</li>
                <li>Dignidad.</li>
                <li>Responsabilidad.</li>
                <li>Honestidad.</li>
                <li>Transparencia.</li>
                <li>Compromiso.</li>
                <li>Excelencia.</li>
                <li>Respeto.</li>
                <li>Empatía.</li>
                <li>Trabajo.</li>
                <li>Disciplina.</li>
                <li>Solidaridad.</li>
                <li>Tolerancia.</li>
            </ul>
        </div>
        <x-boton />
    @endsection
</x-layout>
