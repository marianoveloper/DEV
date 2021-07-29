@props(['course'])

<li class="mb-4 bg-white rounded-lg shadow">
    <a href="{{route('courses.show', $course)}}">
    <article class="flex">
        <figure>
            <img class="object-cover object-center w-56 h-48" src="{{ Storage::url($course->image->url) }}" alt="">
        </figure>

        <div class="flex flex-col flex-1 px-6 py-4">
            <div class="flex justify-between">
                <div>
                    <h1 class="mb-2 text-lg font-semibold text-gray-700">{{ Str::limit($course->title,40) }}</h1>
                    <p class="mb-2 text-sm text-gray-500">Inicio: {{$course->date_start}}</p>
                    <p class="mb-2 text-sm text-gray-500">Precio: ${{$course->payment->value}}</p>
                </div>

                <div class="flex items-center">
                    <ul class="flex mt-auto text-md">
                        <li>
                            <x-danger-enlace href="{{ route('courses.show', $course) }}">
                                Más información
                            </x-danger-enlace>
                        </li>

                </div>
            </div>

            <div class="mt-auto mb-4">
                <span
                    class="inline-flex items-center justify-center px-2 py-1 mt-2 mr-2 text-xs font-bold leading-none text-red-100 bg-green-600 rounded-full">Inscripciones
                    Abiertas</span>
            </div>
        </div>
    </article>
    </a>
</li>
