@props(['course'])
<li class="bg-white rounded-lg shadow">
    <a href="{{route('courses.show', $course)}}">
        <article>
            <figure>
                <img class="object-cover object-center w-full" src="{{Storage::url($course->image->url)}}" alt="">
            </figure>
            <div class="px-6 py-4">
                <!--<h1 class="mb-2 text-xl leading-6 text-gray-700">{{Str::limit($course->title,40)}}</h1>-->
                <p class="mb-2 text-sm text-gray-500">Inicio: {{$course->date_start}}</p>
                <p class="mb-2 text-sm text-gray-500">Precio: ${{$course->price}}</p>

            </div>
        </article>
    </a>
    <div class="px-6 py-4">
    <a href="{{route('courses.show', $course)}}"
    class="block px-4 py-2 mt-4 font-bold text-center text-white bg-yellow-500 rounded hover:bg-yellow-700">
    Mas Información
</a>
    </div>
</li>
