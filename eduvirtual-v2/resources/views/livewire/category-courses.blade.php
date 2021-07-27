<div>
    @if(count($courses))
    <div class="glider-contain">
        <ul class="glider">
            @foreach($courses as $course)
            <li class="bg-white rounded-lg shadow {{$loop->last ? '' : 'sm:mr-4'}}">
                <a href="{{route('courses.show', $course)}}">
                    <article>
                        <figure>
                            <img class="object-cover object-center w-full" src="{{Storage::url($course->image->url)}}" alt="">
                        </figure>
                        <div class="px-6 py-4">
                            <!--<h1 class="mb-2 text-xl leading-6 text-gray-700">{{Str::limit($course->title,40)}}</h1>-->
                            <p class="mb-2 text-sm text-gray-500">Inicio: {{$course->date_start}}</p>
                            <p class="mb-2 text-sm text-gray-500">Precio: ${{$course->payment->value}}</p>

                        </div>
                    </article>
                </a>
            </li>
            @endforeach
        </ul>

        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
    @else
    <div class="flex items-center justify-center h-48 mb-4 bg-white border border-gray-100 rounded-lg shadow-xl">
        <div class="w-10 h-10 duration-300 border-2 border-indigo-500 rounded animate-spin ease"></div>
    </div>
    @endif
</div>