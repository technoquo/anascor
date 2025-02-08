<x-layout>
    @section('content')
        <div class="md:flex justify-center ">
            <h1 class="font-bold text-3xl dark:text-white">Convenio con las empresas de tecnologia accesible para las
                personas sordas</h1>
        </div>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-lg  sm:py-16 lg:px-6 justify-center">
               
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                   
                    <a href="https://www.helenai.com/" target="_blank">
                        <img class="h-auto md:w-full w-1/2 rounded-lg"
                            src="{{ asset('img/helenai_logo.jpg') }}"
                            alt="">
                    </a>
                    <div>
                        <a href="https://www.sign-bridge.com/" target="_blank">
                            <img class="md:w-full w-1/2 h-auto rounded-lg"
                                src="{{ asset('img/signbridge.jpg') }}"
                                alt="">
                        </a>
                    </div>
                  
                </div>
            </div>
          </section>
       
          
       
    @endsection
</x-layout>
