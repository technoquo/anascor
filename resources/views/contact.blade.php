<x-layout>
    @section('content')
        <div class="container mx-auto p-6">
            <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <h2 class="text-3xl font-bold mb-4 text-center dark:text-white">Contáctanos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Información de Contacto -->
                    <div class="dark:text-white">
                        <h3 class="text-xl font-semibold mb-2">Nuestra Dirección</h3>
                        <p>Calle Principal 1234</p>
                        <p>Ciudad, Estado, 12345</p>

                        <h3 class="mt-4 text-xl font-semibold mb-2 dark:text-white">Envíanos un Correo</h3>
                        <p><a href="mailto:info@ejemplo.com" class="text-blue-600  dark:text-white">info@ejemplo.com</a></p>
                    </div>

                    <!-- Enlaces de Redes Sociales -->
                    <div>
                        <h3 class="text-xl font-semibold mb-2 dark:text-white">Síguenos</h3>
                        <div class="flex space-x-4 mt-2">
                            <a href="https://facebook.com" target="_blank"
                                class="text-blue-600 dark:text-blue-400 hover:underline">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22.676 0H1.326C.595 0 0 .596 0 1.326v21.348C0 23.404.595 24 1.326 24H12.81v-9.294H9.692v-3.622h3.118V8.414c0-3.096 1.891-4.785 4.651-4.785 1.324 0 2.462.099 2.794.143v3.24l-1.916.001c-1.502 0-1.794.715-1.794 1.762v2.31h3.588l-.467 3.622h-3.121V24h6.117C23.404 24 24 23.404 24 22.674V1.326C24 .596 23.404 0 22.676 0z" />
                                </svg>
                            </a>
                            <a href="https://instagram.com" target="_blank"
                                class="text-pink-600 dark:text-pink-400 hover:underline">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.311.975.975 1.249 2.241 1.311 3.608.058 1.266.07 1.646.07 4.849s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.311 3.608-.975.975-2.241 1.249-3.608 1.311-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.311-.975-.975-1.249-2.241-1.311-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.311-3.608.975-.975 2.241-1.249 3.608-1.311C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.735 0 8.332.015 7.052.072 5.773.129 4.644.322 3.69.797 2.735 1.272 1.928 1.989 1.25 2.868c-.679.879-1.195 1.988-1.456 3.176C-.378 7.263-.471 8.202-.472 12c0 3.798.094 4.737.248 6.059.261 1.188.777 2.297 1.456 3.176.679.879 1.486 1.596 2.441 2.071.954.475 2.083.668 3.362.725 1.279.057 1.683.072 4.948.072s3.669-.015 4.948-.072c1.279-.057 2.408-.25 3.362-.725.954-.475 1.761-1.192 2.441-2.071.679-.879 1.195-1.988 1.456-3.176.154-1.322.248-2.261.248-6.059 0-3.798-.094-4.737-.248-6.059-.261-1.188-.777-2.297-1.456-3.176-.679-.879-1.486-1.596-2.441-2.071-.954-.475-2.083-.668-3.362-.725C15.668.015 15.265 0 12 0zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.14a3.978 3.978 0 110-7.956 3.978 3.978 0 010 7.956zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
                                </svg>
                            </a>
                            <a href="https://twitter.com" target="_blank"
                                class="text-blue-500 dark:text-blue-300 hover:underline">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.949.555-2.005.959-3.127 1.184-.897-.956-2.178-1.555-3.594-1.555-2.719 0-4.92 2.203-4.92 4.92 0 .39.045.765.127 1.124-4.087-.205-7.715-2.164-10.141-5.144-.422.724-.666 1.561-.666 2.475 0 1.708.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.697 4.374 3.946 4.827-.413.111-.848.171-1.296.171-.314 0-.621-.03-.921-.086.623 1.948 2.43 3.367 4.574 3.408-1.675 1.314-3.791 2.099-6.088 2.099-.395 0-.785-.023-1.17-.068 2.173 1.394 4.75 2.206 7.548 2.206 9.054 0 14.001-7.496 14.001-13.986 0-.213-.005-.426-.014-.637.961-.694 1.8-1.562 2.46-2.549z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-layout>
