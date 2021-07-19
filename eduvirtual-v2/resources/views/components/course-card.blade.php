@props(['course'])

<article class="overflow-hidden bg-white rounded shadow-lg ">
    <img class="object-cover w-full h-48" src="{{Storage::url($course->image->url)}}" alt="">


    <div class="px-6 py-4">
        <!--<h1 class="mb-2 text-xl leading-6 text-gray-700">{{Str::limit($course->title,40)}}</h1>-->
        <p class="mb-2 text-sm text-gray-500">Inicio: {{$course->date_start}}</p>
        <p class="mb-2 text-sm text-gray-500">Precio: ${{$course->payment->value}}</p>
    <a href="{{route('courses.show', $course)}}"
        class="block px-4 py-2 mt-4 font-bold text-center text-white bg-yellow-500 rounded hover:bg-yellow-700">
        Mas Información
    </a>
</div>
</article>
