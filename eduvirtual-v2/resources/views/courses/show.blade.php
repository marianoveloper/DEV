<x-app-layout>
    <section class="py-10 mb-1 bg-green-900">
        <div class="container ">
            <div>

                <div class="text-white ">
                    <h1 class="text-5xl">{{$course->title}}</h1>
                </div>
                <span class="inline-flex items-center justify-center px-2 py-1 mt-2 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">Inscripciones Abiertas</span>

            </div>

        </div>

    </section>
    <div class="mx-auto md:fixed right-20">
        <article class="overflow-hidden bg-white rounded shadow-lg md:inset-y-0 ">
            <img class="object-scale-down w-full h-64 sm:object-cover " src="{{asset($course->image->url)}}" alt="">


            <div class="px-6 py-4">

                <p class="mb-2 text-gray-500 text-md">Inicio: {{$course->date_start}}</p>
                <p class="mb-2 text-gray-500 text-md">Precio: ${{$course->payment->value}}</p>
                <p class="mb-2 text-gray-500 text-md">Duracion: 3 meses </p>
                <a href="{{route('courses.show', $course)}}"
                    class="block px-8 py-3 mt-4 text-center text-white bg-yellow-500 border rounded hover:border-gray-500 hover:bg-white hover:text-green-900">
                    Inscripcion
                </a>
                <a href="{{route('courses.show', $course)}}"
                    class="block px-8 py-3 mt-4 text-center text-green-900 border border-green-900 rounded hover:border-white hover:bg-yellow-500 hover:text-white">Consulta</a>
            </div>
        </article>

    </div>




</x-app-layout>
