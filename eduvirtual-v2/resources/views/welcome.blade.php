<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('images/homes/portada-1.png')}})">
        <div class="px-4 max-w-7x1 max-auto sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-white font-fold">Estudiá Online en la Uccuyo </h1>
                <p class="mt-2 mb-4 text-lg text-white"> Ofrecemos Capacitaciones a Distancia</p>


                @livewire('search')

            </div>
        </div>

    </section>

    <section class="mt-24">
        <h1 class="mb-6 text-3xl text-center text-gray-600">Propuestas Virtuales</h1>
        <div
            class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src={{asset('images/homes/carrera.png')}}>

                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700"> Carreras </h1>
                </header>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src={{asset('images/homes/diplomatura.png')}}>

                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700"> Diplomaturas y Especializaciones </h1>
                </header>

            </article>

            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36" src={{asset('images/homes/curso.png')}}>

                </figure>
                <header class="mt-2">
                    <h1 class="text-xl text-center text-gray-700">Cursos de Capacitación y/o Actualización </h1>
                </header>

            </article>

        </div>

    </section>

    <section class="py-16 mt-20" style="background-image: url({{asset('images/homes/barra.png')}})">
        <h1 class="text-3xl text-center text-white">¿No sabes que Estudiar?</h1>
        <p class="text-center text-white"> Busca en al catálogo de propuestas y encontra lo que buscas</p>
        <div class="flex justify-center mt-4">
            <div class="relative inline-flex">
                <svg class="absolute top-0 right-0 w-2 h-2 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 412 232">
                    <path
                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                        fill="#648299" fill-rule="nonzero" /></svg>
                <select
                    class="h-10 pl-5 pr-10 text-center text-gray-600 bg-white border border-gray-300 rounded-full appearance-none hover:border-gray-400 focus:outline-none">
                    <option>Busca lo que te gusta</option>
                    <option>Carreras</option>
                    <option>Diplomaturas y Especializaciones</option>
                    <option>Cursos de Capacitación/Actualización</option>

                </select>
            </div>
        </div>
    </section>

    <section class="my-16">
        <h1 class="mb-6 text-3xl text-center text-gray-600">DESTACADOS</h1>
        <div class="grid mx-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-w-7xl sm:px-6 lg:px-8 gap-x-6 gap-y-8">

            @foreach($courses as $course)
            <x-course-card :course="$course" />
            @endforeach

        </div>
    </section>

    <section class="w-full px-4 py-6 my-32 mt-16 bg-gray-200">

        <div class="px-4 pt-3 pb-4 -mx-4 bg-white border-b border-gray-400">
            <div class="max-w-xl mx-auto">
                <h2 class="inline-block text-xl font-semibold text-left text-gray-800">Suscribite y recibí novedades
                </h2>
                <p class="pl-px text-xs text-gray-700">
                    Te enviaremos por email información sobre nuevos cursos, carreras y posgrados online
                </p>
                <form action="#" class="mt-2">
                    <div class="flex items-center">
                        <input type="email"
                            class="w-full px-2 py-4 mr-2 bg-gray-100 border border-gray-400 rounded-md shadow-inner focus:outline-none"
                            required>
                        <button class="px-5 py-2 text-gray-200 bg-blue-600 rounded shadow "
                            style="margin-left: -7.8rem;">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

</x-app-layout>
