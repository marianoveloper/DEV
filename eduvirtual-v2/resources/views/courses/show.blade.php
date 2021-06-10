<x-app-layout>
    <section class="py-10 mb-8 bg-green-900">
        <div class="container ">
            <div>

                <div class="text-white ">
                    <h1 class="text-5xl">{{$course->title}}</h1>
                </div>
                <span
                    class="inline-flex items-center justify-center px-2 py-1 mt-2 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">Inscripciones
                    Abiertas</span>

            </div>

        </div>

    </section>

    <div class="mx-auto md:fixed right-20 top-20">
        <article class="overflow-hidden bg-white rounded shadow-lg md:inset-y-0 ">
            <img class="object-scale-down w-full h-64" src="{{asset($course->image->url)}}" alt="">


            <div class="px-6 py-4">

                <p class="mb-2 text-gray-500 text-md">Inicio: {{$course->date_start}}</p>
                <p class="mb-2 text-gray-500 text-md">Precio: ${{$course->payment->value}}</p>
                <p class="mb-2 text-gray-500 text-md">Duracion: 3 meses </p>
                <a href="{{route('courses.show', $course)}}"
                    class="block px-8 py-3 mt-4 text-center text-white bg-yellow-500 border rounded hover:border-gray-500 hover:bg-white hover:text-green-900">
                    Inscripcion
                </a>
                <a href="{{$course->url_info}}"
                    class="block px-8 py-3 mt-4 text-center text-green-900 border border-green-900 rounded hover:border-white hover:bg-yellow-500 hover:text-white">Informativo</a>
            </div>
        </article>

    </div>

    <div class="container grid grid-cols-3">
        <div class="col-span-2">
            <section class="mb-12">


                <h1 class="mb-2 text-3xl font-bold">Presentación</h1>
                <div class="text-base text-gray-700">{{$course->description}}</div>


            </section>

            <section>

                <article class="mb-4 shadow" x-data="{ open: false }">
                    <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                        x-on:click="open = !open">
                        <h1 class="text-lg font-bold text-gray-600">Destinatarios</h1>
                    </header>
                    <div class="px-4 py-2 bg-white" x-show="open">
                        <p class="text-base text-gray-700">{{$course->destination}}</p>
                    </div>
                </article>


            </section>
            <section>
                <article class="mb-4 shadow" x-data="{ open: false }">
                    <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                        x-on:click="open = !open">
                        <h1 class="text-lg font-bold text-gray-600">Objetivos</h1>
                    </header>
                    <div class="px-4 py-2 bg-white" x-show="open">
                        <ul>
                            @foreach($course->goals as $goal)
                            <li class="text-base text-gray-700">{{$goal->name}}</li>
                            @endforeach


                        </ul>
                    </div>
                </article>
            </section>
            <section>
                <article class="mb-4 shadow" x-data="{ open: false }">
                    <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                        x-on:click="open = !open">
                        <h1 class="text-lg font-bold text-gray-600">Requisitos</h1>
                    </header>
                    <div class="px-4 py-2 bg-white" x-show="open">
                        <ul>
                            @forelse($course->requirements as $requirement)
                            <li class="text-base text-gray-700">{{$requirement->name}}</li>

                            @empty
                            <li>Sin Requisitos </li>
                            @endforelse
                        </ul>
                    </div>
                </article>
            </section>
        </div>

    </div>



</x-app-layout>
