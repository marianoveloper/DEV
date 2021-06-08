<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('images/homes/portada-2.png')}})">
        <div class="px-4 max-w-7x1 max-auto sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-green-900">Estudiá Online en la Uccuyo </h1>
                <p class="mt-2 mb-4 text-lg text-green-800"> Ofrecemos Capacitaciones a Distancia</p>


                @livewire('search')

            </div>
        </div>

    </section>

    <section class="mt-24">
        <h1 class="mb-6 text-3xl text-center text-green-900">Propuestas Virtuales</h1>
        <div
            class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src={{asset('images/homes/carrera.png')}}>

                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-green-800"> Carreras </h1>
                </header>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src={{asset('images/homes/diplomatura.png')}}>

                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-green-800"> Diplomaturas y Especializaciones </h1>
                </header>

            </article>

            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src={{asset('images/homes/curso.png')}}>

                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-green-800 hover:scale-50">Cursos de Capacitación y/o Actualización </h1>
                </header>

            </article>

        </div>

    </section>

    <section class="py-16 mt-20" style="background-image: url({{asset('images/homes/barra.png')}})">
        <h1 class="text-3xl text-center text-white">¿No sabes que Estudiar?</h1>
        <p class="text-center text-white"> Busca en el catálogo de propuestas y encontra lo que buscas</p>
        <div class="flex justify-center mt-4">
            <a href="#"
            class="block px-4 py-2 mt-4 font-bold text-center text-yellow-500 bg-green-800 rounded hover:bg-green-900">
          Catálogo de Propuestas
        </a>
            </div>
        </div>
    </section>

    <section class="my-16">
        <h1 class="mb-6 text-3xl text-center text-green-900">DESTACADOS</h1>
        <div class="grid mx-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-w-7xl sm:px-6 lg:px-8 gap-x-6 gap-y-8">

            @foreach($courses as $course)
            <x-course-card :course="$course" />
            @endforeach

        </div>
    </section>

    <section class="w-full px-4 py-6 my-32 mt-16 bg-white">

        <div class="block w-full px-4 pt-3 pb-4 -mx-4 from-yellow-500 via-teal-600 to-yellow-600 bg-gradient-to-r">
            <div class="max-w-xl mx-auto">
                <h2 class="inline-block text-xl font-semibold text-left text-green-900">Suscribite y recibí novedades
                </h2>
                <p class="pl-px text-xs text-green-800">
                    Te enviaremos por email información sobre nuevos cursos, carreras y posgrados online
                </p>
                <form action="#" class="mt-2">
                    <div class="flex items-center">
                        <input type="email"
                            class="w-full px-2 py-4 mr-2 bg-gray-100 border border-gray-400 rounded-md shadow-inner focus:outline-none"
                            required>
                        <button class="px-5 py-2 text-white bg-green-800 rounded shadow "
                            style="margin-left: -7.8rem;">Suscribite</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

</x-app-layout>
