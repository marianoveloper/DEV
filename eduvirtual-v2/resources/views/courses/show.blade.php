<x-app-layout>
    <section class="py-10 mb-8 bg-green-900 ">
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


    <div class="container grid grid-cols-3">

    <div class="mx-auto md:fixed right-20 top-20">
        <article class="overflow-hidden bg-white rounded shadow-lg ">
            <img class="object-contain w-full h-64 " src="{{Storage::url($course->image->url)}}" alt="">


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
        <div class="col-span-2">
            <section class="mb-12">


                <h1 class="mb-2 text-3xl font-bold">Presentación</h1>
                <div class="text-base text-gray-700">{{$course->description}}</div>


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
            <section>
                <article class="mb-4 shadow" x-data="{ open: false }">
                    <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                        x-on:click="open = !open">
                        <h1 class="text-lg font-bold text-gray-600">Resoluciones</h1>
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

            <section class="mt-16 mb-12">


                <h1 class="mb-2 text-3xl font-bold">Docentes</h1>

                <!-- component -->
                <!-- post card -->
                <div class="flex mx-4 my-8 bg-white rounded-lg shadow-lg max-w sm:w-full ">
                    <!--horizantil margin is just for display-->
                    <div class="flex items-start px-4 py-6">
                        <img class="object-cover w-16 h-16 mr-4 rounded-full shadow"
                            src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                            alt="avatar">
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="-mt-1 text-lg font-semibold text-gray-900">Brad Adams </h2>
                                <small class="text-sm text-gray-700">22h ago</small>
                            </div>
                            <p class="text-gray-700">Joined 12 SEP 2012. </p>
                            <p class="hidden mt-3 text-sm text-gray-700 md:block">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>

                        </div>
                    </div>
                </div>
                <!-- component -->
                <!-- post card -->
                <div class="flex max-w-md mx-4 my-8 bg-white rounded-lg shadow-lg md:mx-auto md:max-w-2xl ">
                    <!--horizantil margin is just for display-->
                    <div class="flex items-start px-4 py-6">
                        <img class="object-cover w-12 h-12 mr-4 rounded-full shadow"
                            src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                            alt="avatar">
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="-mt-1 text-lg font-semibold text-gray-900">Brad Adams </h2>
                                <small class="text-sm text-gray-700">22h ago</small>
                            </div>
                            <p class="text-gray-700">Joined 12 SEP 2012. </p>
                            <p class="mt-3 text-sm text-gray-700 ">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>

                        </div>
                    </div>
                </div>
                <!-- component -->
                <!-- post card -->
                <div class="flex max-w-md mx-4 my-8 bg-white rounded-lg shadow-lg md:mx-auto md:max-w-2xl ">
                    <!--horizantil margin is just for display-->
                    <div class="flex items-start px-4 py-6">
                        <img class="object-cover w-12 h-12 mr-4 rounded-full shadow"
                            src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                            alt="avatar">
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="-mt-1 text-lg font-semibold text-gray-900">Brad Adams </h2>
                                <small class="text-sm text-gray-700">22h ago</small>
                            </div>
                            <p class="text-gray-700">Joined 12 SEP 2012. </p>
                            <p class="mt-3 text-sm text-gray-700">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>

                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>


    <x-slot name="js">
        <script>
            var botmanWidget = {
                frameEndpoint: '/botman/chat',
                title: "Uccuyo Virtual",
                introMessage: 'Hola a Uccuyo Virtual En que podemos ayudarte?',
                mainColor: '#fd9807',
                bubbleBackground: '#fd9807',
                bubbleAvatarUrl: '../images/chatbot3.png',
                placeholderText: 'Ingresa tu consulta',
                aboutLink: 'www.evirtualsj.com',
                aboutText: 'DEV Uccuyo',
            };

        </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    </x-slot>
</x-app-layout>
