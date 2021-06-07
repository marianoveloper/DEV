@props(['course'])

<article class="flex flex-col card">
    <img class="object-cover w-full h-52" src="{{asset($course->image->url)}}" alt="">

    <div class="flex flex-col flex-1 card-body">
    <div class="flex flex-col flex-1 card-body">
        <h1 class="card-title">{{Str::limit($course->title,40)}}</h1>
        <p class="mb-2 text-sm text-gray-500">Inicio: {{$course->date_start}}</p>
    </div>
    <a href="{{route('courses.show', $course)}}"
        class="mt-4 btn btn-primary btn-block">
        Mas Información
    </a>
</article>
